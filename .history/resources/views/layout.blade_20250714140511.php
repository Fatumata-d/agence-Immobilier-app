<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence IDA IMMO</title>
</head>
<body>

    
    <nav>
        <div>
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('Logo.png') }}" alt="IDA IMMO">
            </a>
            
            <button>
                <span ></span>
            </button>

            <div>
                <ul>
                    <li>
                        <a class="nav-link {{ Request::routeIs('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('APropos') ? 'active' : '' }}" href="{{ route('APropos') }}">À propos</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Request::routeIs('Biens') ? 'active' : '' }}" href="{{ route('Biens') }}">Biens</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Request::routeIs('Services') ? 'active' : '' }}" href="{{ route('Services') }}">Services</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Request::routeIs('Contact') ? 'active' : '' }}" href="{{ route('Contact') }}">Contact</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Request::routeIs('loginPage') ? 'active' : '' }}" href="{{ route('loginPage') }}">
                            <i class="fa fa-user"></i> Connexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <main class="container">
        @yield('content')
    </main>

    
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Agence Immobilière IDA IMMO. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>
