<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostEdit extends Component
{
    public Post $post;

    protected $rules = [
        'post.title' => 'required|string|max:100',
        'post.body' => 'required|string',
    ];

    public function updated($value)
    {
        $this->validateOnly($value);
    }

    public function submit()
    {
        $this->validate();

        $this->post->updateOrFail([
            'title' => $this->post->title,
            'body' => $this->post->body,
            'excerpt' => str()->excerpt($this->post->body),
        ]);

        return redirect()->route('posts.show', $this->post->slug);
    }

    public function render()
    {
        return view('livewire.post-edit');
    }
}
