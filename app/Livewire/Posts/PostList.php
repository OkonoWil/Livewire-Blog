<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;


    public function render()
    {
        $posts = Post::query()->published()
            ->with(['user', 'photo'])
            ->latest()
            ->paginate(12);
        return view('livewire.posts.post-list', compact('posts'))
            ->title('Articles')
            ->layoutData(['description' => 'Retrouvez ici tous les articles de ' . config('app.name')]);
    }
}
