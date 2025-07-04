<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Authentification</title>
</head>
<body>
    <div>
        <h3>Bienvenue dans la page d'authentification</h3> <br>
        <h5>Veuillez choisir votre type d'authentification</h5> <br>

        <div>
            <a href="{{ route('inscription') }}" class="btn btn-success m-2">
                <i class="fas fa-user-plus"></i> S'inscrire (Client)
            </a>

        <a href="{{ route('choose.login') }}" class="btn btn-primary m-2">
            <i class="fas fa-sign-in-alt"></i> Se connecter
        </a>
    </div>


    </div>
</body>
</html>