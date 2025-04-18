@extends('layouts.app')

@section('content')
    <h1>Bewerk gerecht</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Titel</label>
            <input type="text" name="title" value="{{ $post->title }}" required>
        </div>

        <div>
            <label>Inhoud</label>
            <textarea name="body" required>{{ $post->body }}</textarea>
        </div>

        <div>
            <label>Prijs</label>
            <input type="text" name="price" value="{{ $post->price }}" required>
        </div>

        <button type="submit">Bijwerken</button>
    </form>
@endsection
