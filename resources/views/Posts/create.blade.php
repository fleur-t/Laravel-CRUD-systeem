@extends('layouts.app')

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@section('content')
    <h1>Maak een nieuwe post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="title">Gerecht naam</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="body">Inhoud</label>
            <textarea name="body" id="body" required></textarea>
        </div>

        <div>
            <label for="price">Prijs (€)</label>
            <input type="text" name="price" id="price" required>
        </div>

        <button type="submit">Post opslaan</button>
    </form>
@endsection
