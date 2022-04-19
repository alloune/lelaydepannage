@extends('layouts/templateDashboard')
@section('title','Dashboard - Le Lay dépannage')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container text-center">
        <button type="button" class="col-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#addArticleModal">
            Ajouter un véhicule
        </button>

        <!-- Modal --->


        <div class="modal fade" id="addArticleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">

            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajout d'un véhicule à la vente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <form id="form" action="{{ route('articles.store') }}" method="post">
                            @method('post')
                            @csrf

                            <div class="d-flex flex-column" id="divbrandInput">
                                <label>Marque</label>
                                <input id="brandInput" type="text" name="brand" placeholder="Peugeot">
                            </div>
                            <div class="d-flex flex-column" id="divmodelInput">
                                <label>Modèle</label>
                                <input id="modelInput" type="text" name="model" placeholder="208">
                            </div>
                            <div class="d-flex flex-column" id="divengineInput">
                                <label>Motorisation</label>
                                <input id="engineInput" type="text" name="engine" placeholder="1.9 tdi">
                            </div>
                            <div class="d-flex flex-column" id="divfuelsInput">
                                <label>Carburant</label>
                                <input id="fuelsInput" type="text" name="fuels" placeholder="diesel">
                            </div>
                            <div class="d-flex flex-column" id="divkmInput">
                                <label>KM au compteur</label>
                                <input id="kmInput" type="text" name="km" placeholder="350000">
                            </div>
                            <div class="d-flex flex-column" id="divpriceInput">
                                <label>Prix</label>
                                <input id="priceInput" type="text" name="price" placeholder="1500">
                            </div>
                            <div class="d-flex flex-column" id="divphotoInput">
                                <label>Photo</label>
                                <input id="photoInput" type="text" name="image" placeholder="https://google.fr">
                            </div>
                            <div class="d-flex flex-column" id="divyearInput">
                                <label>Année de construction</label>
                                <input id="yearInput" type="text" name="year" placeholder="2001">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button id="validatedAddVehicule" onclick="submitForm()" type="submit" class="btn btn-primary">
                            Ajouter
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">Marque</th>
                <th scope="col">Modèle</th>
                <th scope="col">Motorisation</th>
                <th scope="col">Carburant</th>
                <th scope="col">Kilométrage</th>
                <th scope="col">Prix</th>
                <th scope="col">Photo</th>
                <th scope="col">Année</th>
                <th scope="col">Edition</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehicules as $vehicule)

                <tr>
                    <form method="post" action="{{ route('articles.update', ['article'=>$vehicule->id]) }}">
                    <th scope="col"><input type="text" name="brand" value="{{ $vehicule->brand }}"></th>
                    <th scope="col"><input type="text" name="model" value="{{ $vehicule->model }}"></th>
                    <th scope="col"><input type="text" name="engine" value="{{ $vehicule->engine }}"></th>
                    <th scope="col"><input type="text" name="fuels" value="{{ $vehicule->fuels }}"></th>
                    <th scope="col"><input type="text" name="km" value="{{ $vehicule->km }}"></th>
                    <th scope="col"><input type="text" name="price" value="{{ $vehicule->price }}"></th>
                    <th scope="col"><input type="text" name="image" value="{{ $vehicule->image }}"></th>
                    <th scope="col"><input type="text" name="year" value="{{ $vehicule->year }}"></th>
                    <th scope="col">
                        @csrf
                        @method('PUT')
                        <input class="btn btn-primary" type="submit" value="MàJ">
                    </form>
                    </th>
                    <th scope="col">
                        <form method="post" action="{{ route('articles.destroy', ['article'=>$vehicule->id]) }}">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Effacer">
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
