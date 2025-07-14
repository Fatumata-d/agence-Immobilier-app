@extends('layout')

@section('title', 'Tableau de Bord Admin')

@section('content')
<div class="container py-5">

    <!-- Message de bienvenue -->
    <div class="alert alert-primary text-center shadow-sm">
        <h2 class="mb-1">Bienvenue dans le tableau de bord administratif</h2>
        <p class="mb-0">Gérez les agents, clients, rapports et plus encore.</p>
    </div>

    <!-- Bloc des actions -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title mb-4">Actions rapides</h5>

                    <div class="d-grid gap-3">
                        <a href="{{ route('creerAgent') }}" class="btn btn-outline-primary btn-lg">
                            <i class="fa fa-user-plus me-2"></i> Ajouter un agent
                        </a>
                        <a href="{{ route('Rapport') }}" class="btn btn-outline-info btn-lg">
                            <i class="fa fa-chart-bar me-2"></i> Voir les rapports
                        </a>
                        <a href="{{ route('ListeAgents') }}" class="btn btn-outline-success btn-lg">
                            <i class="fa fa-users me-2"></i> Liste des agents
                        </a>
                        <a href="{{ route('ListeClients') }}" class="btn btn-outline-secondary btn-lg">
                            <i class="fa fa-user-friends me-2"></i> Liste des clients
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Déconnexion -->
    <div class="text-center">
        <a href="{{ route('deconnexion-admin') }}" class="btn btn-danger">
            <i class="fa fa-sign-out-alt me-2"></i> Se déconnecter
        </a>
    </div>

</div>
@endsection
