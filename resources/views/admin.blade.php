@extends('dashboard')
@section('content')


<main class="container">

    <div class="container">

        <h1 class="text-center text-dark">Liste des clients qui n'ont pas payé.</h1><br>

        <table class="table">
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
                        <td scope="col"><button class="btn btn-success">Mettre (payé)</button></td>
                </tr>
            @endforeach


        </table>
    </div>

    <br><br>
    <hr>
    <br><br>

    <div class="container">

        <h1 class="text-center text-dark">Liste des clients qui ont payé.</h1><br>

        <table class="table">
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
                <td scope="col"><button class="btn btn-danger"><a href="{{ route('changep', $user->id) }}">Mettre (non payé)</a></button></td>
            </tr>
            @endforeach


        </table>
    </div>


</main>





@endsection