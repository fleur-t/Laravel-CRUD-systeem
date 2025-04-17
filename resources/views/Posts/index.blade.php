@extends('layouts.app')

@section('title', 'Alle Posts')

@section('content')
    <h1>Alle Posts</h1>

    <a href="{{ route('posts.create') }}">Nieuwe Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <div>
                    <strong>{{ $post->title }}</strong><br>
                    <p>Prijs: €{{ number_format($post->price, 2) }}</p>
                </div>

                <div class="actions">
                    <a href="{{ route('posts.show', $post->id) }}">👁️</a>
                    <a href="{{ route('posts.edit', $post->id) }}">✏️</a>

                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">🗑️</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
