@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="bg-white rounded-4 shadow-lg p-4 p-md-5 mx-auto" style="max-width: 900px;">
        <h1 class="text-center text-primary fw-bold mb-4">👤 Ajouter un utilisateur</h1>

        <form action="{{ route('users.store') }}" method="POST" class="row g-4">
            @csrf

            <div class="col-md-6">
                <label for="nom" class="form-label">🧍 Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez le nom" required>
            </div>

            <div class="col-md-6">
                <label for="prenom" class="form-label">🧍‍♂️ Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez le prénom" required>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">📧 Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@mail.com" required>
            </div>

            <div class="col-md-6">
                <label for="password" class="form-label">🔒 Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
            </div>

            <div class="col-md-6">
                <label for="telephone" class="form-label">📞 Téléphone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Ex : 70 00 00 00">
            </div>

            <div class="col-md-6">
                <label for="adresse" class="form-label">📍 Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
            </div>

            <div class="col-md-6">
                <label for="role" class="form-label">🎭 Rôle</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="" disabled selected>Choisir un rôle</option>
                    <option value="admin">👑 Admin</option>
                    <option value="moniteur">🧑‍🏫 Moniteur</option>
                    <option value="eleve">🎓 Élève</option>
                </select>
            </div>

            <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg px-5 shadow">
                    🚀 Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>
@endsection