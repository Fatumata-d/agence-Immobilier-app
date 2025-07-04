<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Agent</title>
</head>
<body>
    <h2>Connexion - Agent</h2>

    @if (session('error'))
        <p style="color: red">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ route('traitementConnexionAgent') }}">
        @csrf

        <label>Email :</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required><br><br>

        <label>Mot de passe :</label><br>
        <input type="password" name="motDePasse" required><br><br>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
