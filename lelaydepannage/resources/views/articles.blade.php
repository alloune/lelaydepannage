@extends('layouts/template')
@section('title','Vehicules - LLD')
@section('content')


    <div class="addArticle container-fluid p-2 justify-content-center row">
        <!---- Display articles ----->
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">

                    @foreach($vehicules as $vehicule)

                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{$vehicule->image}}">
                                <div class="card-body">

                                    <ul>
                                        <li>Marque et modèle : {{ $vehicule->brand }} {{ $vehicule->model }}</li>
                                        <li>Moteur : {{ $vehicule->engine }}</li>
                                        <li>Année : {{ $vehicule->year }} </li>
                                        <li>Carburant : {{ $vehicule->fuels }}</li>
                                        <li>Kilométrage : {{ $vehicule->km }}</li>
                                        <li>Prix : {{ $vehicule->price }} €</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

@endsection
