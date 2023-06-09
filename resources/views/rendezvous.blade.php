@extends('layout.layouthf')

@section('content')


<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/rendezvous.css') }}">
<html>

<head>
    <title>Rendez-vous</title>
</head>

<body>
    <h1>Prise de rendez-vous</h1>
    <div class="background-rdv" style="background-image: url('{{ asset('../image/photo1.jpg') }}');">

    <form class="rdv" action="/reservation" method="POST">
        @csrf
        <div class="gauche">
            <div class="nom">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required><br>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required><br>
            </div>       
            <div class="mail">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required><br>
            </div>
        </div>
        <div class="date">
        <label for="naissance">Date de naissance :</label>
            <input type="date" id="naissance" name="naissance" required><br>
            <label for="date">Date du rendez-vous:</label>
            <input type="date" id="date" name="date" required><br>
            <label for="heure">Heure du rendez-vous:</label>
            <input type="time" id="heure" name="heure" required><br>
        </div>
    </form>
    </div>
    <div class="bouton">
            <input type="submit" value="Réserver">
    </div>
    
</body>

</html>
@endsection