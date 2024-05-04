<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ForgetPassword extends Component
{
    #[Validate(['required', 'email'])]
    public string $email;
    public function render()
    {
        return view('livewire.auth.forget-password');
    }

}
