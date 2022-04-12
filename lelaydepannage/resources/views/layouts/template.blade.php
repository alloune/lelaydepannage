<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="{{ asset('stylesheet.css') }}" rel="stylesheet">

</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white ">


    <div class="col-4 collapse d-flex justify-content-center navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-dark" href="{{ route('services') }}">Mes services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-warning" href="{{ route('vehicule') }}">Véhicules disponibles</a>
            </li>


        </ul>
    </div>
    <div class="col-4 d-flex justify-content-center nav navbar-brand">
    <a class="d-flex justify-content-center" href="{{ route('index') }}" ><img src="{{ asset('logo.png') }}"></a>
    </div>

    <div class="col-4 d-flex justify-content-center collapse navbar-collapse ">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-dark" href="{{ route('rdv') }}">Prise de rendez-vous</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-warning" href="{{ route('contact') }}">Contact</a>
            </li>


        </ul>
    </div>
</nav>

@yield('contact')
<div class="container">
    @yield('content')

</div>
<footer>

    <div class="favicon">
        <img src="{{ asset('facebook.png') }}">
        <img src="{{ asset('instagram.png') }}">
        <img src="{{ asset('outlook.png') }}">

    </div>
    <p> Le Lay Dev.Web Copyright 2022</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</body>
</html>
