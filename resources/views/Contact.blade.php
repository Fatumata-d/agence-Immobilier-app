  @extends('layout')

@section('title', 'Contact')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg rounded-4 mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h1 class="mb-4 text-center text-primary">Contactez-nous !</h1>

            <form>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom complet</label>
                    <input type="text" class="form-control" id="nom" placeholder="Votre nom" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="email" placeholder="Votre email" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Votre message" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Envoyer</button>
            </form>
        </div>
    </div>
</div>
@endsection
