@extends('layouts.app')

@section('title', 'Nieuwe Post')

@section('content')
    <h1>Nieuwe Post Aanmaken</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" required>

        <label for="body">Inhoud:</label>
        <textarea id="body" name="body" required></textarea>

        <label>Prijs (€):</label>
        <input type="number" name="price" step="0.01" required><br><br>>

        <button type="submit">Opslaan</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">⬅️ Terug naar overzicht</a>
@endsection
