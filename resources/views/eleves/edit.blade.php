@extends('layouts.app')

@section('content')
<h1>Modifier l'élève</h1>

<form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="user_id">Utilisateur :</label>
    <select name="user_id">
        @foreach ($users as $user)
        <option value="{{ $user->id }}" {{ $eleve->user_id == $user->id ? 'selected' : '' }}>
            {{ $user->nom }} {{ $user->prenom }}
        </option>
        @endforeach
    </select><br>

    <input type="text" name="niveau" value="{{ $eleve->niveau }}"><br>
    <input type="number" name="progression" value="{{ $eleve->progression }}"><br>
    <input type="date" name="date_inscription" value="{{ $eleve->date_inscription }}"><br>

    <button type="submit">Modifier</button>
</form>
@endsection