@extends('layouts.template')
@section('title','Accueil - LLD')
@section('content')

    <div class="sentenceAcc">
        <img src="{{ asset('car1Carou.svg') }}">
        <h4>Besoin d'un ferrailleur ?<br/> Nous vous proposons des services spécifiques à vos besoins !</h4>
    </div>



    <div class="carouselIndex">
        <div class="orangeBlock">
            <a href="tel:0788596966"><img src="{{ asset('7_7Wide.svg') }}"></a>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('carou1.png') }}" class="d-block w-100" alt="Photo véhicule remorqué">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('carou2.png') }}" class="d-block w-100" alt="Photo depannage">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('carou3.png') }}" class="d-block w-100" alt="Photo achat de véhicule">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('carou4.png') }}" class="d-block w-100" alt="Photo revente de véhicule">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="orangeBlock">
            <h4>Besoin d’un ferrailleur ?
                Nous vous proposons des services spécifiques à vos besoins !</h4>
        </div>
    </div>



    <h4 class="nosServices">Nos Services</h4>
    <div class="services">
    </div>
    <div class="listOfServices">
        <div class="icon">
            <h4>Dépannage | Livraison</h4>
            <img src="{{ asset('dep.svg') }}">
            <div class="textDesciption">
                <p>Nul n’est à l’abri d’une panne mécanique au volant de son véhicule. C’est dans ce cas que je mets mon
                    service de dépannage à disposition. En fonction de la nature de la panne, je peux soit procé-der à
                    la réparation de votre véhicule sur place, lorsque la panne est peu préoccupante et ne néces-site
                    pas de remplacement de pièces ou bien remorquer votre véhicule jusqu’au garage le plus proche, dans
                    le cas où le diagnostic révèle une panne importante qui justifie un démontage et l’échange de
                    pièces.</p>

            </div>
        </div>
        <div>
            <img src="{{ asset('destr.svg') }}">
            <div class="textDesciption">
                <p>Après avoir récupéré votre véhicule et que celui-ci a été traité dans le VHU, le reconditionnement
                    consiste à trier les éléments de votre véhicule. C’est également à cette étape que votre véhicule
                    sera détruit. La récupération de ferraille est très variée : je peux démonter et déplacer vos
                    ferrailles encombrantes allant du simple électroménager hors d’usage à des projets de plus grande
                    envergure comme un silo entier à démonter.</p>

            </div>
        </div>
        <div class="icon">

            <h4>Enlèvement d'encombrant</h4>
            <img src="{{ asset('enc.svg') }}">
            <div class="textDesciption">
                <p>Je dispose d’un service de remorquage adapté à l’enlèvement de tous les types de véhicules :
                    voi-tures de toutes dimensions, vans, utilitaires… Je me déplace sur le lieu où est stationnée
                    l’épave, qu’il soit ou non facile d’accès : fossé, ruelle étroite, parking souterrain, terrain
                    vague… Je me charge d’enlever votre épave dans les règles sécuritaires et sanitaires adéquates.
                    Ensuite, le véhi-cule sera conduit dans le centre de traitement VHU (Véhicules Hors d’Usage) le plus
                    proche. Il s’agit de l’endroit où votre voiture sera reconditionnée.</p>
            </div>
        </div>
    </div>

@endsection
