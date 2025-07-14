  @extends('layout')

@section('title', 'Tableau de Bord')

@section('content')
<div class="container py-5">

    <!-- Message de bienvenue -->
    <div class="alert alert-primary text-center shadow-sm">
        <h2 class="mb-1">Bienvenue, Agent {{ session('agent')->prenom ?? '' }}</h2>
        <p class="mb-0">Gérez vos biens et rendez-vous depuis cet espace.</p>
    </div>

    <!-- Bloc des actions -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title mb-4">Actions rapides</h5>

                    <div class="d-grid gap-3">
                        <a href="{{ route('RendezVous') }}" class="btn btn-outline-info btn-lg">
                            <i class="fa fa-calendar-check me-2"></i> Voir mes rendez-vous
                        </a>
                        <a href="{{ route('MesBiens') }}" class="btn btn-outline-success btn-lg">
                            <i class="fa fa-home me-2"></i> Consulter mes biens
                        </a>
                        <a href="{{ route('ajouterBiens') }}" class="btn btn-outline-primary btn-lg">
                            <i class="fa fa-plus me-2"></i> Ajouter un nouveau bien
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Déconnexion -->
    <div class="text-center">
        <a href="{{ route('deconnexion-agent') }}" class="btn btn-danger">
            <i class="fa fa-sign-out-alt me-2"></i> Se déconnecter
        </a>
    </div>

</div>
@endsection
