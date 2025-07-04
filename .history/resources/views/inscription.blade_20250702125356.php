<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription Client</title>
</head>
<body>
    <h2>Inscription Client</h2>

    <form method="POST" action="{{ route('inscriptionTraitement') }}">
        @csrf

        <label>Nom :</label>
        <input type="text" name="name" required><br><br>

        <label>Prenom :</label>
        <input type="text" name="name" required><br><br>

        

        <label>Email :</label>
        <input type="email" name="email" required><br><br>

        <label>Mot de passe :</label>
        <input type="password" name="password" required><br><br>

        <label>Confirmer le mot de passe :</label>
        <input type="password" name="password_confirmation" required><br><br>

        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
