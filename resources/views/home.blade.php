@extends('layouts.app')

@section('content')
    <h1>Welkom bij ons restaurant 🍽️</h1>
    <p>Bekijk de <a href="{{ route('menu') }}">menukaart</a> of <a href="{{ route('contact') }}">contacteer ons</a>.</p>
@endsection
