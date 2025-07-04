<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence IDA IMMO</title>
</head>
<body>
    <div>
        <img src="{{ asset('Logo.png') }}" alt="IDA IMMO"  width="155" class="rounded-circle">
    </div>

    <nav class="navbar navbar-expand-md navbar-light">
        <div>
            <ul>
                <li>
                    <a class="nav-link {{ Request::routeIs('welcome') ? 'active' : '' }}"  href="{{ route('welcome') }}">Accueil</a>
                </li>
                <br>
                <li>
                    <a class="nav-link {{ Request::routeIs('APropos') ? 'active' : '' }}" href="{{ route('APropos') }}">A Propos</a>
                </li>
                <br>
                <li>
                    <a class="nav-link {{ Request::routeIs('Biens') ? 'active' : '' }}" href="{{ route('Biens') }}">Biens</a>
                </li>
                <br>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('tableau_de_bord') ? 'active' : '' }}" href="{{ route('tableau_de_bord') }}">Tableau de bord</a>
                </li>
                               
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('loginPage') ? 'active' : '' }}" href="{{ route('loginPage') }}">
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>

                            
                        </ul>
                    </div>
    </nav>






    <main>
        @yield('content')
    </main>

    <div class="footer">
        <p>&copy; copyright 2025 Agence Immobiliàre IDA IMMO. Tous droits réservés.</p>
    </div>
</body>
</html>