<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doigts de fée</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css%22%3E">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <script src="https://kit.fontawesome.com/22d6814c5f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
</head>

<body>


    <header id="siteHeader">
        <div class=""></div>
        <nav>
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('image/photo0.png') }}" alt="Logo">
                </a>
            </div>
            <!--Menu Deroulant Responsive-->
            <div class="dropdown">
                <div class="bars"><i class="fa-solid fa-bars"></i></div>
                <div class="option">
                    <a class="link" href="{{ url('apropos') }}">A propos</a>
                    <a class="link" href="{{ route('prestation') }}">Prestations</a>
                    <a class="link" href="{{ url('rendezvous') }}">Rendez-vous</a>
                </div>
            </div>

            <script>
                let dropdown = document.querySelector('.dropdown');
                dropdown.onclick = function() {
                    dropdown.classList.toggle('active');
                }
            </script>
            <li><a href="{{ url('apropos') }}">A propos</a></li>
            <li><a href="{{ url('prestation') }}">Prestations</a></li>
            <li><a href="{{ url('/rendezvous') }}">Rendez-vous</a></li>
            <div class="auth">
                @if (Auth::check())
                <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Déconnexion</button>
                </form>
                @else
                <a href="{{ route('login') }}"><i class="fa-regular fa-user"></i></a>
                @endif
            </div>
        </nav>

    </header>

    <main>
        @yield('content')
        <section id="popup" hidden>
        <p>
            Instagram :
            <a href="https://www.instagram.com/_doigts_fee/" target="blank"><i class="fa-brands fa-instagram"></i></a>
           <br>
            Téléphone : 09 88 55 50 11
        </p>
    <button id="closePopup">Fermer</button>
</section>

    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; {{ date('Y') }} Doigts de fée. Tous droits réservés.</p>
            <ul class="footer-links">
            <a href="https://www.instagram.com/_doigts_fee/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <li><a href="{{ url('/mentions') }}" target="_blank">Mentions légales</a></li>
                <li><a href="#" id="openPopup">Contact</a></li>
                <li><a href="{{ url('/politique') }}" target="_blank">Politique de confidentialité</a></li>
            </ul>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" defer></script>
    <script src="{{ asset('js/layout.js') }}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var openPopupButton = document.getElementById('openPopup');
        var closePopupButton = document.getElementById('closePopup');
        var popupSection = document.getElementById('popup');

        openPopupButton.addEventListener('click', function() {
            popupSection.style.display = 'block';
        });

        closePopupButton.addEventListener('click', function() {
            popupSection.style.display = 'none';
        });
    });
</script>

</body>

</html>