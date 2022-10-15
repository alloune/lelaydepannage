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
                    <form id="form" action="{{ route('messages.store') }}" method="post" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                    <div class="screen-body-item">
                        <div class="app-form">
                            <div class="app-form-group">
                                <input class="app-form-control" name="firstName" placeholder="Nom">
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" name="lastName" placeholder="Prenom">
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" name="email" placeholder="Email">
                            </div>
                            <div class="app-form-group">
                                <label class="app-form-control">Sujet</label>
                                <select class="app-form-control" name="subject">
                                    <option value="depannage">Dépannage</option>
                                    <option value="ferraille">Enlèvement de ferraille</option>
                                    <option value="enlevement de vehicule">Enlèvement de véhicule</option>
                                    <option value="achat">Achat de véhicule</option>
                                    <option>Autre</option>
                                </select>
                            </div>
                            <div class="app-form-group message">
                                <input class="app-form-control" name="coreMessage" placeholder="Votre message">
                            </div>
                            <div class="app-form-group buttons">
                                <button class="app-form-button">Envoyer</button>
                            </div>
                        </div>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection
