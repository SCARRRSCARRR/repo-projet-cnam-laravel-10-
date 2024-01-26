@extends ('base')

@php
$heures = [
  // crénaux du midi
  '12:00:00' => '12:00',
  '12:30:00' => '12:30',
  '13:00:00' => '13:00',
  '13:30:00' => '13:30',

  //crénaux du soir
  '20:00:00' => '20:00',
  '20:30:00' => '20:30',
  '21:00:00' => '21:00',
  '21:30:00' => '21:30',
];
@endphp

@section ('title', 'reservation')

@section ('content')
<section>
    <h2>reservation</h2>

<form action="{{ route('main.reservation.store') }}" method="post">
      @csrf
      <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" min="3" max="50" 
        value="{{ old('nom') }}"not-required>
        @error('nom')
         <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
      </div>
      <div>
        <label for="couverts">Nombre de couverts</label>
        <input type="number" name="couverts" id="couverts" min="1" max="16"
        value="{{ old('couverts') }}"not-required>
        @error('couverts')
         <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
      </div>
        {{--<input type="number" name="couverts" id="couverts" min="1" max="16" not-required>--}}
        <div>
          <label for="heure">Heure</label>
             <select name="heure" id="heure" not-required>
             <option value=""></option>
            @foreach ($heures as $heure => $label)
              <option value="{{ $heure }}" {{ old('heure') == 
              $heure ? 'selected' : '' }}>{{ $label }}</option>  {{-- ?et : c'est un opérateur ternaire, condition ? afficher si c'est vrai
               : truc à afficher si c'est faux on pourrait faire--}}
            @endforeach
        </select>
        @error('heure')
         <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
      </div>
      <div>
        <label for="jour">Jour</label>
        <input type="date" name="jour" id="jour"
        value="{{ old('jour') }}" not-required>
        @error('jour')
         <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
      </div>
      <div>
        <label for="telephone">Numéro de téléphone</label>
        <input type="phone" name="telephone" id="telephone"
        value="{{ old('telephone') }}" not-required>
        @error('telephone')
         <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
      </div>
      <div>
        <label for="commentaires">Commentaires</label>
        <textarea name="commentaires" id="nom" cols="30" rows="10">
        {{ old('commentaires') }}></textarea>
        @error('commentaires')
         <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
      </div>
      <div>
        <button type="submit">Réserver</button>
      </div>
</form>
</section>
@endsection
