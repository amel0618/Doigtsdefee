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
<div class="background-home" style="background-image: url('{{ asset('../image/photo2.jpg') }}');">
    <div class="body_carousel">
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                <img src="{{ asset('image/img1.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img2.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img3.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img4.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img5.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img6.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img7.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img8.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img9.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img10.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img11.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img12.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img13.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img14.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img15.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img16.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img17.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img18.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img19.jpg') }}" alt="img" draggable="false">
                <img src="{{ asset('image/img20.jpg') }}" alt="img" draggable="false">
            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
    </div>
</div>

<div class="text">
    <div class="icon">
        <i class="fa-solid fa-hand-sparkles"></i>
        <p class="titre">
            Découvrez mes prestations<br>
        </p>
        <p>
            Explorez ma gamme complète de prestations pour trouver le service qui correspond à vos envies. De la pose d'ongles en gel aux soins des cuticules en passant par les décorations personnalisées, je vous offre des solutions sur mesure pour sublimer vos ongles. <br>
        </p>
    </div>
    <div class="icon">
        <i class="fa-solid fa-star"></i>
        <p class="titre">
            Qualité et hygiène<br>
        </p>
        <p>
            Votre satisfaction et votre sécurité sont mes priorités absolues. J'utilise uniquement des produits de qualité supérieure et je respecte les normes d'hygiène les plus strictes. Chaque outil et équipement est soigneusement désinfecté pour vous offrir une expérience sans compromis.<br>
        </p>

    </div>
    <div class="icon">
        <i class="fa-solid fa-address-book"></i>
        <p class="titre">
            Contactez-moi<br>
        </p>
        <p>
            Si vous avez des questions ou besoin de plus d'informations, n'hésitez pas à me contacter. Je suis là pour vous aider et répondre à toutes vos demandes. Vous pouvez me joindre par téléphone, sur Instagram ou venir directement à l'institut.<br>
        </p>
    </div>
</div>

    <p class="paragraphe">
        J'ai hâte de vous accueillir dans mon institut de prothésiste ongulaire et de vous offrir une expérience de beauté personnalisée.
        <br> Prenez rendez-vous dès aujourd'hui et découvrez l'art de la beauté des mains et des pieds à son meilleur !
    </p>

@endsection