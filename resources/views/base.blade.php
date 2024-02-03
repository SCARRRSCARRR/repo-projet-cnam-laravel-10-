<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="fond">
        <a href="#" class="logo">
        <span>OCNAMO</span> DELUXE</a>
        
    <div class="menuToggle" onclick="toggleMenu();"></div>
        <nav>
           <ul>
                <li>
                   <a href= "{{ route('main.home') }}">Accueil</a>
                </li>
                <li>
                   <a href= "{{ route('main.menu') }}">Menu</a>
                </li>
                <li>
                    <a href="{{ route('main.reservation')}}">Réservation</a>
                </li>
                <li>
                    <a href="{{ route('main.contact')}}">Contact</a>
                </li>
            </ul>

        </nav>
    </header>
    @yield('content')
    <footer>
        <!--TODO-->
    </footer>  
</body>
</html>