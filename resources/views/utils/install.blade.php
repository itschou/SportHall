<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet/less" href="{{ asset('scss/colors.scss') }}">
    <link rel="icon" href="{{ url('/favicon.ico') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <title>installation </title>
</head>

<body class="bg-dark">

    <h1 class="text-center text-white p-4">Bienvenue sur la page d'installation de SportHall</h1>


    <main class="container">
        @include('utils/flash-message')

        <form class="form-control p-3" action="{{ route('site.install') }}" method="POST">
            @csrf
            @foreach(config()->get('config.site') as $key => $value)
            {{ $key }}
            <div class="input-group mb-3">
                <input class="form-control" type="text" value="{{ $value }}" name="{{ $key }}" required><br>
            </div>
            @endforeach

            <hr>

            @foreach(config()->get('config.medias') as $key => $value)
            {{ $key }}
            <div class="input-group mb-3">
                <input class="form-control" type="text" value="{{ $value }}" name="{{ $key }}" required><br>
            </div>
            @endforeach


            <hr><br>

            <h3 class="text-center text-danger">ADMINISTRATEUR</h3><br>

            Nom :
            <div class="input-group mb-3">
                <input class="form-control" type="text" name="nom" placeholder="Votre nom" required><br>
            </div>
            Prenom : 
            <div class="input-group mb-3">
                <input class="form-control" type="text" name="prenom" placeholder="Votre prénom" required><br>
            </div>
            Date de naissance
            <div class="input-group mb-3">
                <input class="form-control" type="date" name="datenaissance" placeholder="JJ-MM-AA" required><br>
            </div>
            Email :
            <div class="input-group mb-3">
                <input class="form-control" type="text" name="email" placeholder="Votre email" required><br>
            </div>
            Téléphone :
            <div class="input-group mb-3">
                <input class="form-control" type="text" name="tel" placeholder="Votre numéro de téléphone" required><br>
            </div>
            CIN :
            <div class="input-group mb-3">
                <input class="form-control" type="text" name="CIN" placeholder="Votre CIN" required><br>
            </div>
            Mot de passe (Veuillez choisir un mot de passe sécurisé):
            <div class="input-group mb-3">
                <input class="form-control" type="text" name="mdp" placeholder="Votre mot de passe" required><br>
            </div>

            <br>

            <button class="btn btn-outline-success" type="submit">Confirmer</button><br>

        </form>


    </main>



</body>

</html>