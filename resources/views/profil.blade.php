  @extends('layout')

@section('title', 'Profil Client')

@section('content')
<div class="container py-5" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-body text-center">
            <h2 class="card-title mb-3">Bienvenue {{ $client->name }}</h2>
            <p class="mb-4"><strong>Email :</strong> {{ $client->email }}</p>

            <div class="d-flex flex-column gap-3">
                <a href="{{ route('Biens') }}" class="btn btn-primary btn-lg">Faire une réservation</a>
                <a href="{{ route('historique') }}" class="btn btn-outline-secondary btn-lg">Historique</a>
                <a href="{{ route('deconnexion') }}" class="btn btn-danger btn-lg">Se déconnecter</a>
            </div>
        </div>
    </div>
</div>
@endsection
