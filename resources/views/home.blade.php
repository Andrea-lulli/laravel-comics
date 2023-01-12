@extends('layout.app')

@section('main-content')
    <div>
        @foreach ($return as $elem)
            <h4>{{ $elem['title'] }}</h4>
        @endforeach
    </div>
@endsection
