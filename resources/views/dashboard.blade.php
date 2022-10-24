<!DOCTYPE html>
<html>

<head>
    <title>{{ config()->get('config.site.Nom') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet/less" href="{{ asset('scss/colors.scss') }}">
    <link rel="icon" href="{{ url('/favicon.ico') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">


    <!-- Fonts Link -->
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

</head>

<body class="d-flex flex-column min-vh-100 bbs">
    <script type="text/javascript" src="{{asset('/js/Compteur.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/TextAnimations.js')}}"></script>

    <style>
        body {
            background-color: <?php echo $backgroundColor ?>;
        }

        .generalNavBar {
            background-color: <?php echo $primaryColor ?>;
        }

        .generalFooter {
            background-color: <?php echo $primaryColor ?>;
        }

        .generalFooterDown {
            background-color: <?php echo $backgroundColor ?>;
        }
    </style>


    <nav class="generalNavBar navbar navbar-dark navbar-expand-lg mb-5 sticky-top">
        <div class="container">
            <a class="navbar-brand mr-auto text-uppercase nomSiteFont" href="{{ route('acceuil') }}">{{ config()->get('config.site.Nom') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <!-- Nav Links -->

                <ul class="nav nav-pills nav-fill">
                    @foreach(config('config.links') as $key => $value)

                    <li class="nav-item"><a href="{{ $value }}" class="nav-link me-3 text-light text-decoration-none">{{ $key }}</a></li>

                    @endforeach
                </ul>

                <!-- Nav Links End -->

                <!-- Login , Register and Logout Links -->

                <ul class="navbar-nav ms-auto">
                    @guest
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-home me-3"></i>MON COMPTE 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('login') }}">{{ config()->get('config.basics.login') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('register-user') }}">{{ config()->get('config.basics.signup') }}</a></li>
                    </ul>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bienvenue {{ auth()->user()->prenom }} @if(auth()->user()->role == "admin") <span class="text-danger">[ADMIN]</span>@endif
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('user') }}">Profile</a></li>
                            @if(auth()->user()->role == "admin")
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('admin') }}">Administrateur</a></li>
                            <li><a class="dropdown-item" href="{{ route('site') }}">Gestion du site</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @endif
                            <li class="nav-item"><a class="dropdown-item text-danger" href="{{ route('signout') }}">{{ config()->get('config.basics.logout') }}</a></li>
                        </ul>
                    </li>

                    @endguest
                </ul>

                <!-- Login , Register and Logout Links End -->

            </div>
        </div>
    </nav>




    <!-- Contenu ajouté dans les pages -->
    @yield('content')
    <!-- Contenu ajouté dans les pages -->

    <br><br>
    <!-- Footer -->
    <footer class="generalFooter text-center text-lg-start text-light mt-auto">

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4 text-decoration-underline">
                            LIENS UTILS
                        </h6>
                        <ul style="list-style: none;">
                            <a class="nav-link text-white" href="{{ route('login') }}">
                                <li>{{ config()->get('config.basics.login') }}</li>
                            </a>
                            <a class="nav-link text-white" href="{{ route('register-user') }}">
                                <li>{{ config()->get('config.basics.signup') }}</li>
                            </a>
                        </ul>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4 text-decoration-underline">Contact</h6>
                        <ul style="list-style: none;">
                            @foreach(config('config.medias') as $key => $value)
                            @if($value != null)
                            <li>
                                <a href="{{ $value }}" class="me-4 text-reset">
                                    <i class="fa fa-{{ $key }} me-3 text-capitalize"> {{$key}} (Clique ici)</i>
                                </a>
                            </li><br>
                            @endif
                            @endforeach
                            <li><i class="fa fa-home me-3"> {{config()->get('config.site.Adresse')}}</i></li><br>
                            <li><i class="fa fa-envelope me-3"> {{config()->get('config.site.Email')}}</i></li><br>
                            <li><i class="fa fa-phone me-3"> {{config()->get('config.site.Téléphone')}}</i></li><br>
                        </ul>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-2 generalFooterDown text-uppercase">
            © 2021 COPYRIGHT {{ config()->get('config.site.Nom')}}
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>