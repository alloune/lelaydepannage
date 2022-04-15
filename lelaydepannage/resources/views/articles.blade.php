@extends('layouts/template')
@section('title','Accueil - LLD')
@section('content')


    <div class="addArticle container-fluid p-2 justify-content-center row">

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
                            <div class="d-flex flex-column" id="divfuelInput">
                                <label>Carburant</label>
                                <input id="fuelInput" type="text" name="fuel" placeholder="diesel">
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
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button id="validatedAddVehicule" onclick="submitForm()" type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>

    </div>





@endsection
