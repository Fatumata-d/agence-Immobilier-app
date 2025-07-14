<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration du système</title>
</head>
<body>

    <div>
        <h1>Bienvenue dans le tableau de bord administratif !</h1>

        <div>
            <a href="{{ route('creerAgent') }}">Ajouter un Agent</a>
            <a href="{{ route('Rapport') }}">Rapport</a>
            <a href="{{ route('ListeAgents') }}">Liste des Agents</a>
            <a href="{{ route('ListeClients') }}" >Liste des Clients</a>
            <a href="{{ route('deconnexion-admin') }}" class="btn btn-danger btn-block">Se déconnecter</a>
        </div>
    </div>

    
</body>
</html>
