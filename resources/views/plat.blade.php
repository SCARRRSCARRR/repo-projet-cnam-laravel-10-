@extends ('base')

@section ('title', 'Plat')

@section ('content')
<section>
    <img src="{{ asset('image/'.$plat->fichier) }}" alt="{{ $plat->nom }}" />
    <h2>{{ $plat->nom }}</h2>
    <span class="prix">{{ $plat->prix }} eur</span>
    <ul class="etik">
        @foreach ($plat->etiquettes() as $etiquette)
             <li>{{ $etiquette->nom }}</li>
         @endforeach
    </ul>
</section>
@endsection