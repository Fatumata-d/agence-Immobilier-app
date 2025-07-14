  @extends('layout')

@section('title', 'À Propos')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body text-center px-4 py-5">
            <h1 class="card-title mb-4 text-primary fw-bold">Bienvenue dans <strong>À Propos</strong></h1>
            <p class="card-text fs-5 mb-3">
                Cette application a été conçue pour simplifier la gestion et la vente de biens immobiliers.
                Elle permet aux agents d'ajouter, de suivre et de gérer leurs biens, ainsi que d'organiser des rendez-vous clients en toute simplicité.
            </p>
            <p class="card-text text-muted fs-6">
                Vous pouvez naviguer dans les différentes sections via le menu. Merci d'utiliser notre plateforme !
            </p>
        </div>
    </div>
</div>
@endsection
