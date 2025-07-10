<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifir un Bien</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
    <h2>Modifier le bien : {{ $bien->titre }}</h2>

    <form method="POST" action="{{ route('agent.bien.mettreAJour', $bien->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label>Titre :</label>
            <input type="text" name="titre" value="{{ $bien->titre }}" required>
        </div>

        <div>
            <label>Description :</label>
            <textarea name="description" required>{{ $bien->description }}</textarea>
        </div>

        <div>
            <label>Prix :</label>
            <input type="number" name="prix" value="{{ $bien->prix }}" required>
        </div>

        <div>
            <label>Photo actuelle :</label><br>
            <img src="{{ asset('storage/photos/' . $bien->photo) }}" width="200"><br><br>

            <label>Changer la photo :</label>
            <input type="file" name="photo">
        </div>

        <button type="submit">Enregistrer les modifications</button>
    </form>
@endsection

</body>
</html>