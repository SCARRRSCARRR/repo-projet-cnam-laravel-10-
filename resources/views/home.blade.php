@extends('base')

@section('title', 'Accueil')

@section('content')
    </header>
    <div class="banniere">
        <div class=contenu>
            <h1>OCNAMO</h1>
            <!--slider image-->
            </header>
            <h2><i>Pour voyager mangez Camerounais</h2></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
            </p>
            <a href="http://127.0.0.1:8000/menu" class="boutton1">Notre Menu</a>
            <a href="http://127.0.0.1:8000/reservation/create" class="boutton2">Reservation</a>
        </div>
        <div class="slider">
            <div class="slides">
                <div class="slide"><img height="550" width="550" src="/Image/img1.jpg"></div>
                <div class="slide"><img height="550" width="550" src="/Image/img2.jpg"></div>
                <div class="slide"><img height="550" width="600" src="/Image/img3.jpg"></div>
            </div>
        </div>
    </div>


    <ul>
        @foreach ($actus as $actu)
            <li>{{ $actu->contenu }} ({{ $actu->date_publication }})</li>
        @endforeach
    </ul>

    <ul class="ambiance">
        @foreach ($photoAmbiances as $photoAmbiance)
            <li>
                <img src="{{ asset('image/' . $photoAmbiance->fichier) }}" alt="ff">
                <p>{{ $photoAmbiance->description }}</p>
            </li>
        @endforeach

    </ul>
@endsection
