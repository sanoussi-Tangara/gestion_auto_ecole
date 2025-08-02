@extends('layouts.app')

@section('content')
<h1>Détails de l'élève</h1>

<p><strong>Nom :</strong> {{ $eleve->user->nom }}</p>
<p><strong>Prénom :</strong> {{ $eleve->user->prenom }}</p>
<p><strong>Niveau :</strong> {{ $eleve->niveau }}</p>
<p><strong>Progression :</strong> {{ $eleve->progression }}%</p>
<p><strong>Date d'inscription :</strong> {{ $eleve->date_inscription }}</p>

<a href="{{ route('eleves.edit', $eleve->id) }}">Modifier</a>
<a href="{{ route('eleves.index') }}">Retour à la liste</a>
@endsection