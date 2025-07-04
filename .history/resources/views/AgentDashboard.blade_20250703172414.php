<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Agent</title>
</head>
<body>
    <h2>Bienvenue Agent {{ session('agent')->prenom ?? '' }}</h2>
    <p>Voici le tableau de bord.</p>

    <a href="{{ route('deconnexionAgent') }}">Se déconnecter</a>
</body>
</html>
