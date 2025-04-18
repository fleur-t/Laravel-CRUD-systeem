@extends('layouts.app')

@section('content')
    <h1>Contact</h1>

    <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <div>
            <label for="name">Naam:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Bericht:</label>
            <textarea name="message" id="message" required></textarea>
        </div>

        <button type="submit">Verstuur</button>
    </form>
@endsection
