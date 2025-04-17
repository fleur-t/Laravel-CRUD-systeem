@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>

    <p><strong>Inhoud:</strong><br>{{ $post->body }}</p>

    <p><strong>Prijs:</strong> €{{ number_format($post->price, 2) }}</p>

    <div style="margin-top: 20px;">
        <a href="{{ route('posts.edit', $post->id) }}">✏️ Bewerken</a>

        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">🗑️ Verwijderen</button>
        </form>
    </div>

    <br>
    <a href="{{ route('posts.index') }}">⬅️ Terug naar overzicht</a>
@endsection
