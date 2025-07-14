  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Modification - Agent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container my-5" style="max-width:600px;">
    <h2 class="mb-4">Modifier l'agent {{ $agent->prenom }} {{ $agent->nom }}</h2>

    <form method="POST" action="{{ route('modifieragents', $agent->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" id="nom" name="nom" class="form-control" value="{{ $agent->nom }}" required />
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" id="prenom" name="prenom" class="form-control" value="{{ $agent->prenom }}" required />
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $agent->email }}" required />
        </div>

        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone :</label>
            <input type="text" id="telephone" name="telephone" class="form-control" value="{{ $agent->telephone }}" required />
        </div>

        <div class="mb-3">
            <label for="date_embauche" class="form-label">Date d'embauche :</label>
            <input type="date" id="date_embauche" name="date_embauche" class="form-control" 
                value="{{ old('date_embauche', \Carbon\Carbon::parse($agent->date_embauche)->format('Y-m-d')) }}" required />
        </div>

        <div class="mb-3">
            <label for="statut" class="form-label">Statut :</label>
            <select id="statut" name="statut" class="form-select" required>
                <option value="1" {{ $agent->statut ? 'selected' : '' }}>Actif</option>
                <option value="0" {{ !$agent->statut ? 'selected' : '' }}>Inactif</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="motDePasse" class="form-label">Nouveau mot de passe :</label>
            <input type="password" id="motDePasse" name="motDePasse" class="form-control" placeholder="Laisser vide pour ne pas changer" />
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
