@extends('layouts.app')

@section('content')
<h1>Modifier le moniteur</h1>

<form action="{{ route('moniteurs.update', $moniteur->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="user_id">Utilisateur :</label>
    <select name="user_id">
        @foreach ($users as $user)
        <option value="{{ $user->id }}" {{ $moniteur->user_id == $user->id ? 'selected' : '' }}>
            {{ $user->nom }} {{ $user->prenom }}
        </option>
        @endforeach
    </select><br>

    <label for="disponibilite">Disponible ?</label>
    <select name="disponibilite">
        <option value="1" {{ $moniteur->disponibilite ? 'selected' : '' }}>Oui</option>
        <option value="0" {{ !$moniteur->disponibilite ? 'selected' : '' }}>Non</option>
    </select><br>

    <button type="submit">Modifier</button>
</form>
@endsection