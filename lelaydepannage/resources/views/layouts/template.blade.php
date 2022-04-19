<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('stylesheet.css') }}" rel="stylesheet">

</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="col col-2" href="{{ route('index') }}"><img class="nav-link col-12" src="{{ asset('logo.png') }}"></a>
    <button type="button" class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link text-uppercase " href="{{ route('services') }}">Mes services</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="{{ route('articles.index') }}">Véhicules</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="{{ route('messages.create') }}">Contact</a></li>
        </ul>
    </div>
</nav>
<div class="cellNum container-fluid col-7 d-flex justify-content-end">
    <div class="col col-3 d-flex row justify-content-end">
        <div class="col align-self-center col-3">
            <img class="img-fluid" src="{{ asset('smartphone.png') }}">
        </div>
        <div class="col col-8">
            <p style="font-weight:bold;">Contactez moi !</p>
            <p style="color:#FF9000;font-weight:bold;">07-88-59-69-66</p>
        </div>

    </div>
</div>
@yield('content')

<footer class="footer container-fluid ">
    <div class="col justify-content-center row">
        <div class="col-2 justify-content-around row">
            <img class="col-3 mx-auto" src="{{ asset('facebook.png') }}">
            <img class="col-3 mx-auto" src="{{ asset('instagram.png') }}">
            <img class="col-3 mx-auto" src="{{ asset('outlook.png') }}">
        </div>

    </div>
    <div class="col justify-content-center ">
        <p class="text-center"> Le Lay Dev.Web Copyright 2022</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


<script src="{{ asset('script.js') }}"></script>
</body>
</html>
