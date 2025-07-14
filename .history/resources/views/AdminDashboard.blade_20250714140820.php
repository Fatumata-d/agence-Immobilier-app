<<<<<<< HEAD
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
            <a href="{{ route('deconnexion-admin') }}" >Se déconnecter</a>
        </div>
    </div>

    
=======
  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tableau de bord admin - Agence Immobilière</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Optionnel: légère animation au hover des boutons */
        .btn-outline-success:hover,
        .btn-outline-info:hover,
        .btn-outline-secondary:hover,
        .btn-outline-warning:hover,
        .btn-outline-danger:hover {
            filter: brightness(90%);
            transition: filter 0.3s ease;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="card shadow-lg p-4">
            <div class="card-header bg-primary text-white text-center">
                <h2>Tableau de bord administratif</h2>
            </div>

            <div class="card-body text-center">
                <p class="mb-5 fs-5">Bienvenue dans le tableau de bord administratif !</p>

                <div class="d-grid gap-3 col-8 col-md-6 col-lg-4 mx-auto">
                    <a href="{{ route('creerAgent') }}" class="btn btn-outline-success">➕ Ajouter un agent</a>
                    <a href="{{ route('Rapport') }}" class="btn btn-outline-info">📊 Rapport</a>
                    <a href="{{ route('ListeAgents') }}" class="btn btn-outline-secondary">👥 Liste des agents</a>
                    <a href="{{ route('ListeClients') }}" class="btn btn-outline-warning">🧑‍💼 Liste des clients</a>
                    <a href="{{ route('deconnexion-admin') }}" class="btn btn-outline-danger">🚪 Se déconnecter</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
>>>>>>> 6b8042a0c1c5cb70f69ffce41e18941897c35c98
</body>
</html>
