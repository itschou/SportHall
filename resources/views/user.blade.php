@extends('dashboard')
@stack('styles')
@section('content')

<main class="container">
@csrf
@if(auth()->user()->confirmation_inscription == true)

    <h1 class="text-success text-center">Votre profile</h1><br>
    <div class="form-control">
        <table class="table">
            <tr> <th class="text-center"> Nom: </th> <td >{{auth()->user()->nom}}</td></tr>
            <tr> <th class="text-center"> Prénom: </th> <td >{{auth()->user()->prenom}}</td></tr>
            <tr> <th class="text-center"> Age: </th> <td >{{ \Carbon\Carbon::parse(auth()->user()->age)->age }}</td></tr>
            <tr> <th class="text-center"> Role: </th> <td >{{auth()->user()->role}}</td></tr>
            <tr> <th class="text-center"> Email: </th> <td >{{auth()->user()->email}}</td></tr>
            <tr> <th class="text-center"> Téléphone: </th> <td >{{auth()->user()->tel}}</td></tr>
            <tr> <th class="text-center"> Sport pratiqué: </th> <td >{{auth()->user()->sport}}</td></tr>
            <tr> <th class="text-center"> Inscription: </th> <td >{{auth()->user()->created_at}}</td></tr>
            
        </table>
        
        @if(auth()->user()->etat_payement == true) <h2 class="text-center">Votre état de paiement pour le mois ({{ \Carbon\Carbon::now()->format('F') }}): <p class="text-success">PAYÉ</p></h2> @else <h2 class="text-center">Votre état de paiement : <p class="text-danger">NON PAYÉ </p></h2> @endif
    </div>
@else
<div class="container text-center">
    <h1 class="text-danger">{{config()->get('config.basics.noclient')}}</h1>
    <p class="text-danger">\!/ Si vous pensez a une erreur veuillez informer le personnel. \!/</p>
</div>
@endif

</main>




@endsection