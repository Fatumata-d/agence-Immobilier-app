  @extends('layout')

@section('title', 'Historique des Réservations')

@section('content')
<div class="container py-5">
    <h3 class="mb-4 text-center">Mes réservations</h3>

    @forelse($reservations as $reservation)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $reservation->bienImmobilier->titre }}</h5>
                <p class="card-text"><strong>Date :</strong> {{ \Carbon\Carbon::parse($reservation->date_reservation)->format('d/m/Y H:i') }}</p>
                <p class="card-text"><strong>Message :</strong> {{ $reservation->message }}</p>
            </div>
        </div>
    @empty
        <div class="alert alert-info text-center">Aucune réservation pour le moment.</div>
    @endforelse

    <div class="text-center mt-4">
        <a href="{{ route('profil') }}" class="btn btn-secondary">← Retour</a>
    </div>
</div>
@endsection
