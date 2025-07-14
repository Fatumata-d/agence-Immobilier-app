<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration du système</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 60px;
        }

        .dashboard {
            max-width: 500px;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-block {
            width: 100%;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="container dashboard">
        <h1>Bienvenue dans le tableau de bord administratif !</h1>

        <div class="card shadow-sm p-4">
            <a href="{{ route('creerAgent') }}" class="btn btn-primary btn-block">Ajouter un Agent</a>
            <a href="{{ route('Rapport') }}" class="btn btn-success btn-block">Rapport</a>
            <a href="{{ route('ListeAgents') }}" class="btn btn-info btn-block">Liste des Agents</a>
            <a href="{{ route('ListeClients') }}" class="btn btn-warning btn-block">Liste des Clients</a>
            <a href="{{ route('deconnexion-admin') }}" class="btn btn-danger btn-block">Se déconnecter</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
