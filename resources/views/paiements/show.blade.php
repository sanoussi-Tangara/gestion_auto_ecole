@extends('layouts.app')

@section('content')
<h1>Détails du Paiement</h1>

<p><strong>Montant :</strong> {{ $paiement->montant }} FCFA</p>
<p><strong>Date :</strong> {{ $paiement->date }}</p>
<p><strong>Élève :</strong> {{ $paiement->eleve->user->prenom }} {{ $paiement->eleve->user->nom }}</p>

<a href="{{ route('paiements.edit', $paiement->id) }}">Modifier</a> |
<a href="{{ route('paiements.index') }}">Retour à la liste</a>
@endsection