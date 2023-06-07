<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="container">
        <h1>Inscription</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="first-name">Prénom :</label>
                <input type="text" id="first-name" name="first-name" value="{{ old('first-name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmez le mot de passe :</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
    <p>Déjà inscrit ? <a href="{{ route('login') }}">Se connecter</a></p>
</body>

</html>
