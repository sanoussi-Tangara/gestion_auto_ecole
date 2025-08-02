@extends('layouts.app')

@section('content')
<div class="min-vh-100 bg-light py-5">
    <div class="container">
        <div class="card shadow rounded-4 mx-auto" style="max-width: 900px;">
            <div class="card-body p-4 animate-fade-in-down">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h3 text-success fw-bold mb-0">📚 Liste des Examens</h1>
                    <a href="{{ route('examens.create') }}"
                        class="btn btn-success btn-sm shadow-sm">
                        ➕ Ajouter un examen
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light text-muted">
                            <tr>
                                <th>Question</th>
                                <th>Options</th>
                                <th>Bonne réponse</th>
                                <th>Cours</th>
                                <th class="text-center" style="width: 130px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($examens as $examen)
                            <tr>
                                <td>{{ $examen->question }}</td>
                                <td>{{ $examen->option }}</td>
                                <td class="fw-semibold text-success">{{ $examen->bonne_reponse }}</td>
                                <td>{{ $examen->cours->titre }}</td>
                                <td class="text-center">
                                    <a href="{{ route('examens.show', $examen->id) }}" class="text-primary me-3" title="Voir">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="{{ route('examens.edit', $examen->id) }}" class="text-warning me-3" title="Modifier">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <form action="{{ route('examens.destroy', $examen->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cet examen ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link p-0 m-0 text-danger" title="Supprimer" style="border:none; background:none;">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            @if($examens->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center text-muted fst-italic py-4">
                                    Aucun examen trouvé.
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Animation fade-in -->
<style>
    @keyframes fade-in-down {
        from {
            opacity: 0;
            transform: translateY(-15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-down {
        animation: fade-in-down 0.4s ease-out;
    }
</style>
@endsection