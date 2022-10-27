<!DOCTYPE html>
<html>

<head>
    <title>{{ config()->get('config.site.Nom') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet/less" href="{{ asset('scss/colors.scss') }}">
    <link rel="icon" href="{{ url('css/icon.jpg') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">


    <!-- Fonts Link -->
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

</head>

<body class="container-fluid d-flex flex-column min-vh-100 bg-light">
    <script type="text/javascript" src="{{asset('/js/General.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/TextAnimations.js')}}"></script>

    <style>
        /* .generalNavBar {
            background-color: <?php echo $primaryColor ?>;
        } */

        .generalFooter {
            background-color: <?php echo $primaryColor ?>;
        }

        .generalFooterDown {
            background-color: <?php echo $backgroundColor ?>;
        }

        .sticky-top.scrolled {
            background-color: <?php echo $primaryColor ?> !important;
            transition: background-color 300ms linear;
        }
    </style>

    <div class="row flex-grow-1 container-fluid p-0">

        <div class="col-md-2 min-vh-100 p-0 shadow bg-body rounded">
            <!-- Vertical navbar -->
            <div class="vertical-nav bg-white" id="sidebar" style="height: 100%;">
                <div class="py-4 px-3 mb-4" style="background-color: <?php echo $secondaryColor ?>;">

                    <div class="media d-flex align-items-center">
                        <div class="col">
                            <img src="{{ asset('/storage/profile/'.Auth::user()->image) }}" width="70" height="70" class="rounded-circle p-1" style="background-color: <?php echo $primaryColor ?> ;">
                        </div>
                        <div class="col-md-9">
                            <div class="media-body container">
                                <h4 class="m-0">{{ auth()->user()->prenom }}</h4>
                                @if(auth()->user()->role == "admin")@if(config()->get('config.color.secondary') == '#f35a59')<p class="font-weight-light text-light mb-0"> ADMINISTRATEUR </p> @else<p class="font-weight-light text-danger mb-0"> ADMINISTRATEUR </p>@endif @else <p class="font-weight-light text-secondary mb-0"> CLIENT </p> @endif
                                @if(config()->get('config.color.secondary') == '#f35a59')<a class="text-light" href="{{ route('signout') }}"><i class="fa  fa-sign-out"> {{ config()->get('config.basics.logout') }}</i></a> @else<a class="text-danger" href="{{ route('signout') }}"><i class="fa  fa-sign-out"> {{ config()->get('config.basics.logout') }}</i></a> @endif
                            </div>
                        </div>

                    </div>
                </div>

                <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">UTILS</p>

                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a href="{{ route('acceuil') }}" class="nav-link text-dark font-italic">
                            <i class="fa fa-home mr-3 fa-fw" style="color: <?php echo $primaryColor ?>;"></i>
                            Acceuil
                        </a>
                    </li>

                </ul>
                <br>

                @foreach(config()->get('config.admin') as $key => $value)
                <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">{{$key}}</p>

                <ul class="nav flex-column bg-white mb-0">
                    @foreach(config()->get('config.admin.GESTION') as $key2 => $value2)
                    <li class="nav-item">
                        <a href="{{ $value2 }}" class="nav-link text-dark font-italic">
                            <i class="fa fa-th-large mr-3 fa-fw" style="color: <?php echo $primaryColor ?>;"></i>
                            {{$key2}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endforeach

                <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">OPERATIONS</p>

                <ul class="nav flex-column bg-white mb-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic" id="clientspayebtn">
                            <i class="fa fa-credit-card mr-3 text-danger fa-fw"></i>
                            Afficher les clients <span class="text-danger">(Non payé)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic" id="clientsnonpayebtn">
                            <i class="fa fa-credit-card mr-3 text-success fa-fw"></i>
                            Afficher les clients <span class="text-success">(Payé)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark font-italic" id="themechangebtn">
                            <i class=" mr-3 fa-fw fa fa-paint-brush" style="color: <?php echo $primaryColor ?>;"></i>
                            Changer de thème
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End vertical navbar -->
        </div>

        <div class="col-md-10">
            @yield('content')
        </div>

    </div>



    <!-- Contenu ajouté dans les pages -->

    <!-- Contenu ajouté dans les pages -->

</body>

</html>


<script>

</script>