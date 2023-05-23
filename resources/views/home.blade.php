@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Comics</h1>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 p-3">
                <a href="{{ route('comics.show', ['id' => $loop->index]) }}">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </a>
            </div>
            @endforeach
        </div>
    </section>
@endsection
