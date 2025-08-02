@extends('layouts.app')

@section('content')
<h1>Détail de l'emploi du temps</h1>

<p><strong>Élève :</strong> {{ $emploi->eleve->user->nom }}</p>
<p><strong>Moniteur :</strong> {{ $emploi->moniteur->user->nom }}</p>
<p><strong>Type :</strong> {{ $emploi->type }}</p>
<p><strong>Début :</strong> {{ $emploi->date_heure_debut }}</p>
<p><strong>Fin :</strong> {{ $emploi->date_heure_fin }}</p>

<a href="{{ route('emploie_temps.edit', $emploi->id) }}">Modifier</a> |
<a href="{{ route('emploie_temps.index') }}">Retour</a>
@endsection