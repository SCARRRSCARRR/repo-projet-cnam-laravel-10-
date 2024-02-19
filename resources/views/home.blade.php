@extends('base')

@section('title', 'Accueil')

@section('content')
    </header>
    <div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
    </div>
    <div class="banniere">
        <div class=contenu>
            <h1><i>OCNAMO</h1></i>
            <!--slider image-->
            </header>
            <h2><i><span>Pour <span> <span> voyager <span>mangez </span> <span>Camerounais</span></h2></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
            </p>
            <a href="http://127.0.0.1:8000/menu" class="btn-first boutton1">Notre Menu</a>
            <a href="http://127.0.0.1:8000/reservation/create" class="btn-first boutton2">Reservation</a>
        </div>
        <div class="slider">
            <div class="slides">
                <div class="slide"><img height="550" width="550" src="/Image/img1.jpg"></div>
                <div class="slide"><img height="550" width="550" src="/Image/img2.jpg"></div>
                <div class="slide"><img height="550" width="600" src="/Image/img3.jpg"></div>
            </div>
        </div>
    </div>


    <ul class="actus">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="app.js"></script>
@endsection
