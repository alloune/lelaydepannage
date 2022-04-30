@extends('layouts/template')
@section('title','Accueil - LLD')
@section('content')


    <div class="services">
        <div>
            <img src="{{ asset('delivery.jpg') }}">
            <h3 style="text-align: center">Livraison de véhicules</h3>
            <p>Suite à l'achat d'un véhicule, il n'est pas toujours simple de le faire acheminer chez sois.</p>
            <br/>Pour palier à cette difficulté, je met à disposition mon savoir faire et mon matériel afin de livrer
            dans les meilleures conditions votre nouveau véhicule.
        </div>
        <div style="background-color: #FF9000">
            <img src="{{ asset('pickup.jpg') }}">
            <h3 style="text-align: center">Enlèvement d'encombrants</h3>
            <p>Il reste souvent beaucoup de déchet, de matériel dont nous n'avons plus l'utilité après l'achat d'un
                bien, d'un fond de commerce etc.
                <br/>Afin de vous faciliter la tâche dans votre transition, je vous viens en aide pour débarrasser tous
                ses élements dont vous ne voulez plus et qui prennent une place immense.
        </div>
        <div>
            <img src="{{ asset('destruction.jpg') }}">
            <h3 style="text-align: center">Destruction d'épave</h3>
            <p>Ma société étant agréee pour la destruction d'épave, je viens chez vous récuperer le véhicule, j'établis
                alors un CERFA de destruction que vous devrez fournir à votre assurance où pour bénéficier de la prime à
                descrution lors de l'achat d'un nouveau véhicule.
                <br/>Peut importe l'état du véhicule, je viendrais vous en débarasser. Seul impératif, pouvoir finir la
                carte grise.
        </div>


    </div>
@endsection
