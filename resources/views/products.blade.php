@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron">
                </div>
            </div>
        </div>
        <div class="row py-3">
            @foreach ($comics as $comic)
            <div class="col-2">
                <div class="card mb-4">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection