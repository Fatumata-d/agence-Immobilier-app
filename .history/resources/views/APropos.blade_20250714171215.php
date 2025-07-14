@extends('layout')

@section('title', 'À Propos')

@section('content')
<style>
    .text-principal {
        color: #042572;
    }
    .icon-style {
        color: #042572;
    }
</style>

<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body px-5 py-5">
            <h1 class="text-center text-principal fw-bold mb-4">Bienvenue sur notre application de gestion immobilière</h1>

            <p class="fs-5 mb-4 text-center">
                Notre application a été conçue pour répondre aux besoins spécifiques des agences immobilières modernes.
                Elle offre une solution complète, intuitive et performante permettant de centraliser toutes les activités
                liées à la vente, à la location et à la gestion de biens immobiliers.
            </p>

            <p class="fs-6 text-muted mb-5 text-center">
                Grâce à une interface conviviale et des fonctionnalités avancées, notre plateforme permet aux agents
                immobiliers de publier des biens, organiser des visites, suivre les performances de vente, et améliorer
                leur relation client, le tout depuis une seule interface.
            </p>

            <div class="row g-4 text-center mb-5">
                <div class="col-md-4">
                    <div class="border rounded-4 p-4 shadow-sm h-100">
                        <i class="bi bi-house-door-fill fs-1 icon-style mb-3"></i>
                        <h5 class="fw-bold text-principal">Gestion des biens</h5>
                        <p class="text-muted">Ajoutez, modifiez et gérez facilement vos biens immobiliers avec des photos, prix, et descriptions complètes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded-4 p-4 shadow-sm h-100">
                        <i class="bi bi-calendar-check-fill fs-1 text-success mb-3"></i>
                        <h5 class="fw-bold text-principal">Rendez-vous simplifiés</h5>
                        <p class="text-muted">Planifiez rapidement les visites et organisez les rendez-vous avec les clients sans complexité.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border rounded-4 p-4 shadow-sm h-100">
                        <i class="bi bi-bar-chart-fill fs-1 text-warning mb-3"></i>
                        <h5 class="fw-bold text-principal">Suivi des performances</h5>
                        <p class="text-muted">Visualisez les statistiques de vos ventes, suivez les réservations et optimisez votre activité.</p>
                    </div>
                </div>
            </div>

            <p class="text-center fs-6 text-muted">
                Explorez les fonctionnalités via le menu principal et découvrez comment notre solution peut transformer
                votre gestion immobilière. Merci de nous faire confiance !
            </p>
        </div>
    </div>
</div>
@endsection
