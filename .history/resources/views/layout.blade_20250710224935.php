<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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