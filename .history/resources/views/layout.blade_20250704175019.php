<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence IDA IMMO</title>
</head>
<body>
    <div>
        <img src="{{ asset('Logo.png') }}" alt="IDA IMMO"  width="135" class="rounded-circle">
    </div>

    <nav class="navbar navbar-expand-md navbar-light">
        <div>
            <ul>
                <li>
                    <a class="nav-link {{ Request::routeIs('welcome') ? 'active' : '' }}"  href="{{ route('welcome') }}">Accueil</a>
                </li>
            
                <li>
                    <a class="nav-link {{ Request::routeIs('APropos') ? 'active' : '' }}" href="{{ route('APropos') }}">A Propos</a>
                </li>
                
                <li>
                    <a class="nav-link {{ Request::routeIs('Biens') ? 'active' : '' }}" href="{{ route('Biens') }}">Biens</a>
                </li>
                @if(session('agent'))
    <li><a href="{{ route('mes.biens') }}">Mes Biens</a></li>
@endif

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
    </nav>






    <main>
        @yield('content')
    </main>

    <div class="footer">
        <p>&copy; copyright 2025 Agence Immobiliàre IDA IMMO. Tous droits réservés.</p>
    </div>
</body>
</html>