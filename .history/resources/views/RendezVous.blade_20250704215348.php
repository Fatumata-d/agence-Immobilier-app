<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez Vous </title>
</head>
<body>
    <h2>Mes rendez-vous</h2>

    @forelse ($reservations as $reservation)
        <div style="border: 1px solid #ccc; margin-bottom: 10px; padding: 10px;">
            <p><strong>Bien :</strong> {{ $reservation->bienImmobilier->titre }}</p>
            <p><strong>Client :</strong> {{ $reservation->client->prenom }} {{ $reservation->client->nom }}</p>
            <p><strong>Date :</strong> {{ $reservation->date_reservation }}</p>
            <p><strong>Message :</strong> {{ $reservation->Message }}</p>
        </div>
    @empty
        <p>Aucun rendez-vous.</p>
    @endforelse
</body>
</html>