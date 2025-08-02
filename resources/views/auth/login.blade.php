<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Connexion</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(135deg, #e0f0ff 0%, #ffffff 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .login-card {
            background: #ffffff;
            border: 2px solid #0d6efd; /* bleu bootstrap */
            border-radius: 1rem;
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.25);
            padding: 2.5rem;
            width: 100%;
            max-width: 420px;
            transition: box-shadow 0.3s ease;
        }
        .login-card:hover {
            box-shadow: 0 12px 30px rgba(13, 110, 253, 0.4);
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0b5ed7;
        }
        label {
            color: #0d6efd;
            font-weight: 600;
        }
        h2 {
            color: #0d6efd;
            font-weight: 700;
        }
        .form-check-label {
            color: #0d6efd;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2 class="text-center mb-4">🔐 Connexion</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">📧 Email</label>
            <input type="email" name="email" id="email" 
                class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" required autofocus />
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">🔒 Mot de passe</label>
            <input type="password" name="password" id="password" 
                class="form-control @error('password') is-invalid @enderror" required />
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="remember" id="remember" class="form-check-input" />
            <label for="remember" class="form-check-label">Se souvenir de moi</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Connexion</button>
    </form>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
