  @extends('layout')

@section('title', 'Page Authentification')

@section('content')
<div class="container py-5">
    <div class="card mx-auto shadow" style="max-width: 400px;">
        <div class="card-body text-center">
            <h2 class="mb-3">Bienvenue dans la page d'authentification</h2>
            <h5 class="mb-4 text-muted">Veuillez choisir votre type d'authentification</h5>

            <div class="d-grid gap-3">
                <a href="{{ route('inscription') }}" class="btn btn-primary btn-lg">S'inscrire</a>
                <a href="{{ route('connexion') }}" class="btn btn-outline-primary btn-lg">Se connecter</a>
            </div>

            <div class="mt-4">
                <a href="{{ route('loginPage') }}" class="btn btn-secondary">← Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection
