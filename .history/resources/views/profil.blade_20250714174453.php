@extends('layout')

@section('title', 'Profil Client')

@section('content')
<div class="container py-5">

    <!-- Message de bienvenue -->
    <div class="alert alert-primary text-center shadow-sm">
        <h2 class="mb-1">Bienvenue {{ $client->name }}</h2>
        <p class="mb-0">Voici vos informations et vos actions disponibles.</p>
    </div>

    <!-- Bloc actions client -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title mb-3">Informations personnelles</h5>
                    <p class="text-muted fs-5"><strong>Email :</strong> {{ $client->email }}</p>

                    <div class="d-grid gap-3 mt-4">
                        <a href="{{ route('Biens') }}" class="btn btn-outline-primary btn-lg">
                            <i class="fa fa-calendar-plus me-2"></i> Faire une réservation
                        </a>
                        <a href="{{ route('historique') }}" class="btn btn-outline-secondary btn-lg">
                            <i class="fa fa-history me-2"></i> Historique
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Déconnexion -->
    <div class="text-center">
        <a href="{{ route('deconnexion') }}" class="btn btn-danger">
            <i class="fa fa-sign-out-alt me-2"></i> Se déconnecter
        </a>
    </div>

</div>
@endsection
