@extends('layouts/template')
@section('title','Vehicules - LLD')
@section('content')


    <div class="addArticle container-fluid p-2 justify-content-center row">
        <!---- Display articles ----->
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @if(count($vehicules) > 0)
                    @foreach($vehicules as $vehicule)

                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{asset('/storage/'.$vehicule->image)}}">
                                <div class="card-body">

                                    <ul>
                                        <li>Marque et modèle : {{ $vehicule->brand }} {{ $vehicule->model }}</li>
                                        <li>Moteur : {{ $vehicule->engine }}</li>
                                        <li>Année : {{ $vehicule->year }} </li>
                                        <li>Carburant : {{ $vehicule->fuels }}</li>
                                        <li>Kilométrage : {{ $vehicule->km }}</li>
                                        <li>Controle téchnique : {{ $vehicule->ct }}</li>
                                        <li>Prix : {{ $vehicule->price }} €</li>
                                    </ul>
                                    <button class="callForCar" ><a href="tel:0788596966">Appelez !</a></button>
                                    <button class="callForCar" ><a href="{{ route('contact') }}">Contacte par mail</a></button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <h3>Désolé, actuellement aucun véhicule en vente</h3>
                    @endif
                </div>
            </div>
        </div>

@endsection
