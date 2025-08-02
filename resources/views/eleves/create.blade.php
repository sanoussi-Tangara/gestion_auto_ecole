@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center bg-gradient" style="background: linear-gradient(135deg, #dbeafe, #a78bfa); padding: 3rem;">
    <div class="bg-white rounded-4 shadow p-5" style="max-width: 600px; width: 100%;">
        <h1 class="text-center text-purple fw-bold mb-4 d-flex align-items-center justify-content-center gap-2">
            <span style="font-size: 3rem;">🎓</span> Ajouter un élève
        </h1>

        <form action="{{ route('eleves.store') }}" method="POST" class="row g-4">
            @csrf

            <!-- Utilisateur -->
            <div class="col-12 col-md-6">
                <label for="user_id" class="form-label fw-semibold">👤 Utilisateur</label>
                <select name="user_id" id="user_id" class="form-select shadow-sm" required>
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->nom }} {{ $user->prenom }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Niveau -->
            <div class="col-12 col-md-6">
                <label for="niveau" class="form-label fw-semibold">🎓 Niveau</label>
                <input type="text" name="niveau" id="niveau" placeholder="Ex : Terminale" class="form-control shadow-sm" required>
            </div>

            <!-- Progression -->
            <div class="col-12 col-md-6">
                <label for="progression" class="form-label fw-semibold">📈 Progression (%)</label>
                <input type="number" name="progression" id="progression" placeholder="Ex : 75" class="form-control shadow-sm" min="0" max="100" required>
            </div>

            <!-- Date d'inscription -->
            <div class="col-12 col-md-6">
                <label for="date_inscription" class="form-label fw-semibold">📅 Date d'inscription</label>
                <input type="date" name="date_inscription" id="date_inscription" class="form-control shadow-sm" required>
            </div>

            <!-- Bouton -->
            <div class="col-12 text-center pt-3">
                <button type="submit" class="btn btn-gradient btn-lg rounded-pill px-5 shadow-sm fw-bold">
                    💾 Enregistrer l’élève
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Styles custom pour le bouton gradient -->
<style>
    .btn-gradient {
        background: linear-gradient(90deg, #7c3aed 0%, #2563eb 100%);
        color: white;
        transition: background 0.3s ease;
    }

    .btn-gradient:hover {
        background: linear-gradient(90deg, #5b21b6 0%, #1e40af 100%);
        color: white;
    }
</style>
@endsection