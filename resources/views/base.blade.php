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
        </div>
            <ul class=navbar>
                <table class="header" width ="100%">
                     <td><a href= "{{ route('main.home') }}">Accueil</a></td>

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
