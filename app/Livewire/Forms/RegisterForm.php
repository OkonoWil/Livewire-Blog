<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Validate('required|string|min:3|max:250|unique:users,name')]
    public string $name;
    #[Validate('required|string|email|unique:users,email')]
    public string $email;
    #[Validate('required|string|min:3|max:100|confirmed')]
    public string $password;
    #[Validate('required|string|min:3|max:100')]
    public string $password_confirmation;

    public function create()
    {
        return User::create($this->validate());
    }


}
