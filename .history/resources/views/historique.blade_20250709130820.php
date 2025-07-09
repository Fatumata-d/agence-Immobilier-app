<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique</title>
</head>
<body>
    <h3>Mes réservations</h3>
    @forelse($reservations as $reservation)
        <div>
            <h4>{{ $reservation->bienImmobilier->titre }}</h4>
            <p>Date : {{ $reservation->date_reservation }}</p>
            <p>Message : {{ $reservation->Message }}</p>
        </div>
    @empty
        <p>Aucune réservation pour le moment.</p>
    @endforelse
</body>
</html>