@extends('layouts.app')

@section('content')
<div class="min-vh-100 bg-light py-5">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">
            <h1 class="text-primary fw-bold d-flex align-items-center gap-2">
                <span style="font-size: 2.5rem;">👨‍🏫</span> Liste des moniteurs
            </h1>
            <a href="{{ route('moniteurs.create') }}"
                class="btn btn-primary btn-lg shadow-sm">
                ➕ Ajouter un moniteur
            </a>
        </div>

        <div class="table-responsive bg-white rounded shadow-sm p-4">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">👤 Nom</th>
                        <th scope="col">👤 Prénom</th>
                        <th scope="col">📅 Disponibilité</th>
                        <th scope="col" class="text-center">⚙️ Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($moniteurs as $moniteur)
                    <tr>
                        <td class="fw-semibold">{{ $moniteur->user->nom }}</td>
                        <td>{{ $moniteur->user->prenom }}</td>
                        <td>
                            @if ($moniteur->disponibilite)
                            <span class="badge bg-success">✅ Disponible</span>
                            @else
                            <span class="badge bg-danger">❌ Indisponible</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('moniteurs.show', $moniteur->id) }}"
                                class="btn btn-sm btn-info me-1" title="Voir">
                                👁️
                            </a>
                            <a href="{{ route('moniteurs.edit', $moniteur->id) }}"
                                class="btn btn-sm btn-warning text-white me-1" title="Modifier">
                                ✏️
                            </a>
                            <form action="{{ route('moniteurs.destroy', $moniteur->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Voulez-vous vraiment supprimer ce moniteur ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Supprimer">
                                    🗑️
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @if(method_exists($moniteurs, 'links'))
            <div class="mt-4 d-flex justify-content-center">
                {{ $moniteurs->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection