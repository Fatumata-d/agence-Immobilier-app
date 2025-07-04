<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Bien Immobilier</title>
</head>
<body>
    <h2>Ajouter un Bien</h2>

    <form action="{{ route('enregistrerBien') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Type de Bien :</label>
        <select name="type_bien_id" required>
            @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->libelle }}</option>
            @endforeach
        </select><br><br>

        <label>Titre :</label>
        <input type="text" name="titre" required><br><br>

        <label>Description :</label>
        <textarea name="description" required></textarea><br><br>

        <label>Adresse :</label>
        <input type="text" name="adresse" required><br><br>

        <label>Ville :</label>
        <input type="text" name="ville" required><br><br>

        <label>Superficie (m²) :</label>
        <input type="number" name="superficie" required><br><br>

        <label>Prix :</label>
        <input type="number" step="0.01" name="prix" required><br><br>

        <label>Photo :</label>
        <input type="file" name="photo" required><br><br>

        <button type="submit">Ajouter le Bien</button>
    </form>
</body>
</html>
