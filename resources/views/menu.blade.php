@extends ('base')

@section ('title', 'Menu')

@section ('content')
    <section class="menu">
        <h2>Menu</h2>
        <hr>
        @foreach ($categories as $categorie)
        <div>
            <h3 class="h3"><u>{{ $categorie->nom }}</h3></u>
            <ul class="plats">
                @foreach ($categorie->plats() as $plat)
                <li>
                    <a href="{{ route('main.plat', ['id' => $plat->id]) }}"><img class= "platimg" src="{{ asset('image/'.$plat->fichier) }}" 
                    alt="{{ $plat->nom }}" /></a>
                    <a href="{{ route('main.plat', ['id' => $plat->id]) }}">
                    <h4>{{ $plat->nom }}</h4></a>
                    <span class="prix">{{ $plat->prix }} eur</span>
                    <ul>
                         @foreach ($plat->etiquettes() as $etiquette)
                              <li>{{ $etiquette->nom }}</li>
                         @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </section>
@endsection