@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comic['title'] }}</h1>
        <div class="d-flex">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <div class="d-flex flex-column p-3">
                <div class="d-flex">
                    <h5> Series: </h5>
                    <p>
                        {{ $comic['series'] }}
                    </p>
                </div>
                <div class="d-flex">
                    <h5> Price: </h5>
                    <p>
                        {{ $comic['price'] }}
                    </p>
                </div>
                <div class="d-flex">
                    <h5> Type: </h5>
                    <p>
                        {{ $comic['type'] }}
                    </p>
                </div>
                <div class="d-flex">
                    <h5> Sale date: </h5>
                    <p>
                        {{ $comic['sale_date'] }}
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex">
                <h5> Descrizione: </h5>
                <p>
                    {{ $comic['description'] }}
                </p>
            </div>
        </div>
        <div class="d-flex gap-2">
            <h5> Artists: </h5>
            @foreach ($comic['artists'] as $artist)
                <p>
                    {{$artist}}
                </p>
            @endforeach
        </div>
        <div class="d-flex gap-2">
            <h5> Artists: </h5>
            @foreach ($comic['writers'] as $writer)
                <p>
                    {{$writer}}
                </p>
            @endforeach
        </div>
        <div class="py-3">
            <a href="/"> Go back</a>
        </div>
    </div>
@endsection
