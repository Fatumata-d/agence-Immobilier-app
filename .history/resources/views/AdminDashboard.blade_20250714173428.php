<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration du système</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #042572;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 80px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #042572;
            font-size: 28px;
            margin-bottom: 40px;
        }

        a {
            display: inline-block;
            margin: 12px 0;
            padding: 12px 24px;
            text-decoration: none;
            background-color: transparent;
            border: 2px solid #042572;
            border-radius: 6px;
            color: #042572;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        a:hover {
            background-color: #042572;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue dans le tableau de bord administratif !</h1>

        <div>
            <a href="{{ route('creerAgent') }}">Ajouter un Agent</a>
        </div>
        <div>
            <a href="{{ route('Rapport') }}">Voir le Rapport</a>
        </div>
        <div>
            <a href="{{ route('ListeAgents') }}">Liste des Agents</a>
        </div>
        <div>
            <a href="{{ route('ListeClients') }}">Liste des Clients</a>
        </div>
        <div>
            <a href="{{ route('deconnexion-admin') }}">Se Déconnecter</a>
        </div>
    </div>
</body>
</html>
