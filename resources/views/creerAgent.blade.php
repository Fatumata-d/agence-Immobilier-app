  @extends('layout')

@section('title', 'Ajouter un Agent')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h2 class="mb-4 text-center">Ajouter un agent</h2>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('AgentTraitement') }}">
                @csrf

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom :</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
                </div>

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}" required>
                </div>

                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone :</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="motDePasse" class="form-label">Mot de passe :</label>
                    <input type="password" class="form-control" id="motDePasse" name="motDePasse" autocomplete="new-password" required>
                </div>

                <div class="mb-3">
                    <label for="motDePasse_confirmation" class="form-label">Confirmer le mot de passe :</label>
                    <input type="password" class="form-control" id="motDePasse_confirmation" name="motDePasse_confirmation" required>
                </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse :</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse') }}" required>
                </div>

                <div class="mb-3">
                    <label for="date_embauche" class="form-label">Date d'embauche :</label>
                    <input type="datetime-local" class="form-control" id="date_embauche" name="date_embauche" value="{{ old('date_embauche') }}" required>
                </div>

                <div class="mb-4">
                    <label for="statut" class="form-label">Statut :</label>
                    <select id="statut" name="statut" class="form-select" required>
                        <option value="1" {{ old('statut') == '1' ? 'selected' : '' }}>Actif</option>
                        <option value="0" {{ old('statut') == '0' ? 'selected' : '' }}>Inactif</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">Ajouter</button>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('AdminDashboard') }}" class="btn btn-outline-secondary">← Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection
