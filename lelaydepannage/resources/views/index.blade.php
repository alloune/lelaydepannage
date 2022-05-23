@extends('layouts/template')
@section('title','Accueil - LLD')
@section('content')
    <div class="sentenceAcc">
        <img src="{{ asset('car1Carou.svg') }}">
        <h4>Besoin d'un ferrailleur ?<br/> Nous vous proposons des services spécifiques à vos besoins !</h4>
    </div>
    <div class="services">
        <h4>Nos Services</h4>
    </div>
    <div class="listOfServices">
        <div class="icon">
            <h4>Depannage | Livraison</h4>
            <img src="{{ asset('dep.svg') }}">
        </div>
        <div>
            <img src="{{ asset('destr.svg') }}">
        </div>
        <div class="icon">

            <h4>Enlèvement d'encombrant</h4>
            <img src="{{ asset('enc.svg') }}">
        </div>
    </div>



@endsection
