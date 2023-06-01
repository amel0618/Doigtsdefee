<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
            <h1>Inscription</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="auth-form-group">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
                </div>
                <div class="auth-form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="auth-form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="auth-form-group">
                    <label for="password_confirmation">Confirmez le mot de passe :</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit">S'inscrire</button>
            </form>
            <p>Déjà inscrit ? <a href="{{ route('login') }}">Se connecter</a></p>
        </div>
    </div>
</body>

</html>