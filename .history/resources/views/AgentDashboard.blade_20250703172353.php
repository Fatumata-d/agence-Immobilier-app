<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     

    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Agent</title>
</head>
<body>
    <h2>Bienvenue Agent {{ session('agent')->prenom ?? '' }}</h2>
    <p>Voici votre tableau de bord.</p>

    <a href="{{ route('deconnexionAgent') }}">Se déconnecter</a>
</body>
</html>


    <div>
        <a href="{{ route('deconnexion') }}">Se déconnecter</a>
    </div>
</body>
</html>