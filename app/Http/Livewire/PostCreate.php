<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostCreate extends Component
{
    public string $title;

    public string $body;

    protected $rules = [
        'title' => 'required|string|max:100',
        'body' => 'required|string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'body' => $this->body,
            'excerpt' => str()->excerpt($this->body),
        ]);

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
