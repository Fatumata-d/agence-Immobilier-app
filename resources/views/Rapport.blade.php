  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Rapport Analytique</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">Tableau de bord</h1>

    <div class="row g-4">

        <!-- Statistiques Réservations -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    Réservations
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Aujourd’hui : {{ $reservationsJour }}</li>
                    <li class="list-group-item">Ce mois : {{ $reservationsMois }}</li>
                    <li class="list-group-item">Cette année : {{ $reservationsAnnee }}</li>
                </ul>
            </div>
        </div>

        <!-- Statistiques Clients -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    Clients
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Aujourd’hui : {{ $clientsJour }}</li>
                    <li class="list-group-item">Ce mois : {{ $clientsMois }}</li>
                    <li class="list-group-item">Cette année : {{ $clientsAnnee }}</li>
                </ul>
            </div>
        </div>

        <!-- Biens vendus -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    Biens vendus
                </div>
                <div class="card-body">
                    @if($biensVendus->isEmpty())
                        <p class="mb-0">Aucun bien vendu pour le moment.</p>
                    @else
                        <ul class="list-unstyled mb-0">
                            @foreach($biensVendus as $bien)
                                <li>{{ $bien->titre }} ({{ $bien->ville }}) – {{ number_format($bien->prix, 0, ',', ' ') }} FCFA</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>

        <!-- Agents inactifs -->
        <div class="col-12 mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-danger text-white">
                    Agents inactifs
                </div>
                <div class="card-body">
                    @if($agentsInactifs->isEmpty())
                        <p class="mb-0">Tous les agents sont actifs.</p>
                    @else
                        <ul class="list-unstyled mb-0">
                            @foreach($agentsInactifs as $agent)
                                <li>{{ $agent->prenom }} {{ $agent->nom }} – {{ $agent->email }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>

        <!-- Graphique Statut des Biens -->
        <div class="col-12 mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    Statut des Biens
                </div>
                <div class="card-body">
                    <canvas id="biensChart" style="max-height: 300px;"></canvas>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center mt-4">
        <a href="{{ route('AdminDashboard') }}" class="btn btn-secondary">← Retour</a>
    </div>
</div>

<script>
    const ctx = document.getElementById('biensChart').getContext('2d');

    const biensChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($biensParStatut->keys()) !!},
            datasets: [{
                label: 'Nombre de biens disponible',
                data: {!! json_encode($biensParStatut->values()) !!},
                backgroundColor: [
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(255, 99, 132, 0.7)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0,
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    });
</script>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
