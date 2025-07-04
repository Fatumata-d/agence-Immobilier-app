<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Agent</title>
</head>
<body>
    <div>
        <h2>Ajouter un agent</h2>
    </div>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('AgentTraitement') }}">
        @csrf

        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="telephone">Téléphone :</label><br>
        <input type="text" id="telephone" name="telephone" required><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email"  value="{{ old('email') }}" autocomplete="off" required><br><br>

        <label for="motDePasse">Mot de passe :</label><br>
        <input type="password" id="motDePasse" name="motDePasse" required><br><br>

        <label for="motDePasse_confirmation">Confirmer le mot de passe :</label><br>
        <input type="password" id="motDePasse_confirmation" name="motDePasse_confirmation" required><br><br>

        <label for="adresse">Adresse :</label><br>
        <input type="text" id="adresse" name="adresse" required><br><br>

        <label for="date_embauche">Date d'embauche :</label><br>
        <input type="datetime-local" id="date_embauche" name="date_embauche" required><br><br>

        <label for="statut">Statut :</label><br>
        <select id="statut" name="statut" required>
            <option value="1">Actif</option>
            <option value="0">Inactif</option>
        </select><br><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
