@extends('layouts/template')
@section('title','Accueil - LLD')
@section('content')

    <div class="sentenceAcc">
        <img src="{{ asset('car1Carou.svg') }}">
        <h4>Besoin d'un ferrailleur ?<br/> Nous vous proposons des services spécifiques à vos besoins !</h4>
    </div>



    <div class="carouselIndex">
        <div class="orangeBlock">
            <img src="{{ asset('7_7Wide.svg') }}">
        </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('carou1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('carou2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('carou3.png') }}" class="d-block w-100" alt="...">
            </div><div class="carousel-item">
                <img src="{{ asset('carou4.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
        <div class="orangeBlock">
            <h4>Besoin d’un ferrailleur ?
                Nous vous proposons des services spécifiques à vos besoins !</h4>
        </div>
    </div>



    <h4 class="nosServices">Nos Services</h4>
    <div class="services">
    </div>
    <div class="listOfServices">
        <div class="icon">
            <h4>Dépannage | Livraison</h4>
            <img src="{{ asset('dep.svg') }}">
            <div class="textDesciption">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur consequuntur, ea earum eius est, eum labore laborum laudantium magni maxime molestiae, molestias natus nesciunt optio praesentium quaerat tempora voluptatum.</p>

            </div>
        </div>
        <div>
            <img src="{{ asset('destr.svg') }}">
            <div class="textDesciption">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur consequuntur, ea earum eius est, eum labore laborum laudantium magni maxime molestiae, molestias natus nesciunt optio praesentium quaerat tempora voluptatum.</p>

            </div>
        </div>
        <div class="icon">

            <h4>Enlèvement d'encombrant</h4>
            <img src="{{ asset('enc.svg') }}">
            <div class="textDesciption">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur consequuntur, ea earum eius est, eum labore laborum laudantium magni maxime molestiae, molestias natus nesciunt optio praesentium quaerat tempora voluptatum.</p>
            </div>
        </div>
    </div>



@endsection
