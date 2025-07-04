<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation de Bien</title>
</head>
<body>

    <h2>Réservation pour le bien : {{ $bien->titre }}</h2>

    <form method="POST" action="{{ route('reservation.enregistrer') }}">
        @csrf

        <input type="hidden" name="bien_immobilier_id" value="{{ $bien->id }}">

        <div>
            <label for="date_reservation">Date de réservation :</label><br>
            <input type="datetime-local" name="date_reservation" required>
        </div><br>

        <div>
            <label for="message">Message :</label><br>
            <textarea name="message" rows="4" required></textarea>
        </div><br>

        <button type="submit" style="padding: 10px 20px; background-color: green; color: white;">
            Envoyer la réservation
        </button>
    </form>
    
</body>
</html>



