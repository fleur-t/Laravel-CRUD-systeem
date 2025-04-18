<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>

    <a href="{{ route('posts.create') }}">Maak een nieuwe post</a>

    <h2>Alle posts</h2>
    @if($posts->count() > 0)
        <ul>
            @foreach($posts as $post)
            <li>
        {{ $post->title }} - €{{ number_format($post->price, 2) }}
        <a href="{{ route('posts.edit', $post->id) }}">Bewerk</a>

        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Weet je zeker dat je dit gerecht wilt verwijderen?')">Verwijder</button>
        </form>
    </li>            @endforeach
        </ul>
    @else
        <p>Er zijn nog geen posts.</p>
    @endif
@endsection
