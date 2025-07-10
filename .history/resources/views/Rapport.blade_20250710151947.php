<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Rapport Analytique</title>
</head>
<body>
    <h1>Tableau de bord</h1>

        <h3>Réservations</h3>
        <ul>
            <li>Aujourd’hui : {{ $reservationsJour }}</li>
            <li>Ce mois : {{ $reservationsMois }}</li>
            <li>Cette année : {{ $reservationsAnnee }}</li>
        </ul>

        <h3>Clients</h3>
        <ul>
            <li>Aujourd’hui : {{ $clientsJour }}</li>
            <li>Ce mois : {{ $clientsMois }}</li>
            <li>Cette année : {{ $clientsAnnee }}</li>
        </ul>

        <h3>Biens vendus</h3>

        @if($biensVendus->isEmpty())
            <p>Aucun bien vendu pour le moment.</p>
        @else
            <ul>
                @foreach($biensVendus as $bien)
                    <li>{{ $bien->titre }} ({{ $bien->ville }}) – {{ number_format($bien->prix, 0, ',', ' ') }} FCFA</li>
                @endforeach
            </ul>
        @endif

        <h3>Agents inactifs</h3>

        @if($agentsInactifs->isEmpty())
            <p>Tous les agents sont actifs.</p>
        @else
            <ul>
                @foreach($agentsInactifs as $agent)
                    <li>{{ $agent->prenom }} {{ $agent->nom }} – {{ $agent->email }}</li>
                @endforeach
            </ul>
        @endif


    <h3>Statut des Biens</h3>
    <canvas id="biensChart" width="50" height="10"></canvas>

    <script>
        const ctx = document.getElementById('biensChart').getContext('2d');

        const biensChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($biensParStatut->keys()) !!},
                datasets: [{
                    label: 'Nombre de biens ',
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
                        precision: 0
                    }
                }
            }
        });
    </script>

    <br>
    <button> <a href="{{ route('AdminDashboard') }}">Retour</a></button>
</body>
</html>