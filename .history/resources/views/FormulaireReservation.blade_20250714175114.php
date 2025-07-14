  @extends('layout')

@section('title', 'Réservation de Bien')

@section('content')
<div class="container py-5">
    <div class="card shadow mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h2 class="mb-4 text-center">Réservation pour le bien : <strong>{{ $bien->titre }}</strong></h2>

            <form method="POST" action="{{ route('reservationEnregistrer') }}">
                @csrf

                <input type="hidden" name="bien_immobilier_id" value="{{ $bien->id }}">

                <div class="mb-3">
                    <label for="date_reservation" class="form-label">Date de réservation :</label>
                    <input type="datetime-local" class="form-control" id="date_reservation" name="date_reservation" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message :</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-success w-100">Envoyer la réservation</button>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('Biens') }}" class="btn btn-outline-secondary">← Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection
