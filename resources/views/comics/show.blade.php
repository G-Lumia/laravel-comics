@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comic['title'] }}</h1>
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        a
    </div>
@endsection
