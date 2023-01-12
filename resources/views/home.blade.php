@extends('layout.app')

@section('main-content')
    <div class="box-card">

        @foreach ($return as $elem)
            <div class="card">
                <div>
                    <img src="{{$elem['thumb']}}" alt="">
                </div>
                <p class="title">{{ $elem['title'] }}</p>
            </div>
        @endforeach

    </div>
@endsection
