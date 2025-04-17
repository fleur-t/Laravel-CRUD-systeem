<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    
    public function create() {
        return view('posts.create');
    }
    
    public function store(Request $request) {
        Post::create($request->validate([
            'title' => 'required',
            'body' => 'required',
            'price' => 'required|numeric',
        ]));
    }
    
    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }
    
    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }
    
    public function update(Request $request, Post $post) {
        $post->update($request->validate([
            'title' => 'required',
            'body' => 'required',
            'price' => 'required|numeric',
        ]));
        
    
        return redirect()->route('posts.index');
    }
    
    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index');
    }
    
}
