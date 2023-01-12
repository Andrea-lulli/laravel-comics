@extends('layout.app')

@section('main-content')
    <div class="box-card">

        @foreach ($return as $elem)
            <div class="card">
                <h4>{{ $elem['title'] }}</h4>
            </div>
        @endforeach

    </div>
@endsection
