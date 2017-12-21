<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="{{ asset('css/docs.theme.min.css') }}" rel="stylesheet">
<<<<<<< HEAD
<link href="{{ asset('css/estilos.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style01.css') }}" rel="stylesheet">
=======

>>>>>>> 68dfbe12ab661bd9cb251749cae0af45e7a777a5

    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">



<<<<<<< HEAD
=======
    <link href="{{ asset('css/style01.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">


>>>>>>> 68dfbe12ab661bd9cb251749cae0af45e7a777a5
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/owl.carousel.js') }}"></script>

<<<<<<< HEAD


=======
>>>>>>> 68dfbe12ab661bd9cb251749cae0af45e7a777a5
</head>
<body>





    <div id="app">

      <div class="banner">
        <div class="logoo">
          <a class="nav-link active" href="home.php"><img src="imagenes/logo/utile.png" class="logo" alt=""></a>
        </div>

        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link disabled" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="register">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="preguntasfrecuentes.php">FAQ</a>
          </li>
        </ul>

      </div>



        @yield('content')



    </div>

<<<<<<< HEAD
    <!-- Scripts -->
=======

>>>>>>> 68dfbe12ab661bd9cb251749cae0af45e7a777a5



</body>
</html>
