@extends('layouts.app')

@section('content')
<div class="min-vh-100 bg-light py-5">
    <div class="container">
        <div class="card shadow rounded-4 mx-auto" style="max-width: 600px;">
            <div class="card-body p-5 animate-fade-in-down">
                <h1 class="card-title text-center text-primary fw-bold mb-4">📝 Créer un cours</h1>

                <form action="{{ route('cours.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf

                    <div class="mb-4">
                        <label for="titre" class="form-label fw-semibold">Titre :</label>
                        <input type="text" name="titre" id="titre" class="form-control" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un titre.
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="contenu" class="form-label fw-semibold">Contenu :</label>
                        <textarea name="contenu" id="contenu" rows="4" class="form-control" required></textarea>
                        <div class="invalid-feedback">
                            Veuillez entrer le contenu du cours.
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="type" class="form-label fw-semibold">Type :</label>
                        <input type="text" name="type" id="type" class="form-control" required>
                        <div class="invalid-feedback">
                            Veuillez entrer le type.
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="trajet" class="form-label fw-semibold">Trajet :</label>
                        <input type="text" name="trajet" id="trajet" class="form-control" required>
                        <div class="invalid-feedback">
                            Veuillez entrer le trajet.
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="eleve_id" class="form-label fw-semibold">Élève :</label>
                        <select name="eleve_id" id="eleve_id" class="form-select" required>
                            <option value="" disabled selected>Choisissez un élève</option>
                            @foreach ($eleves as $eleve)
                            <option value="{{ $eleve->id }}">{{ $eleve->user->nom }} {{ $eleve->user->prenom }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Veuillez sélectionner un élève.
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="moniteur_id" class="form-label fw-semibold">Moniteur :</label>
                        <select name="moniteur_id" id="moniteur_id" class="form-select" required>
                            <option value="" disabled selected>Choisissez un moniteur</option>
                            @foreach ($moniteurs as $moniteur)
                            <option value="{{ $moniteur->id }}">{{ $moniteur->user->nom }} {{ $moniteur->user->prenom }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Veuillez sélectionner un moniteur.
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="vehicule_id" class="form-label fw-semibold">Véhicule :</label>
                        <select name="vehicule_id" id="vehicule_id" class="form-select" required>
                            <option value="" disabled selected>Choisissez un véhicule</option>
                            @foreach ($vehicules as $vehicule)
                            <option value="{{ $vehicule->id }}">{{ $vehicule->immatriculation }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Veuillez sélectionner un véhicule.
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm">
                            ✅ Créer le cours
                        </button>
                    </div>
                </form>
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
        animation: fade-in-down 0.5s ease-out;
    }
</style>

<!-- Validation Bootstrap -->
<script>
    (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endsection
