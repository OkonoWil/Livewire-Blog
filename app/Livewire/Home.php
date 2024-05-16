<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home',[
            'heading' => 'Accueil',
        ])
            ->title('Accueil')
            ->layoutData(['description' => 'Retrouvez ici tous les articles de ' . config('app.name')]);
    }
}
