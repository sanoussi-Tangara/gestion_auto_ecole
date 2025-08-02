@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card shadow-lg rounded-4 p-5">
        <h1 class="text-center text-primary mb-4 display-6 fw-bold d-flex justify-content-center align-items-center gap-2">
            <i class="fas fa-plus-circle fs-2 text-primary"></i> Ajouter un véhicule
        </h1>

        <form action="{{ route('vehicules.store') }}" method="POST">
            @csrf

            <div class="row g-4">
                <div class="col-md-6">
                    <label for="marque" class="form-label fw-medium">
                        <i class="fas fa-car-side me-2 text-muted"></i>Marque :
                    </label>
                    <input type="text" name="marque" id="marque" required class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="modele" class="form-label fw-medium">
                        <i class="fas fa-car me-2 text-muted"></i>Modèle :
                    </label>
                    <input type="text" name="modele" id="modele" required class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="immatriculation" class="form-label fw-medium">
                        <i class="fas fa-id-card me-2 text-muted"></i>Immatriculation :
                    </label>
                    <input type="text" name="immatriculation" id="immatriculation" required class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="type" class="form-label fw-medium">
                        <i class="fas fa-list-ul me-2 text-muted"></i>Type :
                    </label>
                    <input type="text" name="type" id="type" required class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="annee" class="form-label fw-medium">
                        <i class="fas fa-calendar-alt me-2 text-muted"></i>Année :
                    </label>
                    <input type="number" name="annee" id="annee" min="1900" max="{{ date('Y') }}" required class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="statut" class="form-label fw-medium">
                        <i class="fas fa-info-circle me-2 text-muted"></i>Statut :
                    </label>
                    <input type="text" name="statut" id="statut" required class="form-control">
                </div>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill shadow">
                    <i class="fas fa-save me-2"></i>Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>
@endsection