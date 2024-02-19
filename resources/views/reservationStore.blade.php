@extends ('base')

@section ('title', 'Confirmation')

@section ('content')
<h2>Confirmation</h2>



<p class="p1">Votre réservation à bien été pris en compte</p>

<ul class="ul1">
    <li> {{ $reservation->nom }} </li>
    <li> {{ $reservation->couverts }} </li>
    {{-- convertit une date au format y-m-d en date d/m/Y --}}
    <li> {{ date('d/m/Y', strtotime($reservation->jour)) }} </li>
    <li> {{ $reservation->heure }} </li>
    <li> {{ $reservation->telephone }} </li>
     @if ( $reservation->commentaires)
    <li> {{ $reservation->commentaires }}</li>
    @endif    
</ul>
</div>
@endsection