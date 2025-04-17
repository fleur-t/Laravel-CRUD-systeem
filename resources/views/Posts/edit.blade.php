@extends('layouts.app')

@section('title', 'Post Bewerken')

@section('content')
    <h1>Post Bewerken</h1>

    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')

        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>

        <label for="body">Inhoud:</label>
        <textarea id="body" name="body" required>{{ old('body', $post->body) }}</textarea>

        <label>Prijs (€):</label>
        <input type="number" name="price" step="0.01" value="{{ old('price', $post->price) }}" required><br><br>


        <button type="submit">Bijwerken</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">⬅️ Terug naar overzicht</a>
@endsection
