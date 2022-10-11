<!DOCTYPE html>
<html>

<head>
    <title>{{ config()->get('config.basics.nom') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ url('public/favicon.ico') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column min-vh-100 bbs">
    
    
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-5 sticky-top" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="{{ route('acceuil') }}">{{ config()->get('config.basics.nom') }}</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ config()->get('config.basics.login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">{{ config()->get('config.basics.signup') }}</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bienvenue {{ auth()->user()->prenom }} @if(auth()->user()->role == "admin") <span class="text-danger">[ADMIN]</span>@endif
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('user') }}">Profile</a></li>
                            @if(auth()->user()->role == "admin")
                            <li><a class="dropdown-item" href="{{ route('admin') }}">Administrateur</a></li>
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
    <footer class="text-center text-lg-start bg-dark text-light mt-auto">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-2 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span> {{ config()->get('config.basics.medias-message')}} </span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                @foreach(config('config.medias') as $key => $value)
                <a href="{{ $value }}" class="me-4 text-reset">
                    <i>{{ $key }}</i>
                </a>
                @endforeach
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>{{ config()->get('config.basics.nom')}}
                        </h6>
                        <p>
                            {{ config()->get('config.basics.description')}}
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="#"> {{ config()->get('config.basics.nom')}} </a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>