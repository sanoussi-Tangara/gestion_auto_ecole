@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg rounded-4 p-4">
        <h1 class="text-center text-primary mb-4 display-6 fw-bold">💳 Liste des Paiements</h1>

        <div class="text-center mb-4">
            <a href="{{ route('paiements.create') }}" class="btn btn-success rounded-pill px-4 py-2 shadow-sm">
                ➕ Ajouter un paiement
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered align-middle table-hover shadow-sm">
                <thead class="table-light">
                    <tr>
                        <th>Montant</th>
                        <th>Date</th>
                        <th>Élève</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paiements as $paiement)
                    <tr>
                        <td>{{ number_format($paiement->montant, 0, ',', ' ') }} FCFA</td>
                        <td>{{ $paiement->date }}</td>
                        <td>{{ $paiement->eleve->user->prenom }} {{ $paiement->eleve->user->nom }}</td>
                        <td class="text-center">
                            <a href="{{ route('paiements.show', $paiement->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                Voir
                            </a>
                            <a href="{{ route('paiements.edit', $paiement->id) }}" class="btn btn-sm btn-outline-warning me-1">
                                Modifier
                            </a>
                            <form action="{{ route('paiements.destroy', $paiement->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce paiement ?');">
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
@endsection