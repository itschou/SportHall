@extends('dashboard')
@section('content')

@php
use App\Models\User;
@endphp
<main class="container">


    <div class="container form-control">
        <h5 class="text-center text-primary">Rechercher un client</h5><br>
        <!-- <h5 class="text-center text-primary"></h5><br> -->

        <div class="input-group justify-content-center">
            <form>
            @csrf

                <input type="number" placeholder="email" class="form-control w-100 text-center" name="ref"}>

            </form>

        </div>
        <br>
        <div class="text-center">
            <div class="row">
                <div class="col">
                    <button class="btn btn-success text-center w-50">Chercher</button>
                </div>
                <div class="col">
                    <button class="btn btn-danger text-center w-75">Supprimer du site</button>
                </div>
                
                <div class="col">
                    {{ $id = Request::input('ref')}}
                    <a href=""><button class="btn btn-danger text-center w-75">Supprimer le client</button></a>
                </div>
                <div class="col">
                    <button class="btn btn-success text-center w-50">Chercher</button>
                </div>
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
                <td>{{ $user->age }}</td>
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





@endsection