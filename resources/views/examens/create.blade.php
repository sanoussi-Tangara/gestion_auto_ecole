@extends('layouts.app')

@section('content')
<div class="min-vh-100 bg-light py-5">
    <div class="container">
        <div class="card shadow rounded-4 mx-auto animate-fade-in-down" style="max-width: 700px;">
            <div class="card-body p-4">
                <h1 class="h4 text-purple fw-bold mb-4">📝 Ajouter un examen</h1>

                <form action="{{ route('examens.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="question" class="form-label">Question :</label>
                        <input type="text" name="question" class="form-control" placeholder="Entrez la question" required>
                    </div>

                    <div class="mb-3">
                        <label for="option" class="form-label">Options (séparées par des virgules) :</label>
                        <input type="text" name="option" class="form-control" placeholder="Exemple : A,B,C,D" required>
                    </div>

                    <div class="mb-3">
                        <label for="bonne_reponse" class="form-label">Bonne réponse :</label>
                        <input type="text" name="bonne_reponse" class="form-control" placeholder="Entrez la bonne réponse" required>
                    </div>

                    <div class="mb-4">
                        <label for="cours_id" class="form-label">Cours associé :</label>
                        <select name="cours_id" class="form-select" required>
                            @foreach ($cours as $c)
                            <option value="{{ $c->id }}">{{ $c->titre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-purple text-white px-4 py-2 rounded shadow-sm" style="background-color: #6f42c1;">
                            💾 Enregistrer
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
        animation: fade-in-down 0.4s ease-out;
    }

    .text-purple {
        color: #6f42c1;
    }
</style>
@endsection