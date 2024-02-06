@extends ('base')

@section ('title', 'liste des reservations')

@section ('content')

    @foreach ($reservations as $reservation)
       <h3>{{ $reservation->nom }}</h3>
    @endforeach
@endsection