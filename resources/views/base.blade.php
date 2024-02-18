<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div class="fond">
            <a href="#" class="logo">
                <img class="log" src="/Image/3.jpg" alt=""></a>
            <img class="etoile" src="/Image/etoiles.png" alt="">
            <img class="etoiles" src="/Image/etoiles.png" alt="">
        </div>
        <ul>
            <table class="header">
                <td><a href= "{{ route('main.home') }}">Accueil</a></td>

                <td><a href= "{{ route('main.menu') }}">Menu</a></td>

                <td><a href="{{ route('main.reservation') }}">Réservation</a></td>

                <td><a href="{{ route('main.contact') }}">Contact</a></td>

                <td><a href= "{{ route('main.aproposdenous') }}">A Propos</a></td>

            </table>
        </ul>
    </header>
    @yield('content')
<footer>
       
        <div class="footer">
            <hr>
            <div class="icones_social">
                <a href="#" class="social">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="#" class="social">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="#" class="social">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </div>
            <hr>
            <div class="div2">
                <div>
                    <h3>Nos services</h3>
                    <ul>
                        <a href="#">Accueil</a>
                        <a href="http://127.0.0.1:8000/menu/">Nos produits</a>
                        
                    </ul>
                </div>
                <div>
                    <h3>Restaurants</h3>
                    <ul>
                        <a href="#">Paris (en construction)</a>
                        <a href="#">Marseille</a>
                       
                    </ul>
                </div>
                <div>
                    <h3>En savoir plus</h3>
                    <ul>
                        <a href="http://127.0.0.1:8000/contact">Horaires</a>
                        <a href="#">Protection des données</a>
                    
                    </ul>
                </div>
            </div>
        <hr>
        <div class="div3">
            <p> pour votre santé mangez au moins 5 fruits et légumes par jour</p>
            <p>&copy;2024 BEDU POSTIGA dev</p>
        </div>
        
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
