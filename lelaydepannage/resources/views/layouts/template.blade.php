<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MLRGY1F6RD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-MLRGY1F6RD');
    </script>
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
<div id="mySidenav" class="sidenav">
    <a id="closeBtn" href="#" class="close">×</a>
    <ul>
        <li><a href="{{ route('index') }}">Accueil</a></li>
        <li><a href="{{ route('articles.index') }}">Nos véhicules</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</div>
<div class="navBar">
    <a href="#" id="openBtn">
          <span class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
          </span>
    </a>
    <div class="imagePlace">
        <img src="{{ asset('logo.png') }}">
    </div>
</div>
<div id="wideScreenNav">
    <div class="imagePlace">
        <img src="{{ asset('logo.png') }}">
    </div>
    <div class="link">
        <a href="{{ route("index") }}">Accueil</a>
        <a href="{{ route("articles.index") }}">Mes véhicules</a>
        <a href="{{ route("contact") }}">Contact</a>
    </div>


</div>
<div class="cellPhone">
    <a href="tel:+33788596966" style="color:black; text-decoration: none">
        <div class="celimg">
            <img src="{{ asset('smartphone.png') }}">
        </div>
        <div class="celText">
            <p style="font-weight:bold; font-size: 3vw">Contactez-moi !</p>
            <p style="color:#FF9000;font-weight:bold;">07-88-59-69-66</p>
        </div>
    </a>
</div>
@yield('content')

<footer class="footer container-fluid ">
    <div class="col row">
        <div class="d-none d-lg-inline row justify-content-center">
            <div class="col-6 row">
                <a class="col"><img src="{{ asset('facebook.png') }}"></a>
                <a class="col"><img style="width: 64px" src="{{ asset('outlook.png') }}"></a>
            </div>
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
