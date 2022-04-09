@extends('layouts/template')
@section('title','Contact - LLD')
@section('contact')

    <div id="contact">
        <div class="contactForm">
            <div class="inputForm">
                <h3>Besoin d'un renseignement ? D'être accompagné dans le recyclage de votre épave ?</h3>
                <form method="post" action="{{ route('messages.store') }}">
                    @method('post')
                    @csrf
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
                <label>Votre message</label>
                <textarea name="coreMessage" placeholder="Écrivez votre message ici ..."></textarea>
                <input type="submit">
                </form>


            </div>
            <div>
                <img src="{{ asset('contact_img.png') }}">
            </div>
        </div>

    </div>
@endsection
