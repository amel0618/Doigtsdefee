@extends('layout.layouthf')

@section('content')


<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/apropos.css') }}">
<html>

<head>
    <title>Rendez-vous</title>
</head>

<body>
    <h1>L'institut</h1>
    <div class="moi">
        Bienvenue dans mon institut de prothésiste ongulaire !
        <br>
        Je suis passionnée par la beauté des mains et des ongles, et je suis heureuse de vous accueillir dans mon institut dédié à cet art. En tant que prothésiste ongulaire expérimentée, je mets tout en œuvre pour vous offrir des services de haute qualité dans un cadre convivial et accueillant.
        <br>
    </div>
    <div class="adresse">
        <h2>Où nous trouver :</h2>
        <p><img src="{{ asset('image/adresse.png') }}" alt="adresse"></p>
    </div>
    <div class="horaires">
        <h2>Horaires de l'institut</h2>
        <p>L'institut est ouvert :</p>
        <ul>
            <li>Du Lundi au Vendredi : de 9h à 19h</li>
            <li>Les deux premières semaines du mois : ouverture le samedi de 9h à 19h</li>
            <li>Les deux dernières semaines du mois : fermeture le samedi</li>
        </ul>
    </div>

    </form>
</body>

</html>
@endsection