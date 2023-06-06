@extends('layout.layouthf')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<h1>Accueil</h1>

<div class="carousel-container">
        <i id='prev-button' class="fa fa-chevron-left chevron"></i>
        <i id='next-button' class="fa fa-chevron-right chevron"></i>
        <div class='live-dots' id='live-dots'>
            
        </div>
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
    
<script>
function scrolll() {
    var slide = document.querySelector(".carousel-slide");
    var visibleImages = slide.getElementsByClassName("visible");
    
    if (visibleImages.length > 3) {
        visibleImages[0].classList.remove("visible");
        visibleImages[0].classList.add("hidden");
        
        visibleImages[3].classList.remove("hidden");
        visibleImages[3].classList.add("visible");
    }
    
    slide.scrollBy(-350, 0);
}


function scrollr() {
    var slide = document.querySelector(".carousel-slide");
    var visibleImages = slide.getElementsByClassName("visible");
    
    if (visibleImages.length > 3) {
        visibleImages[visibleImages.length - 1].classList.remove("visible");
        visibleImages[visibleImages.length - 1].classList.add("hidden");
        
        visibleImages[visibleImages.length - 4].classList.remove("hidden");
        visibleImages[visibleImages.length - 4].classList.add("visible");
    }
    
    slide.scrollBy(350, 0);
}


</script>

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
