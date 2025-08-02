@extends('layouts.app')

@section('content')
<div class="min-vh-100 bg-light py-5">
    <div class="container">
        <div class="card shadow-lg rounded-4 animate-fade-in-down">
            <div class="card-body p-5">

                <h1 class="text-center text-primary mb-4 display-6 fw-bold">🚗 Liste des véhicules</h1>

                <div class="text-center mb-4">
                    <a href="{{ route('vehicules.create') }}" class="btn btn-primary rounded-pill shadow-sm px-4 py-2">
                        ➕ Ajouter un véhicule
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered align-middle table-hover shadow-sm">
                        <thead class="table-primary">
                            <tr>
                                <th>Marque</th>
                                <th>Modèle</th>
                                <th>Immatriculation</th>
                                <th>Type</th>
                                <th>Année</th>
                                <th>Statut</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicules as $vehicule)
                            <tr>
                                <td>{{ $vehicule->marque }}</td>
                                <td>{{ $vehicule->modele }}</td>
                                <td>{{ $vehicule->immatriculation }}</td>
                                <td>{{ $vehicule->type }}</td>
                                <td>{{ $vehicule->annee }}</td>
                                <td>{{ $vehicule->statut }}</td>
                                <td class="text-center">
                                    <a href="{{ route('vehicules.show', $vehicule->id) }}" class="btn btn-sm btn-outline-primary me-1">Voir</a>
                                    <a href="{{ route('vehicules.edit', $vehicule->id) }}" class="btn btn-sm btn-outline-success me-1">Modifier</a>
                                    <form action="{{ route('vehicules.destroy', $vehicule->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Voulez-vous vraiment supprimer ce véhicule ?')">
                                            Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
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
            transform: translateY(-20px);
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