<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostItem extends Component
{
    public Post $post;
    public bool $excerpt;

    public function render()
    {
        return view('livewire.post-item');
    }
}
