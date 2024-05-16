<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    public string $search = '';
    public function render()
    {
        $users = User::paginate(16);
        return view('livewire.users.user-list', compact('users'))
            ->title('Utilisateurs')
            ->layoutData(['description' => 'Retrouvez ici tous les utilisateurs de ' . config('app.name')]);
    }
}
