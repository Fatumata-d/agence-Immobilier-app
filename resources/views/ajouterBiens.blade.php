  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ajouter un Bien Immobilier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container my-5" style="max-width: 600px;">
    <h2 class="mb-4">Ajouter un Bien</h2>

    <form action="{{ route('enregistrerBien') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="type_bien_id" class="form-label">Type de Bien :</label>
            <select id="type_bien_id" name="type_bien_id" class="form-select" required>
                <option value="" disabled selected>Choisir un type</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->titre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="titre" class="form-label">Titre :</label>
            <input type="text" id="titre" name="titre" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse :</label>
            <input type="text" id="adresse" name="adresse" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="ville" class="form-label">Ville :</label>
            <input type="text" id="ville" name="ville" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="superficie" class="form-label">Superficie (m²) :</label>
            <input type="number" id="superficie" name="superficie" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">Prix :</label>
            <input type="number" step="0.01" id="prix" name="prix" class="form-control" required />
        </div>

        <div class="mb-4">
            <label for="photo" class="form-label">Photo :</label>
            <input type="file" id="photo" name="photo" class="form-control" accept="image/*" required />
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

    <div class="mt-4">
        <a href="{{ route('AgentDashboard') }}" class="btn btn-secondary">Retour</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
