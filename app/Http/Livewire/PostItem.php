<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostItem extends Component
{
    public Post $post;
    public bool $excerpt;
    public bool $title;
    public bool $back;

    public function delete()
    {
        $this->post->deleteOrFail();

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.post-item');
    }
}
