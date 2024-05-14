<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;
    public string $error;

    public function login(){
        $this->error = "";
        if ($this->form->login())
        {
            return redirect()->intended();
        }
        $this->error = 'Email ou mot de passe invalide';
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.auth.login')
            ->title('Se connecter' . ' - ' . config('app.name'))
            ->layoutData(['description' => 'Se connecter sur ' . config('app.name')]);
    }
}
