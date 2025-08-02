@extends('layouts.app')

@section('content')
<h1>Modifier l'examen</h1>

<form action="{{ route('examens.update', $examen->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="question">Question :</label>
    <input type="text" name="question" value="{{ $examen->question }}"><br>

    <label for="option">Options :</label>
    <input type="text" name="option" value="{{ $examen->option }}"><br>

    <label for="bonne_reponse">Bonne réponse :</label>
    <input type="text" name="bonne_reponse" value="{{ $examen->bonne_reponse }}"><br>

    <label for="cours_id">Cours associé :</label>
    <select name="cours_id">
        @foreach ($cours as $c)
        <option value="{{ $c->id }}" {{ $examen->cours_id == $c->id ? 'selected' : '' }}>{{ $c->titre }}</option>
        @endforeach
    </select><br>

    <button type="submit">Mettre à jour</button>
</form>
@endsection