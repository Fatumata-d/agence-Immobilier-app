<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        

    <br>
    <button> <a href="{{ route('AdminDashboard') }}">Retour</a></button>
</body>
</html>