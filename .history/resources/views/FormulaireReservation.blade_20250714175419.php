@extends('layout')

@section('title', 'Réservation de Bien')

@section('content')
<style>
    .text-bleu {
        color: #042572;
    }

    .btn-bleu {
        background-color: #042572;
        color: #fff;
        border: none;
    }

    .btn-bleu:hover {
        background-color: #031d5e;
        color: #fff;
    }

    .card-horaire {
        background-color: #e9f0ff;
        border: 2px solid #042572;
        color: #042572;
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <!-- Formulaire de réservation -->
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="mb-4 text-center text-bleu">Réservation pour le bien : <strong>{{ $bien->titre }}</strong></h2>

                    <form method="POST" action="{{ route('reservationEnregistrer') }}">
                        @csrf

                        <input type="hidden" name="bien_immobilier_id" value="{{ $bien->id }}">

                        <div class="mb-3">
                            <label for="date_reservation" class="form-label text-bleu">Date de réservation :</label>
                            <input 
                                type="datetime-local" 
                                class="form-control" 
                                id="date_reservation" 
                                name="date_reservation" 
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label text-bleu">Message :</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-bleu w-100">Envoyer la réservation</button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ route('Biens') }}" class="btn btn-outline-secondary">← Retour</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte des horaires -->
        <div class="col-md-4">
            <div class="card card-horaire shadow h-100">
                <div class="card-body text-center">
                    <h5 class="card-title mb-3 fw-bold">📅 Disponibilité</h5>
                    <p class="fs-6">
                        <strong>Nous sommes disponibles :</strong><br>
                        <span class="d-block mt-2">🗓️ <strong>Du lundi au vendredi</strong></span>
                        <span class="d-block">⏰ <strong>De 08h00 à 17h00</strong></span>
                    </p>
                    <div class="mt-3">
                        <i class="fa fa-clock fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
