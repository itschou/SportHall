@extends('dashboard')
@section('content')


<main class="container">

    <h2 class="bg-dark text-light p-3 text-center border border-dark border-4 rounded-pill">Bienvenue sur {{ config()->get('config.basics.nom')}}</h2>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Notre salle de sport contabilise plus de {{count($users)}} membres</h1>
            </div>
            <div class="col col-lg-4">
                <!-- $url = asset('public/images/bg-login-register.jpg'); -->
                <img src="bg-login-register.jpg" alt="">
            </div>

        </div>

    </div>


</main>

@endsection


<!-- <table border="1">
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Age</td>
            <td>Email</td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nom }}</td>
            <td>{{ $user->prenom }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table> -->