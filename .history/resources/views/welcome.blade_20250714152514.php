  @extends('layout')

@section('title', 'Accueil')

@section('content')



<div class="container text-center py-5">
    <div class="card shadow-lg p-4">
        <h1 class="mb-4">Bienvenue chez <span class="text-primary">IDA IMMO</span></h1>
        <p class="lead">Votre solution fiable pour la location, la vente et l’achat de biens immobiliers au Sénégal.</p>
        <button><a href="{{ route('Biens') }}" class="btn btn-primary mt-3">Voir les biens disponibles</a></button>
    </div>
</div>
@endsection
