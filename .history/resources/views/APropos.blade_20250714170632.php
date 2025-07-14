@extends('layout')

@section('title', 'À Propos')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body px-4 py-5">
            <h1 class="text-center text-primary fw-bold mb-4">Bienvenue dans <strong>À Propos</strong></h1>

            <p class="fs-5 mb-4 text-center">
                Cette application a été conçue pour simplifier la gestion et la vente de biens immobiliers.
                Elle offre aux agents une interface intuitive pour gérer leurs propriétés, suivre les rendez-vous, 
                et interagir facilement avec les clients.
            </p>

            <div class="row text-center mb-5">
                <div class="col-md-4 mb-4">
                    <div class="border rounded-4 p-4 shadow-sm h-100">
                        <i class="bi bi-house-door fs-1 text-primary mb-3"></i>
                        <h5 class="fw-bold">Gestion des biens</h5>
                        <p class="text-muted">Ajoutez, modifiez et gérez facilement vos biens immobiliers avec des photos et des descriptions complètes.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="border rounded-4 p-4 shadow-sm h-100">
                        <i class="bi bi-calendar-check fs-1 text-success mb-3"></i>
                        <h5 class="fw-bold">Rendez-vous simplifiés</h5>
                        <p class="text-muted">Organisez vos visites et vos rendez-vous clients rapidement via une interface conviviale.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="border rounded-4 p-4 shadow-sm h-100">
                        <i class="bi bi-bar-chart-line fs-1 text-warning mb-3"></i>
                        <h5 class="fw-bold">Suivi des performances</h5>
                        <p class="text-muted">Analysez les performances de vos ventes, vos biens les plus consultés, et les réservations effectuées.</p>
                    </div>
                </div>
            </div>

            <p class="text-center fs-6 text-muted">
                Naviguez facilement via le menu pour accéder aux différentes fonctionnalités de l'application.
                Merci d'utiliser notre plateforme, et bonne gestion !
            </p>
        </div>
    </div>
</div>
@endsection
