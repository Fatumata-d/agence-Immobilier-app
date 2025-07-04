<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion </h2>


    <form method="POST" action="{{ route('connexionTraitement') }}">
        @csrf

        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif

        <label>Email :</label>
        <input type="email" name="email" value="{{ old('email') }}" autocomplete="off" required><br><br>

        <label>Mot de passe :</label>
        <input type="password" name="motDePasse" autocomplete="new-password" required><br><br>


        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
