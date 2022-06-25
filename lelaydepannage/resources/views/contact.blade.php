@extends('layouts/template')
@section('title','Contact - LLD')
@section('content')


    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <span>Besoin d'un</span>
                            <span>Renseignement ?</span>
                        </div>
                    </div>
                    <div class="screen-body-item">
                        <div class="app-form">
                            <div class="app-form-group">
                                <input class="app-form-control" name="nom" placeholder="Nom">
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" name="prenom" placeholder="Prenom">
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" name="email" placeholder="Email">
                            </div>
                            <div class="app-form-group">
                                <label class="app-form-control">Sujet</label>
                                <select class="app-form-control">
                                    <option>Dépannage</option>
                                    <option>Enlèvement de ferraille</option>
                                    <option>Enlèvement de véhicule</option>
                                    <option>Autre</option>
                                    <
                                </select>
                            </div>
                            <div class="app-form-group message">
                                <input class="app-form-control" placeholder="Votre message">
                            </div>
                            <div class="app-form-group buttons">
                                <button class="app-form-button">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
