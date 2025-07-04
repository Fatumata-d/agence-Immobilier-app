<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Un Agent</title>
</head>
<body>
    <div>
        <h2>Ajouter un agent</h2>
    </div>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('') }}">
        @csrf

        <input type="text" name="prenom" placeholder="Prénom" required><br>
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="text" name="telephone" placeholder="Téléphone" required><br>
        <input type="email" name="email" placeholder="Email" required><br>

        <input type="password" name="motDePasse" placeholder="Mot de passe" required><br>
        <input type="password" name="motDePasse_confirmation" placeholder="Confirmer mot de passe" required><br>

        <input type="text" name="adresse" placeholder="Adresse" required><br>
        <input type="datetime-local" name="date_embauche" required><br>

        <label>Statut :</label>
        <select name="statut" required>
            <option value="1">Actif</option>
            <option value="0">Inactif</option>
        </select><br><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>