<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view('post.index');
    }
    
    public function show(string $slug): View
    {
        $post = Post::findBySlugOrFail($slug);

        return view('post.show', compact('post'));
    }
}
