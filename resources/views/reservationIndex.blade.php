@extends ('base')

@section ('title', 'liste des reservations')

@section ('content')

    @foreach ($reservations as $reservation)
       <a href="{{ route('admin.reservation.show', ['id' => $reservation->id]) }}">{{ $reservation->nom}}</a>
    @endforeach
@endsection