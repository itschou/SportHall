@extends('layouts/dashboard')
@stack('styles')

@section('content')



<main class="container-fluid p-3 min-vh-100" style="background-color: <?php echo $secondaryColor ?> ;">


    @include('utils/flash-message')

    <div class="row">


        <div class="col">
            @if(auth()->user()->etat_payement == true)

            <div class="form-control p-3">
                <table class="table">
                    <h1 class="text-dark text-center">Votre profile</h1><br>
                    <tr>
                        <th class="text-center"> Nom: </th>
                        <td>{{auth()->user()->nom}}</td>
                    </tr>
                    <tr>
                        <th class="text-center"> Prénom: </th>
                        <td>{{auth()->user()->prenom}}</td>
                    </tr>
                    <tr>
                        <th class="text-center"> Age: </th>
                        <td>{{ \Carbon\Carbon::parse(auth()->user()->age)->age }}</td>
                    </tr>
                    <tr>
                        <th class="text-center"> Role: </th>
                        <td>{{auth()->user()->role}}</td>
                    </tr>
                    <tr>
                        <th class="text-center"> Email: </th>
                        <td>{{auth()->user()->email}}</td>
                    </tr>
                    <tr>
                        <th class="text-center"> Téléphone: </th>
                        <td>{{auth()->user()->tel}}</td>
                    </tr>
                    <tr>
                        <th class="text-center"> CIN: </th>
                        <td>{{auth()->user()->CIN}}</td>
                    </tr>
                    <tr>
                        <th class="text-center"> Sport pratiqué: </th>
                        <td>{{auth()->user()->sport}}</td>
                    </tr>
                    <tr>
                        <th class="text-center"> Inscription: </th>
                        <td>{{auth()->user()->created_at}}</td>
                    </tr>

                </table>


                @if(auth()->user()->etat_payement == true) <h2 class="text-center">Votre état de paiement pour le mois ({{ \Carbon\Carbon::now()->format('F') }}): <p class="text-success">PAYÉ</p>
                </h2> @else <h2 class="text-center">Votre état de paiement pour le mois ({{ \Carbon\Carbon::now()->format('F') }}): <p class="text-danger">NON PAYÉ </p>
                </h2> @endif





            </div>
        </div>



        <div class="col d-flex justify-content-center align-item-center text-center">

            <div class="container text-center">
                <div class="row">


                    <form class="form-control" action="{{route('user.changepass')}}" method="POST">
                        @csrf
                        <h1 class="">Changement de mot de passe</h1><br>

                        <input placeholder="Nouveau mot de passe" type="password" class="form-control text-center" name="mdp">
                        <br>

                        <button type="submit" class="btn btn-success justify-content-center"> Confirmer le changement de mot de passe</button>
                        <br>


                    </form>
                </div>

                <br><br>

                <div class="row h-50 w-100 d-flex justify-content-center align-self-center">
                    <form class="form-control text-center" action="{{ route('changeimageprofil') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1>Ajouter une photo de profil</h1><br>
                        <img class="image rounded-circle" src="{{ asset('/storage/profile/'.Auth::user()->image) }}" style="width: 200px;height: 200px; padding: 10px; margin: 0px; "><br><br>
                        <input type="file" class="form-control" name="image" required><br>

                        <button type="submit" name="bouttonuserimage" value="confirmer" class="btn btn-success text-center">Confirmer</button>

                    </form>

                    <form class="form-control text-center" action="{{ route('changeimageprofil') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" name="bouttonuserimage" value="supprimer" class="btn btn-danger text-center">Supprimer la photo de profil</button>
                    </form>
                </div>






            </div>

        </div>

    </div>





    @else
    <div class="container text-center">
        <h1 class="text-danger">{{config()->get('config.basics.noclient')}}</h1>
        <p class="text-danger">\!/ Si vous pensez a une erreur veuillez informer le personnel. \!/</p>
    </div>
    @endif

</main>
<br>


@endsection