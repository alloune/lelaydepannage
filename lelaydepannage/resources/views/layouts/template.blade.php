<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('stylesheet.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <ul class="navbar-nav">
        <img src="{{ asset('logo.png') }}">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('index') }}">Accueil</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('services') }}">Mes services</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('rdv') }}">Prendre rendez-vous</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('vehicule') }}">Véhicules disponibles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>
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
