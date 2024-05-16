<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public string $search = '';
    public function render()
    {
        $users = User::paginate(16);
        return view('livewire.users.user-list', compact('users'))
            ->title('Utilisateurs')
            ->layoutData(['description' => 'Retrouvez ici tous les utilisateurs de ' . config('app.name')]);
    }
}
