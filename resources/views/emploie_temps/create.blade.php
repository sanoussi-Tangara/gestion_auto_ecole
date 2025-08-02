@extends('layouts.app')

@section('content')
<h1>Créer un emploi du temps</h1>

<form action="{{ route('emploie_temps.store') }}" method="POST">
    @csrf

    <label for="eleve_id">Élève :</label>
    <select name="eleve_id">
        @foreach ($eleves as $eleve)
        <option value="{{ $eleve->id }}">{{ $eleve->user->nom }}</option>
        @endforeach
    </select><br>

    <label for="moniteur_id">Moniteur :</label>
    <select name="moniteur_id">
        @foreach ($moniteurs as $moniteur)
        <option value="{{ $moniteur->id }}">{{ $moniteur->user->nom }}</option>
        @endforeach
    </select><br>

    <label for="type">Type :</label>
    <input type="text" name="type"><br>

    <label for="date_heure_debut">Date/Heure Début :</label>
    <input type="datetime-local" name="date_heure_debut"><br>

    <label for="date_heure_fin">Date/Heure Fin :</label>
    <input type="datetime-local" name="date_heure_fin"><br>

    <button type="submit">Créer</button>
</form>
@endsection