<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Accueil - JIGI-AUTO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- Bootstrap CSS + FontAwesome --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        body {
            background-color: #fff;
            color: #212529;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        nav.navbar {
            background-color: #0d6efd !important;
            /* bleu bootstrap */
        }

        nav.navbar .navbar-brand,
        nav.navbar .nav-link {
            color: #fff !important;
            font-weight: 600;
        }

        nav.navbar .navbar-brand {
            cursor: pointer;
        }

        nav.navbar .nav-link {
            transition: color 0.3s;
        }

        nav.navbar .nav-link:hover {
            color: #cce0ff !important;
            text-decoration: underline;
        }

        /* Hero Section */
        .hero {
            background-color: #e9f0ff;
            padding: 6rem 2rem;
            border-radius: 12px;
            text-align: center;
            margin: 2rem auto;
            max-width: 900px;
            box-shadow: 0 4px 10px rgba(13, 110, 253, 0.15);
        }

        .hero h1 {
            color: #0d6efd;
            font-weight: 700;
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.25rem;
            color: #334155;
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .hero .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
            font-weight: 600;
            padding: 0.75rem 2rem;
            font-size: 1.15rem;
            border-radius: 50px;
            transition: background-color 0.3s;
        }

        .hero .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0b5ed7;
        }

        /* About Section */
        section.about {
            max-width: 900px;
            margin: 3rem auto 5rem;
            text-align: center;
            padding: 0 1rem;
        }

        section.about h2 {
            font-weight: 700;
            color: #0d6efd;
            margin-bottom: 1rem;
            font-size: 2.5rem;
        }

        section.about p {
            font-size: 1.1rem;
            color: #4b5563;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Services Section */
        section.services {
            max-width: 1100px;
            margin: 0 auto 5rem;
            padding: 0 1rem;
        }

        section.services h2 {
            font-weight: 700;
            color: #0d6efd;
            margin-bottom: 2.5rem;
            text-align: center;
            font-size: 2.75rem;
        }

        .card.service-card {
            border-radius: 1rem;
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: default;
        }

        .card.service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(13, 110, 253, 0.2);
        }

        .card.service-card .card-body {
            text-align: center;
            padding: 2rem;
        }

        .service-icon {
            font-size: 4rem;
            color: #0d6efd;
            margin-bottom: 1rem;
        }

        .card.service-card h5 {
            font-weight: 700;
            margin-bottom: 1rem;
            color: #1e40af;
        }

        .card.service-card p {
            color: #475569;
            font-size: 1rem;
        }

        /* Footer */
        footer {
            background-color: #0d6efd;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto;
            font-weight: 600;
            font-size: 0.95rem;
        }
    </style>
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-car me-2"></i> JIGI-AUTO
            </a>

            <div class="ms-auto">
                <a class="nav-link" href="{{ route('login') }}">
                    <i class="fas fa-lock me-1"></i> Connexion
                </a>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="hero">
        <h1>Bienvenue à JIGI-AUTO</h1>
        <p>La plateforme complète pour gérer vos élèves, moniteurs, examens ,vehicules,paiements,cours et examens en toute simplicité.</p>
        <a href="{{ route('login') }}" class="btn btn-primary">Commencer</a>
    </section>

    {{-- About Section --}}
    <section class="about">
        <h2>À propos de l'application</h2>
        <p>
            Découvrez la plateforme tout-en-un qui révolutionne la gestion de votre auto-école ! Notre application intuitive vous permet de suivre facilement les inscriptions de vos élèves, d’organiser les cours et les plannings de vos moniteurs, et de gérer votre flotte de véhicules en toute simplicité.
            Planifiez vos sessions d’examen, suivez les résultats en temps réel, et assurez une expérience fluide grâce à notre système de gestion des paiements sécurisé et transparent.
            Optimisez votre temps, améliorez la satisfaction de vos élèves, et développez votre auto-école grâce à une solution digitale moderne, performante et facile à utiliser.
        </p>

    </section>

    {{-- Services Section --}}
    <section class="services">
        <h2>Fonctionnalités clés</h2>
        <div class="row g-4">
            <!-- Gestion des élèves -->
            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <div class="service-icon"><i class="fas fa-user-graduate"></i></div>
                        <h5>Gestion des élèves</h5>
                        <p>Ajoutez, suivez et gérez facilement tous vos élèves.</p>
                    </div>
                </div>
            </div>

            <!-- Gestion des moniteurs -->
            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <div class="service-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                        <h5>Gestion des moniteurs</h5>
                        <p>Attribuez des moniteurs aux cours et gérez leurs plannings.</p>
                    </div>
                </div>
            </div>

            <!-- Suivi des véhicules -->
            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <div class="service-icon"><i class="fas fa-car"></i></div>
                        <h5>Suivi des véhicules</h5>
                        <p>Ajoutez et maintenez votre flotte de véhicules à jour.</p>
                    </div>
                </div>
            </div>

            <!-- Gestion des cours -->
            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <div class="service-icon"><i class="fas fa-book-open"></i></div>
                        <h5>Gestion des cours</h5>
                        <p>Organisez, planifiez et suivez les cours pour vos élèves.</p>
                    </div>
                </div>
            </div>

            <!-- Gestion des examens -->
            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <div class="service-icon"><i class="fas fa-file-alt"></i></div>
                        <h5>Gestion des examens</h5>
                        <p>Planifiez les sessions d’examen et suivez les résultats.</p>
                    </div>
                </div>
            </div>

            <!-- Gestion des paiements -->
            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="card-body">
                        <div class="service-icon"><i class="fas fa-credit-card"></i></div>
                        <h5>Gestion des paiements</h5>
                        <p>Suivez les paiements, factures et abonnements des élèves.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Footer --}}
    <footer>
        &copy; {{ date('Y') }} JIGI-AUTO. Tous droits réservés.
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>