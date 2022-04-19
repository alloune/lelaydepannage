@extends('layouts/template')
@section('title','Accueil - LLD')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger" style="margin-top: 150px">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="message container d-flex ">
        <div class="col col-6 d-none d-lg-block bg-warning">
            <img class="messageImg" src="{{ asset('send-message.png') }}">
        </div>
        <div class="col col-lg-6 col-sm-12 p-4">
            <div>
                <form method="post" action="{{ route('messages.store') }}">
                    @method('post')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nom</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Malakich">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Prénom</label>
                        <input type="text" class="form-control" name="firstName" placeholder="Jean">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Adresse e-mail</label>
                        <input type="email" class="form-control" name="email"
                               placeholder="nom.prenom@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Sujet</label>
                        <select class="form-control" name="subject">
                            <option>Dépannage</option>
                            <option>Achat/Vente de véhicule</option>
                            <option>Destruction de véhicule</option>
                            <option>Récupération ferraille</option>
                            <option>Autre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Votre message</label>
                        <textarea class="form-control" name="coreMessage" rows="3"></textarea>
                    </div>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </div>


@endsection
