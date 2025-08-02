@extends('layouts.app')

@section('content')
<h1>Modifier un emploi du temps</h1>

<form action="{{ route('emploie_temps.update', $emploi->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="eleve_id">Élève :</label>
    <select name="eleve_id">
        @foreach ($eleves as $eleve)
        <option value="{{ $eleve->id }}" {{ $emploi->eleve_id == $eleve->id ? 'selected' : '' }}>
            {{ $eleve->user->nom }}
        </option>
        @endforeach
    </select><br>

    <label for="moniteur_id">Moniteur :</label>
    <select name="moniteur_id">
        @foreach ($moniteurs as $moniteur)
        <option value="{{ $moniteur->id }}" {{ $emploi->moniteur_id == $moniteur->id ? 'selected' : '' }}>
            {{ $moniteur->user->nom }}
        </option>
        @endforeach
    </select><br>

    <label for="type">Type :</label>
    <input type="text" name="type" value="{{ $emploi->type }}"><br>

    <label for="date_heure_debut">Date/Heure Début :</label>
    <input type="datetime-local" name="date_heure_debut" value="{{ $emploi->date_heure_debut }}"><br>

    <label for="date_heure_fin">Date/Heure Fin :</label>
    <input type="datetime-local" name="date_heure_fin" value="{{ $emploi->date_heure_fin }}"><br>

    <button type="submit">Mettre à jour</button>
</form>
@endsection