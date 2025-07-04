<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil Client</title>
</head>
<body>
    <h2>Bienvenue {{ $client->name }}</h2>
    <p>Email : {{ $client->email }}</p>

    <a href="{{ route('deconnexion') }}">Se déconnecter</a>
</body>
</html>
