@extends('layouts.app')

@section('content')
<h1>Modifier le véhicule</h1>

<form action="{{ route('vehicules.update', $vehicule->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="marque">Marque :</label>
    <input type="text" name="marque" value="{{ $vehicule->marque }}"><br>

    <label for="modele">Modèle :</label>
    <input type="text" name="modele" value="{{ $vehicule->modele }}"><br>

    <label for="immatriculation">Immatriculation :</label>
    <input type="text" name="immatriculation" value="{{ $vehicule->immatriculation }}"><br>

    <label for="type">Type :</label>
    <input type="text" name="type" value="{{ $vehicule->type }}"><br>

    <label for="annee">Année :</label>
    <input type="number" name="annee" value="{{ $vehicule->annee }}"><br>

    <label for="statut">Statut :</label>
    <input type="text" name="statut" value="{{ $vehicule->statut }}"><br>

    <button type="submit">Mettre à jour</button>
</form>
@endsection