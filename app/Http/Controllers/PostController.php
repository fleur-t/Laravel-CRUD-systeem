<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Haalt alle posts op
        return view('posts.index', compact('posts')); // Stuur posts naar de view
    }

        public function menu()
    {
        $posts = Post::all();
        return view('menu', compact('posts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'price' => 'required|numeric',
        ]);
    
        Post::create($validated);
    
        return redirect()->route('posts.index')->with('success', 'Gerecht toegevoegd!');
    }

    // Bewerk een specifieke post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Werk de post bij
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'price' => 'required|numeric',
        ]);
    
        $post->update($request->only('title', 'body', 'price'));
    
        return redirect()->route('posts.index')->with('success', 'Gerecht bijgewerkt!');
    }

    public function create()
    {
        return view('posts.create'); // Laadt de create view
    }

    public function destroy(Post $post)
{
    $post->delete();
    return redirect()->route('posts.index')->with('success', 'Gerecht verwijderd!');
}
}
