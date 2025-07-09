<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil Client</title>
</head>
<body>
    <h2>Bienvenue {{ $client->name }}</h2>
    <p>Email : {{ $client->email }}</p>

    <button><a href="{{ route('Biens') }}">Faire-une-reservation</a></button>


    
    <button><a href="{{ route('historique') }}">Historique</a></button>

    

    <a href="{{ route('deconnexion') }}">Se déconnecter</a>
</body>
</html>
