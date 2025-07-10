<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifir un Bien</title>
</head>
<body>
    
    <h2>Modifier le bien : {{ $bien->titre }}</h2>

    <form method="POST" action="{{ route('agent.bien.mettreAJour', $bien->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Type de Bien :</label>
        <select name="type_bien_id" required>
            @foreach($types as $type)
                <option value="{{ $type->id }}" {{ $type->id == $bien->type_bien_id ? 'selected' : '' }}>
                    {{ $type->titre }}
                </option>
            @endforeach
        </select><br><br>

        <label>Titre :</label>
        <input type="text" name="titre" value="{{ $bien->titre }}" required><br><br>

        <label>Description :</label>
        <textarea name="description" required>{{ $bien->description }}</textarea><br><br>

        <label>Adresse :</label>
        <input type="text" name="adresse" value="{{ $bien->adresse }}" required><br><br>

        <label>Ville :</label>
        <input type="text" name="ville" value="{{ $bien->ville }}" required><br><br>

        <label>Superficie (m²) :</label>
        <input type="number" name="superficie" value="{{ $bien->superficie }}" required><br><br>

        <label>Prix :</label>
        <input type="number" step="0.01" name="prix" value="{{ $bien->prix }}" required><br><br>

        <label>Photo actuelle :</label><br>
        <img src="{{ asset('storage/photos/' . $bien->photo) }}" width="200"><br><br>

        <label>Changer la photo :</label>
        <input type="file" name="photo"><br><br>
        <button type="submit">Enregistrer les modifications</button>
    </form>

</body>
</html>