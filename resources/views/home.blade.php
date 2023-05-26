@extends('layout.layouthf')

    @section('content')


<!DOCTYPE html>
<html>
<head>
    <title>Page d'accueil</title>
</head>
<body>
    <h1>Bienvenue sur notre site de prise de rendez-vous en onglerie !</h1>

    <p>Vous pouvez réserver un rendez-vous en utilisant notre formulaire de réservation.</p>

    <form action="/reservation" method="POST">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="date">Date :</label>
        <input type="date" id="date" name="date" required><br>

        <label for="heure">Heure :</label>
        <input type="time" id="heure" name="heure" required><br>

        <input type="submit" value="Réserver">
    </form>
</body>
</html>
@endsection
