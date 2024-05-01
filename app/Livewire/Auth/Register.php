<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\RegisterForm;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use app\Models\User;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public RegisterForm $form;

    public function render()
    {
        return view('livewire.auth.register')
            ->title('S\'inscrire' . ' - ' . config('app.name'))
            ->layoutData(['description' => 'S\'inscrire sur ' . config('app.name')]);
    }


    public function save()
    {
        /** @var User $user */
        $user = $this->form->create();
        auth()->login($user);
        return redirect('/')->intended();
    }
}
