@extends('dashboard')
@section('content')

@php
use App\Models\User;

$somme = 0;



@endphp

<div class="d-none">

    @foreach($usercount as $usersc)

        {{ $somme += config()->get('config.sports.'. $usersc->sport); }}

    @endforeach
</div>



<main class="container">
    <div class="container bg-dark text-center p-3 rounded">
        <div class="row">
            <div class="col">
                <h4 class="text-light">Clients actuelle: {{ count($usercount) }}</h4>
            </div>

            <div class="col">
                <h4 class="text-light">Membres inscrit: {{ count($users) }}</h4>
            </div>

            <div class="col">

                <h4 class="text-light">Total gagné: {{ $somme }} DH/mois</h4>

            </div>

        </div>
    </div>
    <br><br>


    <div class="container form-control">
        <h5 class="text-center text-primary">Opérations sur client</h5><br>
        <!-- <h5 class="text-center text-primary"></h5><br> -->

        <div class="input-group justify-content-center">
            <form>
                @csrf


                <input type="text" placeholder="email" class="form-control w-100 text-center" name="ref">

            </form>

        </div>
        <br>
        <div class="text-center">
            <div class="row">
                <div class="col">
                    <button class="btn btn-success text-center w-75">Chercher</button>
                </div>
                <!-- <div class="col">
                    <button class="btn btn-danger text-center w-75">Supprimer du site</button>
                </div>

                <div class="col">
                    {{ $id = Request::input('ref')}}
                    <a href="{{ route('user.delete') }}"><button class="btn btn-warning text-center w-75">Supprimer le client</button></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <button class="btn btn-success text-center w-75">Confirmer le paiement</button>
                </div>
                <div class="col">
                    <button class="btn btn-danger text-center w-75">Supprimer le paiement</button>
                </div> -->
            </div>
        </div>
        <br>
    </div>

    <br>
    <div class="container">

        <h1 class="text-center text-dark">Liste des clients qui n'ont pas payé.</h1><br>

        <table class="table table-danger">
            <thead>
                <tr>
                    <th scope="col">Numéro du client</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sport pratiqué</th>
                    <th scope="col text-center">Action</th>
                </tr>
            </thead>
            @foreach($users_Paiement_No as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ \Carbon\Carbon::parse($user->age)->age }} ans</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->sport }}</td>
                <td scope="col"><button class="btn btn-success">Gérer</button></td>
            </tr>
            @endforeach


        </table>
    </div>

    <br><br>
    <hr>
    <br><br>

    <div class="container">

        <h1 class="text-center text-dark">Liste des clients qui ont payé.</h1><br>

        <table class="table table-success">
            <thead>
                <tr>
                    <th scope="col">Numéro du client</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sport pratiqué</th>
                    <th scope="col text-center">Action</th>
                </tr>
            </thead>
            @foreach($users_Paiement_Yes as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->sport }}</td>
                <td scope="col"><a href="#"><button class="btn btn-danger">Gérer</button></a></td>
            </tr>
            @endforeach


        </table>
    </div>


</main>
<script>
    
</script>




@endsection