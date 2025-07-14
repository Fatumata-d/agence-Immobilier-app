@extends('layout')

@section('title', 'Accueil')

@section('content')

<!-- Hero Section -->
<section class="hero-section bg-light py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Trouvez votre propriété idéale</h1>
                <p class="lead mb-4">Découvrez notre sélection exclusive de biens immobiliers à travers tout le pays.</p>
                <a href="{{ route('Biens') }}" class="btn btn-primary btn-lg">Voir les biens disponibles</a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('maison.jpg') }}" alt="Maison moderne" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Nos services</h2>
        <div class="row g-4">
            @php
                $services = [
                    ['icon' => 'fa-home', 'title' => 'Achat immobilier', 'text' => 'Nous vous accompagnons dans l\'achat de votre résidence principale ou secondaire.'],
                    ['icon' => 'fa-key', 'title' => 'Location', 'text' => 'Trouvez le logement qui correspond à vos besoins et à votre budget.'],
                    ['icon' => 'fa-chart-line', 'title' => 'Gestion de patrimoine', 'text' => 'Optimisez votre patrimoine immobilier avec nos conseils experts.'],
                ];
            @endphp

            @foreach ($services as $service)
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4 p-3">
                                <i class="fas {{ $service['icon'] }} fa-2x"></i>
                            </div>
                            <h5 class="card-title">{{ $service['title'] }}</h5>
                            <p class="card-text">{{ $service['text'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Témoignages -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Témoignages</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <img src="{{ asset('cheikh.jpg') }}" class="rounded-circle mb-3" width="80" alt="Client">
                                    <p class="lead mb-4">"L'agence a su trouver exactement ce que je cherchais. Un service professionnel et personnalisé."</p>
                                    <h5 class="mb-1">Cheikh Fall</h5>
                                    <p class="text-muted">Client depuis 2023</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item active">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <img src="{{ asset('boubacar.jpg') }}" class="rounded-circle mb-3" width="80" alt="Client">
                                    <p class="lead mb-4">"J'ai loué mon appartement en moins d'une semaine grâce à leur réseau. Je recommande vivement !"</p>
                                    <h5 class="mb-1">Boubacar Ka</h5>
                                    <p class="text-muted">Propriétaire</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contrôles -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Appel à l'action -->
<section class="py-5" style="background-color: #b2b8ef;">
    <div class="container text-center text-dark">
        <h2 class="mb-4">Prêt à trouver votre prochain chez-vous ?</h2>
        <p class="lead mb-4">Inscrivez-vous dès maintenant pour accéder à notre catalogue complet.</p>
        <a href="{{ route('inscription') }}" class="btn btn-dark btn-lg">S'inscrire</a>
    </div>
</section>

@endsection
