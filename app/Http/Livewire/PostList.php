<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    public string $search = '';
    public int $count = 4;

    public function updatingSearch()
    {
        $this->reset();
    }

    public function loadMore()
    {
        $this->count += 4;
    }

    public function render()
    {
        $posts = Post::search($this->search)->orderBy('created_at', 'desc')->take($this->count)->get();
        $posts_count = Post::count();

        return view('livewire.post-list', compact('posts', 'posts_count'));
    }
}
