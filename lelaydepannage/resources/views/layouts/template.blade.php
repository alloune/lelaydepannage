<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MLRGY1F6RD"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <script>
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
    <div class="imagePlace">
        <img src="{{ asset('logo.png') }}">
    </div>
    <a href="#" id="openBtn">
          <span class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
          </span>
    </a>
</div>

<div class="fullWidthMenu">
    <div id="wideScreenNav">
        <div class="imagePlace">
            <img src="{{ asset('logo.png') }}">
        </div>
        <div class="link">
            <a href="{{ route("articles.index") }}">Véhicules</a>
            <a href="{{ route("contact") }}">Contact</a>
        </div>

    </div>
</div>
<div class="cellPhone">
    <img src="{{ asset('7sur7.svg') }}">
    <div class="callMe">
        <a href="tel:0788596966">
            <h2>Contactez-moi</h2>
            <div class="cellNumber">
                <img src="{{ asset('cellPhone.svg') }}">
                <h3>07 88 59 69 66</h3>
            </div>
        </a>
    </div>
</div>
@yield('content')

<footer>
    <img src="{{ asset('FacebookFav.svg') }}">
    <div class="textFoot">
        <p>Mentions légales</p>
        <p>LeLayDepannage©</p>
        <p>Copyright 2022</p>
        <p>Le Lay Dev. Web</p>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script src="{{ asset('script.js') }}"></script>
</body>
</html>
