<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required|string|email|exists:users,email')]
    public string $email;

    #[Validate('required|string|min:6')]
    public string $password;

    public function login()
    {
        return auth()->attempt($this->validate());
    }
}
