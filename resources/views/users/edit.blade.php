@extends('layouts.app')

@section('content')
<h1>Modifier l'utilisateur</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nom" value="{{ $user->nom }}"><br>
    <input type="text" name="prenom" value="{{ $user->prenom }}"><br>
    <input type="email" name="email" value="{{ $user->email }}"><br>
    <input type="text" name="telephone" value="{{ $user->telephone }}"><br>
    <input type="text" name="adresse" value="{{ $user->adresse }}"><br>
    <select name="role">
        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="moniteur" {{ $user->role == 'moniteur' ? 'selected' : '' }}>Moniteur</option>
        <option value="eleve" {{ $user->role == 'eleve' ? 'selected' : '' }}>Élève</option>
    </select><br>
    <button type="submit">Modifier</button>
</form>
@endsection