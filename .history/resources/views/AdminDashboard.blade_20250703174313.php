<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration du systeme</title>
</head>
<body>
    <div>
        <h1>Bienvenue dans le tableau de bord administratif !</h1>
    </div>

    <div>
        <a href="{{ route('creerAgent') }}">Ajouter Un Agent</a>
    </div>
    <br>
    <div>
        <a href="{{ route('Rapport') }}">Rapport</a>
    </div>

    <div>
        <a href="{{ route('L') }}"> Liste-Agents</a>
    </div>

    <div>
        <a href="{{ route('deconnexion-admin') }}">Se déconnecter</a>
    </div>
</body>
</html>