  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="mb-4 text-center">Mes rendez-vous</h2>

        @forelse ($reservations as $reservation)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $reservation->bienImmobilier->titre }}</h5>
                    <p class="card-text"><strong>Client :</strong> {{ $reservation->client->prenom }} {{ $reservation->client->nom }}</p>
                    <p class="card-text"><strong>Téléphone :</strong> {{ $reservation->client->telephone }}</p>
                    <p class="card-text"><strong>Date :</strong> {{ \Carbon\Carbon::parse($reservation->date_reservation)->format('d/m/Y') }}</p>
                    <p class="card-text"><strong>Message :</strong> {{ $reservation->Message }}</p>
                </div>
            </div>
        @empty
            <div class="alert alert-info text-center">Aucun rendez-vous pour le moment.</div>
        @endforelse

        <div class="text-center mt-4">
            <a href="{{ route('AgentDashboard') }}" class="btn btn-secondary">Retour au tableau de bord</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
