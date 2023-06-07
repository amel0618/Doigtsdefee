@extends('layout.layouthf')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<h1>Accueil</h1>
<p class="presentation">
    Bienvenue chez Doigts de fée, l'onglerie où la magie opère pour révéler toute la beauté de vos mains et de vos pieds.
    En choisissant mon établissement, vous bénéficiez d'une expérience exclusive où chaque détail est soigneusement pris en compte. Que vous recherchiez une manucure raffinée, une pédicure relaxante ou une gamme complète de prestations pour prendre soin de vos mains et de vos pieds, vous pouvez compter sur mon expertise et mon savoir-faire.
    Je m'engage à vous offrir un service attentif, professionnel et sur mesure, en accordant une attention particulière à vos besoins et préférences.
    Réservez votre rendez-vous dès aujourd'hui et découvrez par vous-même pourquoi cette onglerie est synonyme de qualité et de satisfaction. Je suis impatiente de vous accueillir chez Doigts de fée.
</p>
    <div class="body_carousel">
    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <div class="carousel">
            <img src="{{ asset('image/img1.jpg') }}" alt="img" draggable="false">
            <img src="{{ asset('image/img2.jpg') }}" alt="img" draggable="false">
            <img src="{{ asset('image/img3.jpg') }}" alt="img" draggable="false">
            <img src="{{ asset('image/img4.jpg') }}" alt="img" draggable="false">
            <img src="{{ asset('image/img5.jpg') }}" alt="img" draggable="false">
            <img src="{{ asset('image/img1.jpg') }}" alt="img" draggable="false">
            <img src="{{ asset('image/img2.jpg') }}" alt="img" draggable="false">
            <img src="{{ asset('image/img3.jpg') }}" alt="img" draggable="false">
            <img src="{{ asset('image/img4.jpg') }}" alt="img" draggable="false">
            <img src="{{ asset('image/img5.jpg') }}" alt="img" draggable="false">
        </div>
        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
</div>
<script>
    
const carousel = document.querySelector(".carousel");
firstImg = carousel.querySelectorAll("img")[0];/*Pour les flèches */
arrowIcons = document.querySelectorAll(".wrapper i");/*Pour les flèches */
let isDragStart = false, prevPageX, prevScrollLeft;
const showHideIcons = () => {
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth;
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}
arrowIcons.forEach(icon => {/*Pour les flèches */
    let firstImgWidth = firstImg.clientWidth + 14; /*avoir la 1ere img & ajouter margin 14 comme css (pour les fleches) */
    icon.addEventListener("click", () => {/*Pour les flèches */
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;/*Pour les flèches */
        setTimeout(() => showHideIcons(), 60); // appel showhide apres 60s
    });/*Pour les flèches */
});/*Pour les flèches */
const dragStart = (e) => {
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;/*e.touched = mobile*/
    prevScrollLeft = carousel.scrollLeft;
}
const dragging = (e) => {
    // scroll images/carousel à gauche suivant le pointer de la souris
    if (!isDragStart) return;
    e.preventDefault();
    carousel.classList.add("dragging");
    let positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}
const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");
}
carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);/*touch = mobile*/
carousel.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);
carousel.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchup", dragStop);
carousel.addEventListener("mouseleave", dragStop);
carousel.addEventListener("touchend", dragStop);
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