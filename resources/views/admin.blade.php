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

        <div class="justify-content-center">
            <form action="{{ route('user.delete') }}" method="POST">
                @csrf


                <div class="row">
                    <div class="col"></div>
                    <div class="col col-6">
                        <input type="text" placeholder="email" class="form-control w-100 float-start text-start" name="personmail">
                    </div>

                    <div class="col">
                        <button type="submit" class="btn btn-success text-center w-50">Chercher</button>
                    </div>
                </div>

            </form>

        </div>
        <br>
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
                <td scope="col"><button class="btn btn-success">true</button></td>
                
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
                <td>{{ \Carbon\Carbon::parse($user->age)->age }} ans</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->sport }}</td>
                <td scope="col"><a href="#"><button class="btn btn-danger">Gérer</button></a></td>
                <td scope="col"><button class="btn btn-success">false</button></td>
            </tr>
            @endforeach


        </table>
    </div>


</main>
<script>

</script>




@endsection