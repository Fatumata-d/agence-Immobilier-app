  @extends('layout')

@section('title', 'Boutique de l\'Agence')

@section('content')
<div class="container py-5">

    <h1 class="mb-4 text-center">Boutique de l'agence</h1>

    <!-- Filtre -->
    <form method="GET" action="{{ route('Biens') }}" class="mb-4 d-flex justify-content-center align-items-center gap-2" aria-label="Filtrer les biens par type">
        <label for="type_bien_id" class="form-label mb-0 me-2 fw-semibold">Filtrer par type :</label>
        <select name="type_bien_id" id="type_bien_id" class="form-select w-auto" onchange="this.form.submit()">
            <option value="">-- Tous les types --</option>
            @foreach($types as $type)
                <option value="{{ $type->id }}" {{ request('type_bien_id') == $type->id ? 'selected' : '' }}>
                    {{ $type->titre }}
                </option>
            @endforeach
        </select>
    </form>

    @if($biens->isEmpty())
        <div class="alert alert-info text-center">Aucun bien correspondant à votre recherche.</div>
    @else
        <!-- Liste des biens -->
        <div class="row g-4">
            @foreach ($biens as $bien)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/photos/' . $bien->photo) }}" 
                         class="card-img-top" 
                         alt="Photo de {{ $bien->titre }}, {{ $bien->typeBien->titre }}, situé à {{ $bien->ville }}" 
                         style="object-fit: cover; height: 200px;"
                         data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $bien->titre }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $bien->titre }}</h5>
                        <p class="card-text mb-1"><em>Type :</em> {{ $bien->typeBien->titre }}</p>
                        <p class="card-text mb-1 text-truncate" 
                           data-bs-toggle="tooltip" data-bs-placement="top" 
                           title="{{ $bien->description }}">
                            <em>Description :</em> {{ Str::limit($bien->description, 80) }}
                        </p>
                        <p class="card-text mb-1"><em>Adresse :</em> {{ $bien->adresse }} - {{ $bien->ville }}</p>
                        <p class="card-text mb-1"><em>Superficie :</em> {{ $bien->superficie }} m²</p>
                        <p class="card-text mb-1"><em>Prix :</em> {{ number_format($bien->prix, 0, ',', ' ') }} FCFA</p>
                        <p class="card-text mb-1"><em>Ajouté par :</em> {{ $bien->agent->prenom }}</p>
                        <p class="card-text mb-3"><em>Statut :</em> <strong>{{ ucfirst($bien->statut) }}</strong></p>

                        @if(session('client'))
                            <a href="{{ route('FormulaireReservation', $bien->id) }}" class="btn btn-primary mt-auto">Réserver ce bien</a>
                        @else
                            <div class="alert alert-warning mt-auto mb-0 small">
                                <strong>Connectez-vous pour pouvoir réserver ce bien.</strong>
                                <a href="{{ route('connexionClient') }}" class="link-primary ms-1">Se connecter</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif

    <!-- Bouton retour -->
    <div class="text-center mt-5">
        <a href="{{ route('welcome') }}" class="btn btn-secondary">← Retour</a>
    </div>

</div>

<script>
    // Activer les tooltips Bootstrap
    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });
</script>

@endsection
