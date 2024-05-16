<?php

namespace App\Livewire\Card;

use App\Models\User;
use Livewire\Component;

class UserCard extends Component
{
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.card.user-card');
    }
}
