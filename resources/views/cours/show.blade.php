@extends('layouts.app')

@section('content')
<h1>Détail du cours</h1>

<p><strong>Titre :</strong> {{ $cour->titre }}</p>
<p><strong>Contenu :</strong> {{ $cour->contenu }}</p>
<p><strong>Type :</strong> {{ $cour->type }}</p>
<p><strong>Trajet :</strong> {{ $cour->trajet }}</p>
<p><strong>Élève :</strong> {{ $cour->eleve->user->nom }}</p>
<p><strong>Moniteur :</strong> {{ $cour->moniteur->user->nom }}</p>
<p><strong>Véhicule :</strong> {{ $cour->vehicule->immatriculation }}</p>

<a href="{{ route('cours.edit', $cour->id) }}">Modifier</a> |
<a href="{{ route('cours.index') }}">Retour</a>
@endsection