<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Notifications\PasswordResetNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ForgetPassword extends Component
{
    #[Validate('required|email|exists:users,email')]
    public string $email;

    /**
     * @throws \Throwable
     */
    public function store()
    {
        $this->validate();
        $user = User::whereEmail($this->email)->first();
        $token = Str::uuid();

        DB::beginTransaction();
        try {
            DB::table('password_reset_tokens')->where('email', $this->email)->delete();
            DB::table('password_reset_tokens')->insert([
                'email' => $this->email,
                'token' => $token
            ]);
        }catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        DB::commit();
        $user->notify(new PasswordResetNotification($token, $this->email));
        $this->reset('email');
        session()->flash('success', 'Un email de reinitialisation a ete envoye');
        return redirect()->route('forget-password');
    }
    public function render()
    {
        return view('livewire.auth.forget-password')->title('Mot de passe oublier')
            ->layoutData(['description' => 'Se connecter sur ' . config('app.name')]);
    }

}
