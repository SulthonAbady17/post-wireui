<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    public string $search = '';

    public int $count = 4;

    public $number;

    public bool $text = false;

    public function updatingSearch(): void
    {
        $this->reset();
    }

    public function loadMore(): void
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
