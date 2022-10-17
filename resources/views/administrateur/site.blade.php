@extends('dashboard')
@section('content')


<main class="container">
    @include('utils/flash-message')

    <form class="form-control" action="{{ route('sitepanel') }}" method="POST">
        @csrf

        @foreach(config()->get('config.site') as $key => $value)
        {{ $key }}
        <div class="input-group mb-3">
        <input class="form-control" type="text" value="{{ $value }}" name="{{ $key }}"><br>
        </div>
        @endforeach

        <hr>

        @foreach(config()->get('config.medias') as $key => $value)
        {{ $key }}
        <div class="input-group mb-3">
        <input class="form-control" type="text" value="{{ $value }}" name="{{ $key }}"><br>
        </div>
        @endforeach

        <hr>

        @foreach(config()->get('config.sports') as $key => $value)
        {{ $key }}
        <div class="input-group mb-3">
        <input class="form-control" type="text" value="{{ $value }}" name="{{ $key }}"><br>
        </div>
        @endforeach

        <button class="btn btn-outline-success" type="submit">Confirmer le changement</button><br>

    </form>


</main>

@endsection