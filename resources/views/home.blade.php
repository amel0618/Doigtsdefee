@extends('layout.layouthf')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<h1>Accueil</h1>
<p class="presentation">
    Bienvenue chez Doigts de fée, l'onglerie où la magie opère pour révéler toute la beauté de vos mains et de vos pieds.
    En choisissant mon établissement, vous bénéficiez d'une expérience exclusive où chaque détail est soigneusement pris en compte. Que vous recherchiez une manucure raffinée, une pédicure relaxante ou une gamme complète de prestations pour prendre soin de vos mains et de vos pieds, vous pouvez compter sur mon expertise et mon savoir-faire.
    Je m'engage à vous offrir un service attentif, professionnel et sur mesure, en accordant une attention particulière à vos besoins et préférences.
    Réservez votre rendez-vous dès aujourd'hui et découvrez par vous-même pourquoi cette onglerie est synonyme de qualité et de satisfaction. Je suis impatiente de vous accueillir chez Doigts de fée.
</p>

<div class="carousel-container">
    <i id='prev-button' class="fa fa-chevron-left chevron"></i>
    <i id='next-button' class="fa fa-chevron-right chevron"></i>

    <div class="carousel-slide">
        <img class='slider-image' src="{{ asset('image/img1.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img2.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img3.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img4.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img5.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img1.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img2.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img3.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img4.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img5.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img1.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img2.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img3.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img4.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img5.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img1.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img2.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img3.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img4.jpg') }}">
        <img class='slider-image' src="{{ asset('image/img5.jpg') }}">
    </div>
</div>

<p class="text">
    Découvrez mes prestations<br>
    Explorez ma gamme complète de prestations pour trouver le service qui correspond à vos envies. De la pose d'ongles en gel aux soins des cuticules en passant par les décorations personnalisées, je vous offre des solutions sur mesure pour sublimer vos ongles. <br>
    Qualité et hygiène<br>
    Votre satisfaction et votre sécurité sont mes priorités absolues. J'utilise uniquement des produits de qualité supérieure et je respecte les normes d'hygiène les plus strictes. Chaque outil et équipement est soigneusement désinfecté pour vous offrir une expérience sans compromis.<br>
    Contactez-moi<br>
    Si vous avez des questions ou besoin de plus d'informations, n'hésitez pas à me contacter. Je suis là pour vous aider et répondre à toutes vos demandes. Vous pouvez me joindre par téléphone ou sur Instagram.<br>
    J'ai hâte de vous accueillir dans mon institut de prothésiste ongulaire et de vous offrir une expérience de beauté personnalisée. Prenez rendez-vous dès aujourd'hui et découvrez l'art de la manucure à son meilleur !
</p>

@endsection