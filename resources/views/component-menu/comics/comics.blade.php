@extends('layout.app')

@section('main-content')
    <div class="box-card">

        @foreach ($comics as $id => $elem)
       
       
            <div class="card">
                <a href="{{ route('show.comics', compact('id'))}}">
                <div>
                    <img src="{{$elem['thumb']}}" alt="">
                </div>
                <p class="title">{{ $elem['title'] }}</p>
            </a>
            </div>
        
        @endforeach

    </div>
@endsection
