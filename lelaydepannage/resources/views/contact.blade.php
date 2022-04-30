@extends('layouts/template')
@section('title','Contact - LLD')
@section('content')

    <div class="contact">
        <h3 style="text-align: center">Besoin d'un renseignement ? </h3>

        <form class="formContact" method="post" action="{{ route('messages.store') }}">
            @method('post')
            @csrf
            <div>
                <label>Prénom</label>
                <input type="text" placeholder="Votre prénom" name="firstName">
                <label>Nom</label>
                <input type="text" placeholder="Votre nom" name="lastName">
                <label>E-mail</label>
                <input type="email" placeholder="recup@gmail.com" name="email">
                <label>Sujet de votre message</label>
                <select name="subject">
                    <option>Dépannage</option>
                    <option>Enlèvement de ferraille</option>
                    <option>Enlèvement de véhicule</option>
                    <option>Certificat de destruction</option>
                    <option>Autre</option>
                </select>
            </div>
            <div>
                <label>Votre message</label>
                <textarea name="coreMessage" placeholder="Écrivez votre message ici ..."></textarea>
                <input class="submit" type="submit">
            </div>
        </form>


    </div>
    <div class="infoContact">
        <h3>Adresse</h3>
        <p>550 Chemin des matières</p>
        <p>38260 Champier</p>
        <h3>Tel</h3>
        <p>07-88-59-69-66</p>
        <h3>Mail</h3>
        <p>lelay.jordan@outlook.fr</p>
        <h3>Siret</h3>
        <p>Tu me le fileras j'en sais rien</p>
    </div>
    </div>

    </div>
@endsection
