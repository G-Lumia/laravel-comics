@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Comics</h1>
        <ul>
            @foreach ($comics as $comic)
                <li><a href="{{ route('comics.show', ['id' => $loop->index]) }}">{{ $comic['title'] }}</a></li>
            @endforeach
        </ul>
    </section>
@endsection
