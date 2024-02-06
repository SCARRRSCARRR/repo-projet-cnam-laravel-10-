@extends ('base')

@section ('title', 'liste des reservations')

@section ('content')
<ul>
    <li> {{ $reservation->couverts }} </li>
    {{-- convertit une date au format y-m-d en date d/m/Y --}}
    <li> {{ date('d/m/Y', strtotime($reservation->jour)) }} </li>
    <li> {{ $reservation->heure }} </li>
    <li> {{ $reservation->telephone }} </li>
     @if ( $reservation->commentaires)
    <li> {{ $reservation->commentaires }}</li>
    @endif    
</ul>
@endsection