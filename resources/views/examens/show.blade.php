@extends('layouts.app')

@section('content')
<h1>Détails de l'examen</h1>

<p><strong>Question :</strong> {{ $examen->question }}</p>
<p><strong>Options :</strong> {{ $examen->option }}</p>
<p><strong>Bonne réponse :</strong> {{ $examen->bonne_reponse }}</p>
<p><strong>Cours :</strong> {{ $examen->cours->titre }}</p>

<a href="{{ route('examens.edit', $examen->id) }}">Modifier</a> |
<a href="{{ route('examens.index') }}">Retour à la liste</a>
@endsection