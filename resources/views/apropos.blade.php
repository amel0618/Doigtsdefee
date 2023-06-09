@extends('layout.layouthf')

@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')


<!DOCTYPE html>
<html>

<head>
    <title>A propos</title>
</head>

<body>
    <h1>L'institut</h1>
    <div class="text-apropos">
        <div class="icon-apropos">
            <i class="fa-solid fa-house"></i>
            <div class="titre-apropos">
                Bienvenue dans mon institut de prothésiste ongulaire !
            </div>
            <p>
                Je suis passionnée par la beauté des mains et des ongles,
                <br>
                et je suis heureuse de vous accueillir dans mon institut dédié à cet art.
                <br>
                En tant que prothésiste ongulaire expérimentée,
                <br>
                je mets tout en œuvre pour vous offrir des services de haute qualité
                <br>
                dans un cadre convivial et accueillant.
                <br>
            </p>
            <div class="icon-apropos">
                <i class="fa-solid fa-location-dot"></i>
                <div class="titre-apropos">
                    Où nous trouver :
                </div>
                <p>
                    Doigts de fée, proyhésiste ongulaire
                    <br>
                    2 bis rue de l'abreuvoir
                    ISSOUDUN - 36100
                    <br>
                    Téléphone : 09 88 55 50 11
                </p>
            </div>
            <div class="icon-apropos">
                <i class="fa-solid fa-clock"></i>
                <div class="titre-apropos">
                    Horaires de l'institut :
                </div>
                <p>
                    L'institut est ouvert :
                    Du Lundi au Vendredi et les deux premiers samedis du mois: de 9h à 19h
                </p>
            </div>
        </div>
    </div>
</body>

</html>
@endsection