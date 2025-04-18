@extends('layouts.app')

@section('content')
    <h1>Welkom in het dashboard 👋</h1>
    <p>Vanaf hier kun je gerechten beheren.</p>
    <a href="{{ route('menu-items.index') }}">Ga naar menubeheer</a>
@endsection