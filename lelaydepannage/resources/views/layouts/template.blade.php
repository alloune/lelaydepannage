<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link href="{{ asset('stylesheet.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        <img class="headerLogo" src="{{ asset('logo.png') }}" alt="logo LLD">
        <a href="{{ route('index') }}">Accueil</a>
        <a href="{{ route('services') }}">Mes services</a>
        <a href="{{ route('rdv') }}">Prise de rendez-vous</a>
        <a href="{{ route('vehicule') }}">Véhicules disponibles</a>
        <a href="{{ route('contact') }}">Contact</a>
        <div class="animation start-home"></div>
    </nav>
@yield('contact')
<div class="container">
@yield('content')

</div>
    <footer>
        Le Lay Dev.Web Copyright 2022
    </footer>
</body>
</html>
