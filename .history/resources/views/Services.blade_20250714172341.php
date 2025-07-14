@extends('layout')

@section('title', 'Services')

@section('content')
<style>
    .card-img-top {
        height: 250px;
        object-fit: cover;
        width: 100%;
    }
</style>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Les Services Proposés</h1>
        <p class="text-muted fs-5">Découvrez nos différentes offres pour répondre à tous vos besoins immobiliers.</p>
    </div>

    <div class="row g-4 mb-5">
        <!-- Carte Vente -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm rounded-4">
                <img src="{{ asset('villa.jpg') }}" class="card-img-top rounded-top" alt="Vente">
                <div class="card-body">
                    <h5 class="card-title text-primary fw-bold text-uppercase">Vente</h5>
                    <p class="card-text">
                        Nous accompagnons les propriétaires dans la mise en vente rapide et efficace de leurs biens grâce à une large visibilité et une expertise locale.
                    </p>
                </div>
            </div>
        </div>

        <!-- Carte Location -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm rounded-4">
                <img src="{{ asset('chambre.jpg') }}" class="card-img-top rounded-top" alt="Location">
                <div class="card-body">
                    <h5 class="card-title text-success fw-bold text-uppercase">Location</h5>
                    <p class="card-text">
                        Notre service de location vous aide à trouver des locataires fiables et à gérer vos contrats en toute sérénité.
                    </p>
                </div>
            </div>
        </div>

        <!-- Carte Gestion -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm rounded-4">
                <img src="{{ asset('Bureau.jpg') }}" class="card-img-top rounded-top" alt="Gestion">
                <div class="card-body">
