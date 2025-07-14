@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg rounded-4 mx-auto" style="max-width: 800px;">
        <div class="card-body px-4 py-5">
            <h1 class="text-center text-primary fw-bold mb-4">Nos Coordonnées</h1>

            <div class="mb-4">
                <h5 class="text-uppercase fw-bold text-primary">Téléphone</h5>
                <p class="text-muted fs-5 mb-2">+221 77 123 45 67</p>
            </div>

            <div class="mb-4">
                <h5 class="text-uppercase fw-bold text-primary">Email</h5>
                <p class="text-muted fs-5 mb-2"></p>
            </div>

            <div class="mb-4">
                <h5 class="text-uppercase fw-bold text-primary">Adresse</h5>
                <p class="text-muted fs-5 mb-2">
                    Résidence Les Almadies, Rue 10, Dakar, Sénégal
                </p>
            </div>

            <div class="mb-4">
                <h5 class="text-uppercase fw-bold text-primary">Localisation</h5>
                <div class="ratio ratio-16x9 rounded-4 shadow-sm">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.8470304051925!2d-17.458240785355496!3d14.692787989741838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172d2ac28c6df%3A0x9c5f3f37fbcda590!2sLes%20Almadies%2C%20Dakar!5e0!3m2!1sfr!2ssn!4v1620303285485!5m2!1sfr!2ssn" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
