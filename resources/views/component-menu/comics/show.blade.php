@extends('layout.app')

@section('main-content')
    <div class="box-singolo">
        <div class="card-singole">
            <div>
                <img src="{{ $comics_singolo['thumb'] }}" alt="">
            </div>

            <p class="title-singole">{{ $comics_singolo['title'] }}</p>

            <p class="title-singole">Decscrizione: {{ $comics_singolo['description'] }}</p>

            @foreach ($comics_singolo['artists'] as $elem)
                <span class="title-singole">Artisti: {{ $elem }}</span>
            @endforeach
        </div>
        
        <a href="{{ route('index.comics')}}">&#x21A9</a>
    </div>
@endsection
