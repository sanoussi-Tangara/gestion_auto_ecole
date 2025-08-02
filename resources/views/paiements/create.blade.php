@extends('layouts.app')

@section('content')
<!-- Font Awesome CDN pour les icônes -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-papf0KV3HGK4Fuwq8Dx8Npz7k20qZT1e5pWhlpuWZPvWOnztGyP0m+QGFeW1EYUwxhl1UPzMkVbZKf2QbV3hBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container my-5">
    <div class="col-md-6 offset-md-3">
        <div class="card shadow-lg rounded-4 animate-fadeIn">
            <div class="card-body">
                <h1 class="text-center text-primary mb-4 fs-3 fw-bold">
                    ➕ Ajouter un Paiement
                </h1>

                <form action="{{ route('paiements.store') }}" method="POST">
                    @csrf

                    <div class="mb-3 input-group">
                        <span class="input-group-text bg-warning text-white">
                            <i class="fa-solid fa-money-bill-wave"></i>
                        </span>
                        <input type="number" name="montant" class="form-control" placeholder="Montant (FCFA)" required>
                    </div>

                    <div class="mb-3 input-group">
                        <span class="input-group-text bg-primary text-white">
                            <i class="fa-solid fa-calendar-day"></i>
                        </span>
                        <input type="date" name="date" class="form-control" required>
                    </div>

                    <div class="mb-4 input-group">
                        <span class="input-group-text bg-success text-white">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <select name="eleve_id" class="form-select" required>
                            <option value="" disabled selected>Choisir un élève</option>
                            @foreach ($eleves as $eleve)
                            <option value="{{ $eleve->id }}">
                                {{ $eleve->user->prenom }} {{ $eleve->user->nom }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg shadow-sm">
                            <i class="fa-solid fa-floppy-disk me-2"></i> Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.6s ease-in-out;
    }
</style>
@endsection