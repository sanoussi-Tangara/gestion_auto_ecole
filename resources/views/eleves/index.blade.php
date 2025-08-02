@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg rounded-4 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-primary fw-bold mb-0">
                🎓 Liste des élèves
            </h1>
            <a href="{{ route('eleves.create') }}" class="btn btn-primary shadow-sm">
                ➕ Ajouter un élève
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-primary text-uppercase">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Niveau</th>
                        <th>Progression</th>
                        <th>Inscription</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eleves as $eleve)
                    <tr>
                        <td class="fw-semibold">{{ $eleve->user->nom }}</td>
                        <td>{{ $eleve->user->prenom }}</td>
                        <td>{{ $eleve->niveau }}</td>
                        <td>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar bg-success" role="progressbar"
                                    style="width: {{ $eleve->progression }}%;"
                                    aria-valuenow="{{ $eleve->progression }}" aria-valuemin="0" aria-valuemax="100">
                                    {{ $eleve->progression }}%
                                </div>
                            </div>
                        </td>
                        <td>{{ \Carbon\Carbon::parse($eleve->date_inscription)->format('d/m/Y') }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('eleves.show', $eleve->id) }}" class="btn btn-sm btn-outline-info">
                                    👁️ Voir
                                </a>
                                <a href="{{ route('eleves.edit', $eleve->id) }}" class="btn btn-sm btn-outline-warning">
                                    ✏️ Modifier
                                </a>
                                <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST"
                                    onsubmit="return confirm('Confirmer la suppression ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        🗑️ Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection