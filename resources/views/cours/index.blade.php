@extends('layouts.app')

@section('content')
<div class="min-vh-100 bg-light py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
            <h1 class="h3 text-primary fw-bold d-flex align-items-center gap-2 mb-0">
                <span style="font-size: 1.6rem;">📚</span> Liste des cours
            </h1>
            <a href="{{ route('cours.create') }}"
                class="btn btn-primary btn-lg fw-semibold shadow-sm d-flex align-items-center gap-2">
                <span style="font-size: 1.2rem;">➕</span> Ajouter un cours
            </a>
        </div>

        <div class="table-responsive shadow rounded-3 bg-white">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" class="fw-semibold">Titre</th>
                        <th scope="col" class="fw-semibold">Type</th>
                        <th scope="col" class="fw-semibold">Trajet</th>
                        <th scope="col" class="fw-semibold">Élève</th>
                        <th scope="col" class="fw-semibold">Moniteur</th>
                        <th scope="col" class="fw-semibold">Véhicule</th>
                        <th scope="col" class="text-center fw-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cours as $cour)
                    <tr>
                        <td>{{ $cour->titre }}</td>
                        <td>{{ $cour->type }}</td>
                        <td>{{ $cour->trajet }}</td>
                        <td>{{ $cour->eleve->user->nom }}</td>
                        <td>{{ $cour->moniteur->user->nom }}</td>
                        <td>{{ $cour->vehicule->immatriculation }}</td>
                        <td class="text-center">
                            <a href="{{ route('cours.show', $cour->id) }}"
                                class="btn btn-sm btn-outline-primary me-1"
                                title="Voir">
                                👁️
                            </a>
                            <a href="{{ route('cours.edit', $cour->id) }}"
                                class="btn btn-sm btn-outline-warning me-1"
                                title="Modifier">
                                ✏️
                            </a>
                            <form action="{{ route('cours.destroy', $cour->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Confirmer la suppression ?')"
                                    title="Supprimer">
                                    🗑️
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if($cours->isEmpty())
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">Aucun cours disponible.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection