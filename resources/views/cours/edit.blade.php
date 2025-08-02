@extends('layouts.app')

@section('content')
<h1>Modifier le cours</h1>

<form action="{{ route('cours.update', $cour->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="titre">Titre :</label>
    <input type="text" name="titre" value="{{ $cour->titre }}"><br>

    <label for="contenu">Contenu :</label>
    <textarea name="contenu">{{ $cour->contenu }}</textarea><br>

    <label for="type">Type :</label>
    <input type="text" name="type" value="{{ $cour->type }}"><br>

    <label for="trajet">Trajet :</label>
    <input type="text" name="trajet" value="{{ $cour->trajet }}"><br>

    <label for="eleve_id">Élève :</label>
    <select name="eleve_id">
        @foreach ($eleves as $eleve)
        <option value="{{ $eleve->id }}" {{ $cour->eleve_id == $eleve->id ? 'selected' : '' }}>
            {{ $eleve->user->nom }}
        </option>
        @endforeach
    </select><br>

    <label for="moniteur_id">Moniteur :</label>
    <select name="moniteur_id">
        @foreach ($moniteurs as $moniteur)
        <option value="{{ $moniteur->id }}" {{ $cour->moniteur_id == $moniteur->id ? 'selected' : '' }}>
            {{ $moniteur->user->nom }}
        </option>
        @endforeach
    </select><br>

    <label for="vehicule_id">Véhicule :</label>
    <select name="vehicule_id">
        @foreach ($vehicules as $vehicule)
        <option value="{{ $vehicule->id }}" {{ $cour->vehicule_id == $vehicule->id ? 'selected' : '' }}>
            {{ $vehicule->immatriculation }}
        </option>
        @endforeach
    </select><br>

    <button type="submit">Mettre à jour</button>
</form>
@endsection