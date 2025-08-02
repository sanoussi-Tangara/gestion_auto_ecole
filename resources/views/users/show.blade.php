@extends('layouts.app')

@section('content')
<h1>Détails de l'utilisateur</h1>

<p><strong>Nom :</strong> {{ $user->nom }}</p>
<p><strong>Prénom :</strong> {{ $user->prenom }}</p>
<p><strong>Email :</strong> {{ $user->email }}</p>
<p><strong>Téléphone :</strong> {{ $user->telephone }}</p>
<p><strong>Adresse :</strong> {{ $user->adresse }}</p>
<p><strong>Rôle :</strong> {{ $user->role }}</p>

<a href="{{ route('users.edit', $user->id) }}">Modifier</a>
<a href="{{ route('users.index') }}">Retour à la liste</a>
@endsection