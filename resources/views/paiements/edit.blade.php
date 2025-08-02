@extends('layouts.app')

@section('content')
<h1>Modifier le Paiement</h1>

<form action="{{ route('paiements.update', $paiement->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="montant">Montant (FCFA) :</label>
    <input type="number" name="montant" value="{{ $paiement->montant }}" required><br>

    <label for="date">Date :</label>
    <input type="date" name="date" value="{{ $paiement->date }}" required><br>

    <label for="eleve_id">Élève :</label>
    <select name="eleve_id">
        @foreach ($eleves as $eleve)
        <option value="{{ $eleve->id }}" {{ $paiement->eleve_id == $eleve->id ? 'selected' : '' }}>
            {{ $eleve->user->prenom }} {{ $eleve->user->nom }}
        </option>
        @endforeach
    </select><br>

    <button type="submit">Mettre à jour</button>
</form>
@endsection