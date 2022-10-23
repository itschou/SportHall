@extends('dashboard')
@section('content')


<main class="">

    <!-- <h2 class="bg-dark text-light p-3 text-center border border-dark border-4 rounded-pill">Bienvenue sur {{ config()->get('config.site.Nom')}}</h2> -->
    <div class="container-fluid main px-0">
        <br>
        <h1 class="welcome text-center">
            <span class="welcome text-dark">{{ config()->get('config.site.Nom')}}</span>
        </h1>
        <h3 class="welcome text-center">
            <span class="welcome text-dark">Votre salle de sport !</span>
            <span class="welcome text-dark">Votre bien être !</span>
            <span class="welcome text-dark">Votre transformation !</span>

        </h3><br><br><br>
        <div class="justify-content-center text-center">
            <button class="btn btn-success ">EN SAVOIR PLUS</button>
        </div>
        <br><br>
    </div>
    <br><br>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-8 px-0">

                <img class="d-block w-100 h-100 img-responsiv" src="bg.jpg">
            </div>

            <div class="col">
                <h1 class="text-center text-light ">Rejoignez-nous et devenez l'un de nos chers clients !</h1>
                <br>
                <ul class="list-group">
                    <li class="list-group">
                        <h4 class="text-center text-dark list-group-item">UNE SALLE DE SPORT BIEN ÉQUIPÉ !</h4>
                    </li>
                    <li class="list-group">
                        <h4 class="text-center text-dark list-group-item bg-success">UN ABONNEMENT A PARTIR DE {{ min(config()->get('config.sports'))}}DH/MOIS.</h4>
                    </li>
                    <li class="list-group">
                        <h4 class="text-center text-dark list-group-item">DES COACHS PRÊTS À VOUS AIDER POUR BIEN ÉVOLUER.</h4>
                    </li>
                </ul>
                <br><br>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        <h5 class="text-center text-success word"></h5>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <br><br>

    <div class="container">

        <div class="row text-center">
            <div class="col">
                <div class="counter">
                    <i class="fa fa-user-o fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="{{count($usercount)}}" data-speed="1500"></h2>
                    <p class="count-text ">Clients</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <i class="fa fa-users fa-3x"></i>
                    <h2 class="timer count-title count-number" data-to="{{count($users)}}" data-speed="1500"></h2>
                    <p class="count-text ">Personnes inscrites sur le site</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <i class="fa fa-smile-o fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="{{count($users)*3}}" data-speed="1500"></h2>
                    <p class="count-text ">Clients satisfaits</p>
                </div>
            </div>
        </div>

    </div>


    <br>
    <div class="container-fluid">

        <h2 class="text-center bg-dark text-light rounded m-3 p-2">Notre emplacement</h2>

        <iframe src="https://www.google.com/{{config()->get('config.site.Map')}}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</main>



@endsection