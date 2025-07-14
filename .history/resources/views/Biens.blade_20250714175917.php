@extends('layout')

@section('title', 'Boutique de l\'Agence')

@section('content')

<style>
    .text-bleu {
        color: #042572;
    }

    .btn-bleu {
        background-color: #042572;
        color: white;
        border: none;
    }

    .btn-bleu:hover {
        background-color: #031d5e;
        color: white;
    }

    .badge-statut {
        font-size: 0.9rem;
        padding: 6px 12px;
        border-radius: 8px;
    }

    .badge-disponible {
        background-color: #042572;
        color: white;
    }

    .badge-reserve {
        background-color: #6c757d;
        color: white;
    }

    .badge-vendu {
        background-color: #dc3545;
        color: white;
    }
</style>

<div class="container py-5">

    <h1 class="mb-4 text-center text-bleu fw-bold">Boutique de l'agence</h1>

    <!-- Filtre -->
    <form method="GET" action="{{ route('Biens') }}" class="mb-4 d-flex justify-content-center align-items-center gap-2" aria-label="Filtrer les biens par type">
        <label for="type_bien_id" class="form-label mb-0 me-2 fw-semibold text-bleu">Filtrer par type :</label>
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
                        <h5 class="card-title text-bleu fw-bold">{{ $bien->titre }}</h5>
                        <p class="card-text mb-1"><em>Type :</em> {{ $bien->typeBien->titre }}</p>
                        <p class="card-text mb-1 text-truncate" title="{{ $bien->description }}">
                            <em>Description :</em> {{ Str::limit($bien->description, 80) }}
                        </p>
                        <p class="card-text mb-1"><em>Adresse :</em> {{ $bien->adresse }} - {{ $bien->ville }}</p>
                        <p class="card-text mb-1"><em>Superficie :</em> {{ $bien->superficie }} m²</p>
                        <p class="card-text mb-1"><em>Prix :</em> {{ number_format($bien->prix, 0, ',', ' ') }} FCFA</p>
                        <p class="card-text mb-1"><em>Ajouté par :</em> {{ $bien->agent->prenom }}</p>

                        {{-- Affichage du statut avec badge --}}
                        <p class="card-text mb-3">
                            <em>Statut :</em> 
                            @php
                                $statut = strtolower($bien->statut);
                            @endphp
                            <span class="badge badge-statut
                                {{ $statut === 'disponible' ? 'badge-disponible' : ($statut === 'réservé' ? 'badge-reserve' : 'badge-vendu') }}">
                                {{ ucfirst($bien->statut) }}
                            </span>
                        </p>

                        @if(session('client'))
                            <a href="{{ route('FormulaireReservation', $bien->id) }}" class="btn btn-bleu mt-auto">Réserver ce bien</a>
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
        <a href="{{ route('welcome') }}" class="btn btn-outline-secondary">← Retour</a>
    </div>

</div>

<script>
    // Active Bootstrap tooltips
    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl)
        });
    });
</script>

@endsection
