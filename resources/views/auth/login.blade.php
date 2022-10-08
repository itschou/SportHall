@extends('dashboard')
@section('content')
@stack('styles')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center"> {{ config()->get('config.basics.login') }} </h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Mot de passe" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> {{ config()->get('config.basics.remember') }}
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">{{ config()->get('config.basics.login') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


<!--
    <div class="form-group">
    <label>Nom</label>
    <input type="text" name="name" class="form-control p_input">
  </div>
  <div class="form-group">
    <label>Prenom</label>
    <input type="text" name="prenom" class="form-control p_input">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" name="prenom" class="form-control p_input" placeholder="exemple@gmail.com">
  </div>
  <div class="form-group">
    <label>Mot de passe</label>
    <input type="password" name="password" class="form-control p_input">
  </div>
-->