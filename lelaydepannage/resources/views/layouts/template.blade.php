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
        <a href="#">Accueil</a>
        <a href="#">Mes services</a>
        <a href="#">Prise de rendez-vous</a>
        <a href="#">Véhicules disponibles</a>
        <a href="#">Contact</a>
        <div class="animation start-home"></div>
    </nav>
<div class="container">
@yield('content')

</div>
    <footer>
        Le Lay Dev.Web Copyright 2022
    </footer>
</body>
</html>
