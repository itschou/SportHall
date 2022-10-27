@extends('administrateur/admindashboard')
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



<main class="p-4">
    @include('utils/flash-message')
    <div class="container text-center p-3 rounded" style="background-color: <?php echo $primaryColor ?>;">
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
            <form action="{{ route('user.operations') }}" method="POST">
                @csrf


                <div class="row">
                    <!-- <div class="col"></div> -->
                    <div class="col-8">
                        <input type="text" placeholder="email" class="form-control w-100 float-start text-center" name="personmail" required>
                    </div>
                    

                    <div class="col">
                        <li class="nav-item dropdown navbar-nav ">
                            <button class="btn btn-secondary nav-link dropdown-toggle text-center" href="#" id="operations" role="button" data-bs-toggle="dropdown" aria-expanded="false">Opérations</button>
                            <ul class="dropdown-menu unstyled p-2 mx-2" aria-labelledby="operations">

                                <li>
                                    <button type="submit" name="ope" value="paye" class="btn btn-transparent text-center w-100 text-success">Payé</button><br>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <button type="submit" name="ope" value="nonpaye" class="btn btn-transparent text-center w-100 text-danger">Non payé</button>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <button type="submit" name="ope" value="supprimerclient" class="btn btn-transparent text-center w-100 text-warning">Supprimer (Client)</button>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <button type="submit" name="ope" value="resetmdp" class="btn btn-transparent text-center w-100 text-primary">Réinitialiser le mot de passe</button>
                                </li>
                                

                            </ul>
                        </li>

                    </div>
                    
                    
                </div>








            </form>

        </div>
        <br>
        <br>
    </div>

    <br>
    <div class="container collapse" id="clientspaye">

        <h1 class="text-center text-dark">Liste des clients qui n'ont pas payé.</h1><br>

        <table class="table table-danger">
            <thead>
                <tr>
                    <th scope="col">Numéro du client</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">CIN</th>
                    <th scope="col">Sport pratiqué</th>
                </tr>
            </thead>
            @foreach($users_Paiement_No as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ \Carbon\Carbon::parse($user->age)->age }} ans</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->tel }}</td>
                <td>{{ $user->CIN }}</td>
                <td>{{ $user->sport }}</td>

            </tr>
            @endforeach



        </table>
    </div>


    <div class="container collapse" id="clientsnonpaye">

        <h1 class="text-center text-dark">Liste des clients qui ont payé.</h1><br>

        <table class="table table-success">
            <thead>
                <tr>
                    <th scope="col">Numéro du client</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">CIN</th>
                    <th scope="col">Sport pratiqué</th>
                </tr>
            </thead>

            @foreach($users_Paiement_Yes as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ \Carbon\Carbon::parse($user->age)->age }} ans</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->tel }}</td>
                <td>{{ $user->CIN }}</td>
                <td>{{ $user->sport }}</td>
            </tr>
            @endforeach


        </table>
    </div>


</main>
<script>

</script>




@endsection