<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'JIGI-AUTO')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- Custom CSS --}}
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .navbar {
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            font-weight: 500;
        }

        .container {
            padding-top: 30px;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        footer {
            background-color: #ffffff;
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-car-side me-2"></i>JIGI-AUTO
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-users me-1"></i>Utilisateurs</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('eleves.index') }}"><i class="fas fa-user-graduate me-1"></i>Élèves</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('moniteurs.index') }}"><i class="fas fa-chalkboard-teacher me-1"></i>Moniteurs</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('cours.index') }}"><i class="fas fa-book-open me-1"></i>Cours</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('examens.index') }}"><i class="fas fa-clipboard-check me-1"></i>Examens</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('vehicules.index') }}"><i class="fas fa-car me-1"></i>Véhicules</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('paiements.index') }}"><i class="fas fa-credit-card me-1"></i>Paiements</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="container">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-center text-muted py-4 mt-5">
        <div class="container">
            &copy; {{ date('Y') }} <strong>JIGI-AUTO</strong> - Tous droits réservés.
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>