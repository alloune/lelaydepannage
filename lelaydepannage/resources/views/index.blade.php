@extends('layouts/template')
@section('title','Accueil - LLD')
@section('content')
    <div class="indexBody">
        <img class="" src="{{ asset('depannage_vieille_peugeot.jpg') }}">

        <div class="indexCard">
            <div class="card"><h1>Gratuit</h1></div>
            <div class="card"><h1>7/7j</h1></div>

        </div>
        <div class="secondBlock">
            <h2>Le cycle de vie d'un véhicule</h2>
            <p>Actuellement, on estime à 38,2 millions de voitures en circulation en france. Chaque véhicules est
                composé en moyenne de 711kg de matériaux ferreux ou en acier, ainsi que de 100 kilos de
                fontes/alliages. Soit 810 kilos recyclable sur un poids total d'environs 1 tonne.
                Ce qui fait des véhicules une des productions humaines les mieux recyclables, 81% au total.<br>
                La durée de vie d'une voiture ne se compte pas forcement en année, mais plûtot en kilomètre parcouru.
                Cette
                durée de vie oscille entre 200 000 km et 400 000km pour les voitures les plus resistantes.
                Pour plus de renseignement, n'hésitez pas à visiter <a
                    href="https://blog.vivacar.fr/quelle-est-la-duree-de-vie-dune-voiture/">ce site</a></p>
        </div>
        <div class="thirdBlock">
            <h2>Les autres sources de métaux recyclable</h2>
            <p>Il est également possible de récupérer des materiaux ferreux d'autre origine. On peut penser par exemple
                au bardage
                d'une ancienne usine, du matériel professionnel comme des équipements de cuisines, des chauffe-eaux
                etc.</p>
        </div>
    </div>


@endsection
