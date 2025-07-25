@extends('layout')

@section('title', 'Réserver un bien')

@section('content')
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
@endsection
