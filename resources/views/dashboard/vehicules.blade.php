@extends('dashboard.layout.template')
@section('title','Dashboard - Le Lay dépannage')
@section('dashboard')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Formulaire d'ajout de véhicule</h1>
    <add-vehicule></add-vehicule>

@endsection
