<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Administrateur</title>
</head>
<body>
    <h2>Connexion - Administrateur</h2>


    <form method="POST" action="{{ route('admin.connexion.traiter') }}">
    @csrf
    <h4>Administrateur</h4>
    <label>Email :</label>
    <input type="email" name="email" required><br>

    <label>Mot de passe :</label>
    <input type="password" name="password" required><br><br>

    <button type="submit">Connexion Admin</button>
    </form>
</body>
</html>
