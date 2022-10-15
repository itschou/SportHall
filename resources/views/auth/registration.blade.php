@extends('dashboard')
@section('content')
@stack('styles')
<main class="signup-form">
@include('flash-message')
    <div class="cotainer register">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">{{ config()->get('config.basics.signup') }}</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Nom" id="nom" class="form-control" name="nom"
                                    required autofocus>
                                @if ($errors->has('nom'))
                                <span class="text-danger">{{ $errors->first('nom') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Prénom" id="prenom" class="form-control" name="prenom"
                                    required autofocus>
                                @if ($errors->has('prenom'))
                                <span class="text-danger">{{ $errors->first('prenom') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="date" placeholder="Âge" id="age" class="form-control" name="age"
                                    required autofocus>
                                @if ($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="tel" placeholder="0612345678" id="tel" class="form-control"
                                    name="tel" required autofocus>
                                @if ($errors->has('tel'))
                                <span class="text-danger">{{ $errors->first('tel') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="CIN" id="tel" class="form-control"
                                    name="CIN" required autofocus>
                                @if ($errors->has('CIN'))
                                <span class="text-danger">{{ $errors->first('CIN') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <select name="sport" id="sport" class="form-control">
                                    @foreach(config('config.sports') as $key => $value)
                                    <option value="{{ $key }}"> {{ $key }} ({{ $value }}DH / mois)</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('sport'))
                                <span class="text-danger">{{ $errors->first('sport') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Mot de passe" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> {{ config()->get('config.basics.remember') }} </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">{{ config()->get('config.basics.signup') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection