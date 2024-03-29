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

<body class="d-flex flex-column min-vh-100 bbs">
    <script type="text/javascript" src="{{asset('/js/General.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/TextAnimations.js')}}"></script>

    <style>
        body {
            background-color: <?php echo $backgroundColor ?>;
        }

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


        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }

        .goog-te-gadget .goog-te-combo {
            color: blue !important;
        }
    </style>
    <nav class="generalNavBar navbar navbar-dark navbar-expand-lg mb-5 sticky-top shadow-5-strong">
        <div class="container">
            <a class="navbar-brand mr-auto text-uppercase nomSiteFont" href="{{ route('acceuil') }}">{{ config()->get('config.site.Nom') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-pills nav-fill">
                    @foreach(config('config.links') as $key => $value)

                    <li class="nav-item"><a href="{{ $value }}" class="nav-link me-3 text-light text-decoration-none">{{ $key }}</a></li>

                    @endforeach
                </ul>

                <!-- Login , Register and Logout Links -->

                <ul class="navbar-nav ms-auto">
                    <div id="google_translate_element" role="button"></div>
                    @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle rounded p-2" style="background-color: <?php echo $secondaryColorbuttons ?>;" href="#" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span><i class="fa fa-user-circle me-3"></i>MON COMPTE </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fa fa-sign-in me-3"></i>{{ config()->get('config.basics.login') }}</a></li>
                            <li><a class="dropdown-item" href="{{ route('register-user') }}"><i class="fa fa-user-plus me-3"></i>{{ config()->get('config.basics.signup') }}</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link rounded p-2 text-light" href="#" id="notifications" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <h4><i class="fa fa-bell"></i></h4>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="notifications">
                            @foreach(DB::table('messages')->select('message', 'created_at')->get() as $mess)
                            <li class="bg-secondary mb-1 text-center p-1">
                                <div class="container">
                                    <h6 class="text-light FontInter"> Nouveau message </h6>
                                    <p class="justifytext">{{ $mess->message }}</p> @if(\Carbon\Carbon::parse($mess->created_at)->diffInDays(\Carbon\Carbon::now()) != 0) <p style="font-size: 10px;">Posté depuis : {{ \Carbon\Carbon::parse($mess->created_at)->diffInDays(\Carbon\Carbon::now())}} jour(s)</p> @else <p style="font-size: 10px;">Vient d'être posté</p> @endif
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </li>

                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link rounded text-dark " style="background-color: <?php echo $secondaryColorbuttons ?>;" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('/storage/profile/'.Auth::user()->image) }}" width="30" height="30" class="rounded-circle"> Bienvenue {{ auth()->user()->prenom }} @if(auth()->user()->role == "admin") <i class="fa fa-sort"></i>@endif
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('user') }}"><i class="fa fa-user"> Profile</i></a></li>
                            @if(auth()->user()->role == "admin")
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('admin') }}"><i class="fa fa-lock"> </i> Administrateur</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @endif
                            <li class="nav-item"><a class="dropdown-item text-danger" href="{{ route('signout') }}"><i class="fa  fa-sign-out"> {{ config()->get('config.basics.logout') }}</i></a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link rounded p-2 text-light" href="#" id="notifications" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <h4><i class="fa fa-bell"></i></h4>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="notifications">
                            @foreach(DB::table('messages')->select('message', 'created_at')->get() as $mess)
                            <li class="bg-secondary mb-1 text-center p-1">
                                <div class="container">
                                    <h6 class="text-light FontInter"> Nouveau message </h6>
                                    <p class="justifytext">{{ $mess->message }}</p> @if(\Carbon\Carbon::parse($mess->created_at)->diffInDays(\Carbon\Carbon::now()) != 0) <p style="font-size: 10px;">Posté depuis : {{ \Carbon\Carbon::parse($mess->created_at)->diffInDays(\Carbon\Carbon::now())}} jour(s)</p> @else <p style="font-size: 10px;">Vient d'être posté</p> @endif
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </li>

                    @endguest
                </ul>

                <!-- Login , Register and Logout Links End -->

            </div>
        </div>
    </nav>




    <!-- Contenu ajouté dans les pages -->
    <div style="display: none;"></div>
    <div style="display: none;" class="">

        <ul class="dropdown-menu" aria-labelledby="notifications">
            @foreach(DB::table('messages')->select('message', 'created_at')->get() as $mess)
            <li class="bg-secondary mb-1 text-center p-1">
                <div class="container">
                    <h6 class="text-light FontInter"> Nouveau message </h6>
                    <p class="justifytext">{{ $mess->message }}</p> @if(\Carbon\Carbon::parse($mess->created_at)->diffInDays(\Carbon\Carbon::now()) != 0) <p style="font-size: 10px;">Posté depuis : {{ \Carbon\Carbon::parse($mess->created_at)->diffInDays(\Carbon\Carbon::now())}} jour(s)</p> @else <p style="font-size: 10px;">Vient d'être posté</p> @endif
                </div>
            </li>
            @endforeach

        </ul>

    </div>
    @yield('content')
    <!-- Contenu ajouté dans les pages -->

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

                    <div class="col-md-3 col-lg-4 mb-0 d-flex justify-content-center align-item-center">
                        <svg width="100%" height="100%" viewBox="0 0 261 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_15_131)">
                                <path d="M104.443 19.0986C101.263 24.5754 107.251 33.8035 101.216 35.7198L101.713 35.2228C105.356 30.7432 97.7421 21.2618 101.385 16.7822C101.951 16.1251 102.437 15.4031 102.832 14.6313" fill="#2F2E41" />
                                <path d="M134.223 99.4476C134.327 98.8995 134.31 98.3353 134.172 97.7946C134.035 97.2539 133.781 96.7499 133.427 96.3181C133.074 95.8863 132.63 95.5372 132.127 95.2954C131.624 95.0536 131.075 94.925 130.517 94.9187L122.656 72.0874L118.306 77.6318L126.616 98.965C126.668 99.9029 127.061 100.789 127.723 101.456C128.384 102.123 129.268 102.525 130.205 102.584C131.143 102.644 132.07 102.357 132.81 101.779C133.551 101.201 134.053 100.371 134.223 99.4476L134.223 99.4476Z" fill="#FFB8B8" />
                                <path d="M99.6715 44.3241C99.6715 44.3241 99.4269 36.0595 106.819 40.794C114.211 45.5284 130.306 89.8789 130.306 89.8789L122.297 94.2113L104.114 53.6256L99.6715 44.3241Z" fill="<?php echo $secondaryColor ?>" />
                                <path d="M121.48 185.974L117.789 187.551L109.948 174.067L115.396 171.74L121.48 185.974Z" fill="#FFB6B6" />
                                <path d="M126.161 191.536L123.514 192.667L121.974 190.37L121.832 193.385L114.811 196.385C114.474 196.529 114.101 196.561 113.744 196.478C113.388 196.394 113.068 196.199 112.83 195.92C112.593 195.642 112.451 195.295 112.424 194.93C112.398 194.565 112.489 194.201 112.685 193.892L116.637 187.625L115.557 185.099L121.605 182.932L126.161 191.536Z" fill="#2F2E41" />
                                <path d="M63.6158 190.548L59.6066 190.352L58.4541 174.798L64.3719 175.087L63.6158 190.548Z" fill="#FFB6B6" />
                                <path d="M65.3926 197.596L62.5173 197.456L62.1367 194.717L60.6896 197.367L53.0637 196.994C52.6982 196.976 52.3479 196.842 52.0641 196.611C51.7802 196.38 51.5777 196.064 51.4859 195.71C51.3942 195.356 51.4181 194.982 51.5542 194.642C51.6903 194.302 51.9314 194.015 52.2424 193.822L58.5377 189.915L58.6719 187.171L65.0586 187.866L65.3926 197.596Z" fill="#2F2E41" />
                                <path d="M181.748 188.07C182.014 188.079 182.276 188.007 182.499 187.863C182.722 187.719 182.896 187.509 182.996 187.263C183.096 187.017 183.118 186.746 183.059 186.487C183 186.228 182.863 185.993 182.666 185.815C182.632 185.685 182.608 185.592 182.574 185.463C182.822 184.815 183.258 184.256 183.825 183.858C184.393 183.459 185.067 183.239 185.76 183.226C186.454 183.213 187.135 183.407 187.718 183.784C188.3 184.161 188.756 184.703 189.029 185.34C190.599 188.92 192.622 192.622 191.671 196.591C198.07 182.692 195.685 165.501 185.922 153.759C183.24 152.316 181.053 149.726 180.461 146.701C181.786 147.135 183.422 146.046 182.416 144.665C181.98 144.138 181.541 143.615 181.106 143.087C186.07 137.7 192.125 146.035 186.674 153.295C188.501 155.541 190.088 157.972 191.41 160.549C191.084 157.803 191.415 155.019 192.376 152.426C193.351 150.008 195.203 147.962 196.832 145.865C198.811 143.309 202.946 144.44 203.246 147.656C201.403 148.282 201.188 150.954 203.307 151.3C202.81 157.293 198.949 162.833 193.585 165.511C195.628 171.075 196.462 177.01 196.031 182.922C196.916 176.009 204.312 174.263 209.467 171.47C209.794 171.256 210.177 171.141 210.569 171.141C210.961 171.14 211.344 171.254 211.673 171.467C212.001 171.681 212.26 171.985 212.418 172.343C212.576 172.702 212.627 173.098 212.564 173.485C211.851 173.782 211.171 174.15 210.531 174.582C210.231 174.787 210.003 175.081 209.876 175.421C209.75 175.762 209.732 176.133 209.825 176.485C209.918 176.836 210.117 177.15 210.395 177.383C210.674 177.617 211.018 177.759 211.38 177.789C208.83 184.275 202.12 188.678 195.186 188.72C194.547 191.621 193.608 194.448 192.385 197.156L182.094 197.254C182.056 197.14 182.021 197.022 181.987 196.908C182.94 196.959 183.896 196.893 184.833 196.711C182.284 193.752 180.321 192.249 181.748 188.07L181.748 188.07Z" fill="#F2F2F2" />
                                <path d="M73.7441 89.4388C73.7441 89.4388 65.5909 111.653 65.4591 114.139C65.3274 116.625 63.0022 148.062 61.0521 149.888C59.1019 151.715 53.1399 180.033 57.779 182.248C62.418 184.463 77.0538 180.794 77.0538 180.794L82.1453 147.343L83.8749 121.716C83.8749 121.716 89.1405 182.064 98.6909 181.886C108.241 181.709 119.879 178.073 119.879 178.073L106.512 141.526C106.512 141.526 106.701 98.2584 103.602 89.5317C100.504 80.8049 73.7441 89.4388 73.7441 89.4388Z" fill="#2F2E41" />
                                <path d="M97.9375 32.2053L87.0184 33.2052L85.2593 38.6038C85.2593 38.6038 76.1215 43.6211 78.1448 45.9004C80.1682 48.1798 77.6924 63.5407 77.6924 63.5407L78.2516 76.0094C78.2516 76.0094 77.6509 84.648 75.8533 86.6383C74.0556 88.6287 69.3526 93.5093 72.6757 91.1743C84.3274 82.9871 104.693 89.8954 104.693 89.8954L101.784 72.0792C101.784 72.0792 108.392 42.91 105.784 40.4465C103.176 37.9831 100.716 37.6717 100.716 37.6717L97.9375 32.2053Z" fill="<?php echo $secondaryColor ?>" />
                                <path d="M40.5624 88.718C41.1109 88.6159 41.6305 88.3947 42.0843 88.0702C42.5382 87.7456 42.9153 87.3255 43.1892 86.8394C43.4631 86.3533 43.627 85.8131 43.6695 85.2569C43.712 84.7006 43.6319 84.1418 43.435 83.6198L61.8514 67.9989L55.1035 65.9624L38.2467 81.4581C37.3915 81.847 36.7087 82.5359 36.3276 83.3945C35.9466 84.253 35.8938 85.2215 36.1792 86.1164C36.4646 87.0112 37.0685 87.7703 37.8763 88.2498C38.6842 88.7293 39.6399 88.8959 40.5624 88.718Z" fill="#FFB8B8" />
                                <path d="M87.3332 47.8581C87.3332 47.8581 90.9617 40.4282 82.275 41.6974C73.5883 42.9666 40.6469 76.7488 40.6469 76.7488L46.1596 83.9955L79.4521 54.5036L87.3332 47.8581Z" fill="<?php echo $secondaryColor ?>" />
                                <path d="M73.1872 35.2555L38.7461 79.3689C38.1503 80.1346 37.8824 81.1051 38.0011 82.0679C38.1197 83.0307 38.6153 83.9072 39.3792 84.5053C47.3774 103.921 71.3055 118.318 99.4536 131.386C100.219 131.983 101.19 132.251 102.153 132.132C103.117 132.014 103.993 131.518 104.591 130.753L139.032 86.64C139.629 85.8746 139.897 84.9038 139.778 83.9409C139.659 82.9779 139.163 82.1014 138.399 81.5036C114.777 68.1685 94.4748 52.7185 78.3247 34.6225C77.5588 34.0268 76.5881 33.759 75.6251 33.8776C74.6621 33.9963 73.7854 34.4918 73.1872 35.2555Z" fill="#E6E6E6" />
                                <path d="M136.615 85.6362L126.131 99.0639C119.728 107.217 110.357 112.505 100.066 113.773C89.7747 115.041 79.4001 112.186 71.2079 105.831L41.8283 82.9037C41.3931 82.564 41.1105 82.0655 41.0424 81.5176C40.9743 80.9697 41.1264 80.4173 41.4653 79.9814L74.7458 37.3545C75.0864 36.92 75.5856 36.6383 76.1337 36.5713C76.6818 36.5043 77.2341 36.6574 77.6695 36.997C92.5312 56.1836 112.425 71.1145 136.255 82.7163C136.689 83.0561 136.971 83.5544 137.039 84.1018C137.106 84.6492 136.954 85.201 136.615 85.6362Z" fill="white" />
                                <path d="M72.5001 59.3372L65.6726 68.082C65.4915 68.3136 65.2257 68.4639 64.9338 68.4997C64.6419 68.5355 64.3477 68.454 64.1158 68.2731C63.884 68.0922 63.7335 67.8266 63.6974 67.5348C63.6613 67.243 63.7425 66.9488 63.9233 66.7168L70.7507 57.972C70.8403 57.857 70.9517 57.7608 71.0785 57.6889C71.2053 57.6169 71.3451 57.5707 71.4898 57.5528C71.6345 57.5349 71.7813 57.5457 71.9218 57.5846C72.0623 57.6234 72.1938 57.6896 72.3088 57.7793C72.4237 57.869 72.5198 57.9804 72.5916 58.1073C72.6635 58.2341 72.7096 58.3739 72.7273 58.5186C72.7451 58.6633 72.7342 58.81 72.6952 58.9505C72.6562 59.0909 72.5899 59.2223 72.5001 59.3372H72.5001Z" fill="#CCCCCC" />
                                <path d="M85.3063 52.8505L70.3126 72.0549C70.223 72.1698 70.1116 72.2658 69.9848 72.3376C69.858 72.4094 69.7183 72.4555 69.5737 72.4734C69.4291 72.4912 69.2824 72.4803 69.1419 72.4415C69.0015 72.4026 68.8701 72.3365 68.7552 72.2468C68.6404 72.1572 68.5443 72.0458 68.4725 71.919C68.4007 71.7923 68.3545 71.6526 68.3367 71.508C68.3189 71.3634 68.3297 71.2168 68.3686 71.0764C68.4075 70.936 68.4736 70.8046 68.5633 70.6898L83.5569 51.4854C83.6465 51.3702 83.7578 51.2739 83.8847 51.2019C84.0115 51.1299 84.1513 51.0835 84.2961 51.0656C84.4408 51.0476 84.5877 51.0584 84.7283 51.0972C84.8689 51.1361 85.0005 51.2023 85.1155 51.292C85.2305 51.3817 85.3266 51.4933 85.3985 51.6202C85.4703 51.7471 85.5164 51.887 85.5341 52.0317C85.5518 52.1765 85.5408 52.3233 85.5017 52.4638C85.4626 52.6043 85.3962 52.7357 85.3063 52.8505H85.3063Z" fill="#CCCCCC" />
                                <path d="M59.7342 84.8831C63.7705 84.8831 67.0426 81.6117 67.0426 77.5763C67.0426 73.5409 63.7705 70.2695 59.7342 70.2695C55.6979 70.2695 52.4258 73.5409 52.4258 77.5763C52.4258 81.6117 55.6979 84.8831 59.7342 84.8831Z" fill="<?php echo $secondaryColor ?>" />
                                <path d="M86.1024 68.0283L67.6872 91.6151C67.495 91.8108 67.2375 91.9289 66.9638 91.9469C66.6902 91.965 66.4194 91.8817 66.2032 91.7129C65.987 91.5442 65.8404 91.3018 65.7915 91.032C65.7425 90.7622 65.7946 90.4838 65.9378 90.2499L84.353 66.6631C84.5452 66.4674 84.8026 66.3493 85.0763 66.3313C85.35 66.3132 85.6208 66.3965 85.837 66.5652C86.0532 66.734 86.1997 66.9763 86.2487 67.2462C86.2976 67.516 86.2455 67.7944 86.1024 68.0283Z" fill="#CCCCCC" />
                                <path d="M98.0487 62.643L72.3456 95.5645C72.1535 95.7602 71.896 95.8783 71.6223 95.8963C71.3486 95.9143 71.0778 95.8311 70.8616 95.6623C70.6454 95.4936 70.4989 95.2512 70.4499 94.9814C70.401 94.7116 70.4531 94.4332 70.5963 94.1993L96.2993 61.2778C96.4915 61.0822 96.749 60.9641 97.0227 60.946C97.2964 60.928 97.5671 61.0113 97.7833 61.18C97.9996 61.3487 98.1461 61.5911 98.195 61.8609C98.244 62.1307 98.1919 62.4091 98.0487 62.643Z" fill="#CCCCCC" />
                                <path d="M97.9594 77.2814L79.5442 100.868C79.3521 101.064 79.0946 101.182 78.8209 101.2C78.5472 101.218 78.2765 101.135 78.0602 100.966C77.844 100.797 77.6975 100.555 77.6485 100.285C77.5996 100.015 77.6517 99.737 77.7949 99.5031L96.21 75.9163C96.4022 75.7206 96.6597 75.6025 96.9334 75.5845C97.2071 75.5664 97.4778 75.6497 97.694 75.8184C97.9102 75.9871 98.0568 76.2295 98.1057 76.4993C98.1547 76.7692 98.1026 77.0475 97.9594 77.2814Z" fill="#CCCCCC" />
                                <path d="M122.326 80.1901L103.911 103.777C103.719 103.973 103.461 104.091 103.187 104.109C102.914 104.127 102.643 104.044 102.427 103.875C102.21 103.706 102.064 103.464 102.015 103.194C101.966 102.924 102.018 102.646 102.161 102.412L120.576 78.8249C120.769 78.6293 121.026 78.5112 121.3 78.4931C121.573 78.4751 121.844 78.5584 122.06 78.7271C122.277 78.8958 122.423 79.1382 122.472 79.408C122.521 79.6779 122.469 79.9562 122.326 80.1901Z" fill="<?php echo $secondaryColor ?>" />
                                <path d="M109.906 71.8962L84.2027 104.818C84.0105 105.013 83.753 105.131 83.4793 105.149C83.2056 105.168 82.9349 105.084 82.7187 104.916C82.5025 104.747 82.3559 104.504 82.307 104.235C82.258 103.965 82.3101 103.686 82.4533 103.452L108.156 70.531C108.349 70.3353 108.606 70.2172 108.88 70.1992C109.153 70.1812 109.424 70.2644 109.64 70.4332C109.857 70.6019 110.003 70.8443 110.052 71.1141C110.101 71.3839 110.049 71.6623 109.906 71.8962Z" fill="#CCCCCC" />
                                <path d="M79.6312 18.2682C79.6306 20.0432 80.0657 21.7911 80.8985 23.3587C81.7313 24.9262 82.9362 26.2655 84.4075 27.2587C85.8788 28.252 87.5715 28.8691 89.3371 29.0556C91.1026 29.2422 92.8869 28.9926 94.5334 28.3288C96.1799 27.665 97.6383 26.6072 98.7804 25.2484C99.9226 23.8895 100.714 22.2711 101.084 20.5353C101.455 18.7994 101.393 16.9992 100.905 15.2926C100.418 13.586 99.5182 12.0252 98.2861 10.7472L98.2341 10.6952C98.1473 10.6041 98.0605 10.513 97.9694 10.4262C97.9689 10.4263 97.9683 10.4262 97.9678 10.4259C97.9672 10.4257 97.9667 10.4254 97.9663 10.425C97.9659 10.4246 97.9656 10.4241 97.9654 10.4236C97.9652 10.423 97.9651 10.4225 97.9651 10.4219C97.8523 10.3178 97.7395 10.2137 97.6224 10.114C96.0551 8.74026 94.1251 7.84726 92.0634 7.54187C90.0016 7.23647 87.8955 7.53163 85.9972 8.39201C84.0989 9.2524 82.4889 10.6415 81.3599 12.3931C80.2308 14.1447 79.6307 16.1845 79.6312 18.2683V18.2682Z" fill="#2F2E41" />
                                <path d="M93.1492 29.8699C98.1721 29.8699 102.244 25.799 102.244 20.7772C102.244 15.7555 98.1721 11.6846 93.1492 11.6846C88.1263 11.6846 84.0544 15.7555 84.0544 20.7772C84.0544 25.799 88.1263 29.8699 93.1492 29.8699Z" fill="#FFB8B8" />
                                <path d="M83.4537 23.2002C82.5648 19.195 83.8497 14.7078 86.6511 12.0339C88.0601 10.7156 89.8126 9.82156 91.7071 9.45444C93.6015 9.08731 95.5612 9.26203 97.3608 9.95852C97.5895 10.0508 97.8182 10.1519 98.0427 10.2573L98.1471 10.3065V10.3218C98.1673 10.3358 98.1876 10.3505 98.2078 10.3654C98.2502 10.4052 98.3019 10.4337 98.3581 10.4483C99.1477 10.4277 99.9329 10.5741 100.662 10.878C101.391 11.1818 102.048 11.6363 102.589 12.2116C103.999 13.7407 104.662 16.2119 104.459 19.1698L104.452 19.2623L104.374 19.3115C103.306 19.9876 102.199 20.598 101.058 21.1394C97.065 23.0163 93.42 23.3641 89.9168 22.2012L89.8525 22.1799L88.3822 19.7163C88.0803 21.4155 88.2415 27.0517 86.5094 27.357L83.4913 23.3701L83.4537 23.2002Z" fill="#2F2E41" />
                                <path d="M64.3086 31.1172C67.4035 29.5202 63.4231 23.7238 64.223 20.3348C65.0228 16.9458 70.7826 15.8557 71.1495 12.3931C71.5164 8.93036 72.3796 5.35896 74.6651 2.73144C76.1255 1.05246 78.2774 -0.187023 80.493 0.0232804C81.2426 0.0944335 81.9681 0.326278 82.6201 0.703023C83.272 1.07977 83.8351 1.59257 84.2709 2.20648C84.7067 2.8204 85.0051 3.52101 85.1457 4.26061C85.2863 5.00021 85.2658 5.76142 85.0856 6.49238C85.7164 5.59875 87.3489 5.79243 87.753 6.8089C88.1123 7.71254 87.3186 8.8071 86.3846 8.88705C85.1625 10.396 83.763 11.9973 81.8484 12.3017C81.5434 12.3718 81.2264 12.3716 80.9214 12.3012C80.6164 12.2308 80.3314 12.0921 80.0879 11.8955C79.6375 11.463 79.6025 10.5984 80.1368 10.2752C77.7307 11.2308 76.32 13.8317 75.963 16.3954C75.606 18.9591 76.0999 21.5531 76.4254 24.121C76.7508 26.6889 76.8911 29.3902 75.884 31.7748C74.6941 34.5923 71.9546 36.6116 68.965 37.2592C65.9753 37.9068 62.7914 37.2738 60.0852 35.8479C57.3791 34.4218 55.1224 32.2449 53.2789 29.8043C56.4544 32.0586 60.8478 32.9032 64.3086 31.1172Z" fill="#2F2E41" />
                                <path d="M88.8047 20.1894C85.6248 25.6663 91.6125 34.8944 85.5779 36.8106L86.075 36.3136C89.7177 31.834 82.104 22.3527 85.7467 17.873C86.3127 17.2159 86.7985 16.4939 87.194 15.7222" fill="#2F2E41" />
                                <path d="M83.8784 23.1176C83.8784 23.1176 86.5725 13.0636 98.1212 10.743C98.1343 10.7388 98.1777 10.7214 98.2341 10.6954C98.2687 10.6737 98.3121 10.652 98.3555 10.6303C98.2254 10.5565 98.0996 10.4915 97.9694 10.4264C97.9688 10.4264 97.9683 10.4263 97.9677 10.4261C97.9672 10.4259 97.9667 10.4256 97.9663 10.4252C97.9659 10.4247 97.9656 10.4243 97.9654 10.4237C97.9652 10.4232 97.9651 10.4226 97.9651 10.4221C97.8523 10.318 97.7395 10.2139 97.6223 10.1141L97.2926 10.1272C97.2926 10.1272 85.7049 8.29247 83.8784 23.1176Z" fill="#FD6584" />
                                <path d="M1.92622e-06 197.567C-0.000168055 197.624 0.0109137 197.68 0.0326039 197.733C0.054294 197.786 0.086169 197.833 0.126392 197.874C0.166615 197.914 0.214391 197.946 0.266977 197.967C0.319563 197.989 0.375918 198 0.4328 198H260.567C260.682 198 260.792 197.954 260.873 197.873C260.954 197.792 261 197.682 261 197.567C261 197.452 260.954 197.342 260.873 197.261C260.792 197.18 260.682 197.135 260.567 197.135H0.432778C0.375898 197.134 0.319549 197.145 0.266966 197.167C0.214384 197.189 0.166607 197.221 0.126387 197.261C0.0861662 197.301 0.0542935 197.349 0.0326039 197.401C0.0109142 197.454 -0.000165628 197.51 1.92622e-06 197.567Z" fill="#CCCCCC" />
                            </g>
                            <defs>
                                <clipPath id="clip0_15_131">
                                    <rect width="261" height="198" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4 text-decoration-underline">Contact</h6>
                        <ul style="list-style: none;">
                            @foreach(config('config.medias') as $key => $value)
                            @if($value != null)
                            <li>
                                <a href="{{ $value }}" class="me-4 text-reset">
                                    <i class="fa fa-{{ $key }} me-3 text-capitalize"></i>
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