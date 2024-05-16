<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Reset extends Component
{
    public string $token;
    public string $email;
    #[Validate('required|min:8|max:20|confirmed')]
    public string $password;
    public string $password_confirmation;

    public User $user;

    public function mount()
    {
        $this->email = request()->query('email');
        $password_reset_token = DB::table('password_reset_tokens')->where('token', request()->query('token'))->where('created_at', '>=', now()->subHour() )->first();
        if (is_null($password_reset_token)) {
            session()->flash('error', 'Le lien de réinitialisation a expiré. <br>Veuillez en demander un nouveau.');
            return redirect()->route('forget-password');
        }
        $this->token = $password_reset_token->token;
        $this->user = User::whereEmail($this->email)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.auth.reset')->title('Réinitialiser votre Mot de passe')
            ->layoutData(['description' => 'Se connecter sur ' . config('app.name')]);
    }

    public function store()
    {
        $this->validate();
        $this->user->password = bcrypt($this->password);
        $this->user->save();
        DB::table('password_reset_tokens')->where('email', $this->email)->delete();
        session()->flash('success', 'Mot de passe mis à jour');
        return redirect()->route('login');
    }
}
