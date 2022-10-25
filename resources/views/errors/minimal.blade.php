<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">



    <title>@yield('message')</title>

    <style>
        body {
            background-color: #2F3242;
        }

        /* svg {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -250px;
            margin-left: -400px;
        } */

        .message-box {
            height: 200px;
            width: 380px;
            margin-top: -100px;
            margin-left: 50px;
            color: #FFF;
            font-family: Roboto;
            font-weight: 300;
        }

        .message-box h1 {
            font-size: 60px;
            line-height: 46px;
            margin-bottom: 40px;
        }

        .buttons-con .action-link-wrap {
            margin-top: 40px;
        }

        .buttons-con .action-link-wrap a {
            background: #68c950;
            padding: 8px 25px;
            border-radius: 4px;
            color: #FFF;
            font-weight: bold;
            font-size: 14px;
            transition: all 0.3s linear;
            cursor: pointer;
            text-decoration: none;
            margin-right: 10px
        }

        .buttons-con .action-link-wrap a:hover {
            background: #5A5C6C;
            color: #fff;
        }

        #Polygon-1,
        #Polygon-2,
        #Polygon-3,
        #Polygon-4,
        #Polygon-4,
        #Polygon-5 {
            animation: float 1s infinite ease-in-out alternate;
        }

        #Polygon-2 {
            animation-delay: .2s;
        }

        #Polygon-3 {
            animation-delay: .4s;
        }

        #Polygon-4 {
            animation-delay: .6s;
        }

        #Polygon-5 {
            animation-delay: .8s;
        }

        @keyframes float {
            100% {
                transform: translateY(20px);
            }
        }

    </style>


</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-8">
                <img src="{{asset('/error.gif')}}" width="100%" height="100%">
            </div>
            <div class="col">
                    <h1 class="text-white">{{config()->get('config.site.Nom')}} | @yield('code')</h1>
                    <p class="text-white"><span class="text-danger"> Message d'erreur : </span>@yield('message')</p>
                    <a href="{{ route('acceuil')}}" class="link-button"><button class="btn btn-success"> Page d'accueil</button></a>
            </div>
        </div>
    </div>



</body>

</html>