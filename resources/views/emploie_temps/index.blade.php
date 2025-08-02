@extends('layouts.app')

@section('content')
<h1>Liste des emplois du temps</h1>

<a href="{{ route('emploie_temps.create') }}">➕ Ajouter un emploi du temps</a>

<table>
    <thead>
        <tr>
            <th>Élève</th>
            <th>Moniteur</th>
            <th>Type</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($emplois as $emploi)
        <tr>
            <td>{{ $emploi->eleve->user->nom }}</td>
            <td>{{ $emploi->moniteur->user->nom }}</td>
            <td>{{ $emploi->type }}</td>
            <td>{{ $emploi->date_heure_debut }}</td>
            <td>{{ $emploi->date_heure_fin }}</td>
            <td>
                <a href="{{ route('emploie_temps.show', $emploi->id) }}">Voir</a>
                <a href="{{ route('emploie_temps.edit', $emploi->id) }}">Modifier</a>
                <form action="{{ route('emploie_temps.destroy', $emploi->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection