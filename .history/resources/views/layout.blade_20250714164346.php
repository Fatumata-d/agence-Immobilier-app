<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence IDA IMMO</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (icônes utilisateur, etc.) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            margin-top: 50px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
        .navbar-nav .nav-link.active {
            font-weight: bold;
            color: #0d6efd !important;
        }
        header img {
            max-width: 150px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: #d0d4fb ;">
        <div class="container d-flex align-items-center justify-content-between">
            
            <div class="d-flex align-items-center">
                <img src="{{ asset('Logo.png') }}" alt="IDA IMMO" class="rounded-circle" style="width: 80px; height: 80px; object-fit: cover;">
                <h5 class="text-white ms-2 mb-0">Agence Immobilière IDA IMMO</h5>
            </div>

            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('APropos') ? 'active' : '' }}" href="{{ route('APropos') }}">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('Biens') ? 'active' : '' }}" href="{{ route('Biens') }}">Biens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('Services') ? 'active' : '' }}" href="{{ route('Services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('Contact') ? 'active' : '' }}" href="{{ route('Contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('loginPage') ? 'active' : '' }}" href="{{ route('loginPage') }}">
                            <i class="fa fa-user"></i> 
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Contenu -->
    <main class="container py-5">
        @yield('content')
    </main>

    <!-- Pied de page -->
    <footer class="footer">
        &copy; {{ date('Y') }} Agence Immobilière IDA IMMO. Tous droits réservés.
    </footer>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
