<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil Client</title>
</head>
<body>
    <h2>Bienvenue {{ $client->name }}</h2>
    <p>Email : {{ $client->email }}</p>

    <h3>Mes réservations</h3>
    @forelse($reservations as $reservation)
        <div>
            <h4>{{ $reservation->bien->titre }}</h4>
            <p>Date : {{ $reservation->date_reservation }}</p>
            <p>Message : {{ $reservation->Message }}</p>
        </div>
    @empty
        <p>Aucune réservation pour le moment.</p>
    @endforelse
    <a href="{{ route('deconnexion') }}">Se déconnecter</a>
</body>
</html>
