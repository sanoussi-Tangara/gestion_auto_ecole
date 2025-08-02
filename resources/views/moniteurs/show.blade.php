@extends('layouts.app')

@section('content')
<h1>Détails du moniteur</h1>

<p><strong>Nom :</strong> {{ $moniteur->user->nom }}</p>
<p><strong>Prénom :</strong> {{ $moniteur->user->prenom }}</p>
<p><strong>Disponibilité :</strong> {{ $moniteur->disponibilite ? 'Oui' : 'Non' }}</p>

<a href="{{ route('moniteurs.edit', $moniteur->id) }}">Modifier</a>
<a href="{{ route('moniteurs.index') }}">Retour à la liste</a>
@endsection