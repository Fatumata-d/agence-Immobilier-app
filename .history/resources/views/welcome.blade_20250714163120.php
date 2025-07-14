  @extends('layout')

@section('title', 'Accueil')
@section('content') 

<header class="hero-section bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Trouvez votre propriété idéale</h1>
                    <p class="lead mb-4">Découvrez notre sélection exclusive de biens immobiliers à travers tout le pays.</p>
                     <button><a href="{{ route('Biens') }}" class="btn btn-primary mt-3"></a>Voir les biens disponibles</button>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('maison.jpg') }}" alt="Maison moderne" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
</header>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Nos services</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4">
                                <i class="fas fa-home fa-2x"></i>
                            </div>
                            <h5 class="card-title">Achat immobilier</h5>
                            <p class="card-text">Nous vous accompagnons dans l'achat de votre résidence principale ou secondaire.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4">
                                <i class="fas fa-key fa-2x"></i>
                            </div>
                            <h5 class="card-title">Location</h5>
                            <p class="card-text">Trouvez le logement qui correspond à vos besoins et à votre budget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4">
                                <i class="fas fa-chart-line fa-2x"></i>
                            </div>
                            <h5 class="card-title">Gestion de patrimoine</h5>
                            <p class="card-text">Optimisez votre patrimoine immobilier avec nos conseils experts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
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
                                        <img src="assets/img/10.jpg" class="rounded-circle mb-3" width="80" alt="Client">
                                        <p class="lead mb-4">"L'agence a su trouver exactement ce que je cherchais. Un service professionnel et personnalisé."</p>
                                        <h5 class="mb-1">Cheikh Fall</h5>
                                        <p class="text-muted">Client depuis 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body text-center p-4">
                                        <img src="assets/img/9.jpg" class="rounded-circle mb-3" width="80" alt="Client">
                                        <p class="lead mb-4">"J'ai loué mon appartement en moins d'une semaine grâce à leur réseau. Je recommande vivement !"</p>
                                        <h5 class="mb-1">Boubacar Ka</h5>
                                        <p class="text-muted">Propriétaire</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Prêt à trouver votre prochain chez-vous ?</h2>
            <p class="lead mb-4">Inscrivez-vous dès maintenant pour accéder à notre catalogue complet.</p>
              <a href="{{ route('inscription') }}" class="btn btn-primary btn-lg">S'inscrire</a>
        </div>
    </section>

  

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>
</html>
 
=======
@section('content')
<div class="container text-center py-5">
    <div class="card shadow-lg p-4">
        <h1 class="mb-4">Bienvenue chez <span class="text-primary">IDA IMMO</span></h1>
        <p class="lead">Votre solution fiable pour la location, la vente et l’achat de biens immobiliers au Sénégal.</p>
       
    </div>
</div>
>>>>>>> 8b4d807e3a4a3c4ec2a46e17aacd3698c88d4582
@endsection
