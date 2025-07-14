@extends('layout')

@section('title', 'Services')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Les Services Proposés</h1>
        <p class="text-muted fs-5">Découvrez nos différentes offres pour répondre à tous vos besoins immobiliers.</p>
    </div>

    <div class="row g-4 mb-5">
        <!-- Carte Vente -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm rounded-4">
                <img src="{{ asset('images/services/vente.jpg') }}" class="card-img-top rounded-top" alt="Vente">
                <div class="card-body">
                    <h5 class="card-title text-primary">Vente</h5>
                    <p class="card-text">
                        Nous accompagnons les propriétaires dans la mise en vente rapide et efficace de leurs biens grâce à une large visibilité et une expertise locale.
                    </p>
                </div>
            </div>
        </div>

        <!-- Carte Location -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm rounded-4">
                <img src="{{ asset('images/services/location.jpg') }}" class="card-img-top rounded-top" alt="Location">
                <div class="card-body">
                    <h5 class="card-title text-success">Location</h5>
                    <p class="card-text">
                        Notre service de location vous aide à trouver des locataires fiables et à gérer vos contrats en toute sérénité.
                    </p>
                </div>
            </div>
        </div>

        <!-- Carte Gestion -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm rounded-4">
                <img src="{{ asset('images/services/gestion.jpg') }}" class="card-img-top rounded-top" alt="Gestion">
                <div class="card-body">
                    <h5 class="card-title text-warning">Gestion</h5>
                    <p class="card-text">
                        Profitez d’une gestion complète de vos biens immobiliers, de la maintenance aux relations locataires, sans souci.
                    </p>
                </div>
            </div>
        </div>

        <!-- Carte Patrimoine -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm rounded-4">
                <img src="{{ asset('images/services/patrimoine.jpg') }}" class="card-img-top rounded-top" alt="Patrimoine">
                <div class="card-body">
                    <h5 class="card-title text-info">Gestion de Patrimoine</h5>
                    <p class="card-text">
                        Nous vous conseillons pour optimiser et valoriser votre patrimoine immobilier sur le long terme grâce à des stratégies adaptées.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ route('Biens') }}" class="btn btn-primary btn-lg">
            Réserver un bien
        </a>
    </div>
</div>
@endsection
