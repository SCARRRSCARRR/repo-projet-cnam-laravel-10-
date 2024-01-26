@extends('base')

@section('title','Accueil')

@section('content')
<h1>Hello Laravel!</h1>

<ul>
    @foreach ($actus as $actu)
         <li>{{ $actu->contenu}} ({{ $actu->date_publication}})</li>
    @endforeach
</ul>

<ul class="ambiance">
    @foreach ($photoAmbiances as $photoAmbiance)
         <li>
            <img src="{{ asset('image/'.$photoAmbiance->fichier )}}" alt="ff">
            <p>{{ $photoAmbiance->description }}</p>
        </li>
    @endforeach
</ul>
@endsection
       


