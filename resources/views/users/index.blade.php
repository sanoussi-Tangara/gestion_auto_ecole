@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="bg-white shadow rounded p-4">
        {{-- Header --}}
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mb-4">
            <h1 class="h3 text-primary mb-3 mb-sm-0 d-flex align-items-center gap-2">
                <i class="fas fa-users"></i> Liste des utilisateurs
            </h1>
            <a href="{{ route('users.create') }}"
                class="btn btn-primary d-flex align-items-center gap-2">
                <span class="fs-5">➕</span>
                <span>Ajouter un utilisateur</span>
            </a>
        </div>

        {{-- Table --}}
        <div class="table-responsive">
            <table class="table table-hover align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td class="fw-semibold">{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td class="text-decoration-underline text-primary">{{ $user->email }}</td>
                        <td>{{ $user->telephone }}</td>
                        <td>
                            @if($user->role == 'admin')
                            <span class="badge bg-danger"><i class="fas fa-crown me-1"></i>Admin</span>
                            @elseif($user->role == 'moniteur')
                            <span class="badge bg-warning text-dark"><i class="fas fa-chalkboard-teacher me-1"></i>Moniteur</span>
                            @else
                            <span class="badge bg-success"><i class="fas fa-user-graduate me-1"></i>Élève</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="text-primary me-2">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('users.edit', $user->id) }}" class="text-warning me-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 text-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-muted py-4">Aucun utilisateur trouvé.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection