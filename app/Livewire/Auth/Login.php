<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;

    public function login(){
        $this->form->login();
        return redirect()->intended();
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
