@extends('layouts.app')

@section('content')
    <h1>Menukaart</h1>

    @if ($posts->count())
        @foreach ($posts as $post)
            <div>
                <h3>{{ $post->title }} - €{{ number_format($post->price, 2) }}</h3>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach
    @else
        <p>Er staan nog geen gerechten op de menukaart.</p>
    @endif
@endsection
