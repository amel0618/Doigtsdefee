<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="auth-body">
    <div class="auth-main-container">
        <div class="auth-logo-container">
            <a href="{{ route('home') }}">
                <img src="{{ asset('image/photo0.png') }}" alt="Logo">
            </a>
        </div>
        <div class="auth-container">
            <h1>Connexion</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="auth-form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="auth-form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Se connecter</button>
                <p>Pas encore inscrit ? <a href="{{ route('register') }}">S'inscrire</a></p>

            </form>
        </div>
    </div>
</body>

</html>