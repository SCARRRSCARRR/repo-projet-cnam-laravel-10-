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
            <ul class=navbar>
                <table class="header">
                     <td><a href= "{{ route('main.home') }}">Accueil</a></td>

                     <td><a href= "{{ route('main.aproposdenous') }}">A Propos de nous</a></td>

                     <td><a href= "{{ route('main.menu') }}">Menu</a></td>

                     <td><a href="{{ route('main.reservation') }}">Réservation</a></td>

                     <td><a href="{{ route('main.contact') }}">Contact</a></td>
                </table>
            </ul>
    </header>
 @yield('content')
    <footer>
        <!--TODO-->
        
    </footer>
</body>

</html>
