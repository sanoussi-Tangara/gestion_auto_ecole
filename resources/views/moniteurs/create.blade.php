@extends('layouts.app')

@section('content')
<div class="min-vh-100 bg-light d-flex align-items-center py-5">
    <div class="container">
        <div class="mx-auto bg-white p-5 rounded-4 shadow-lg" style="max-width: 480px;">
            <h1 class="mb-4 text-center text-primary fw-bold d-flex justify-content-center align-items-center gap-2">
                <span style="font-size: 1.8rem;">🧑‍🏫</span> Ajouter un moniteur
            </h1>

            <form action="{{ route('moniteurs.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="mb-4">
                    <label for="user_id" class="form-label fw-semibold">👤 Utilisateur :</label>
                    <select name="user_id" id="user_id" class="form-select" required>
                        <option value="" disabled selected>-- Sélectionnez un utilisateur --</option>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->nom }} {{ $user->prenom }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Veuillez sélectionner un utilisateur.
                    </div>
                </div>

                <div class="mb-4">
                    <label for="disponibilite" class="form-label fw-semibold">📅 Disponibilité :</label>
                    <select name="disponibilite" id="disponibilite" class="form-select" required>
                        <option value="" disabled selected>-- Sélectionnez la disponibilité --</option>
                        <option value="1">✅ Oui</option>
                        <option value="0">❌ Non</option>
                    </select>
                    <div class="invalid-feedback">
                        Veuillez indiquer la disponibilité.
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg fw-semibold shadow-sm">
                        💾 Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Exemple simple de validation Bootstrap 5
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
