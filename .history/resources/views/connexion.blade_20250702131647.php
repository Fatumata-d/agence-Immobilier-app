<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>

    <form method="POST" action="{{ route('inscriptionTraitement') }}">
        @csrf

        <label>Prenom :</label>
        <input type="text" name="prenom" required><br><br>
        
        <label>Nom :</label>
        <input type="text" name="nom" required><br><br>

        <label>Telephone :</label>
        <input type="text" name="telephone" required><br><br>

        <label>Adresse :</label>
        <input type="text" name="adresse" required><br><br>

        <label>Email :</label>
        <input type="email" name="email" required><br><br>

        <label>Mot de passe :</label>
        <input type="password" name="motDePasse" required><br><br>

        <label>Confirmer le mot de passe :</label>
        <input type="password" name="motDePasse_confirmation" required><br><br>

        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
