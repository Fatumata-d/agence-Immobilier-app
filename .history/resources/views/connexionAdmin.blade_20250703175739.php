<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Administrateur</title>
</head>
<body>
    <h2>Connexion - Administrateur</h2>


    <form method="POST"  action="{{ route('traitementConnexionAdmin') }}">
        @csrf

        @if (session('error'))
            <p style="color:red">{{ session('error') }}</p>
        @endif

        <h4>Administrateur</h4>
        
        <label>Email :</label>
        <input type="email" name="email"  value="{{ old('email') }}" autocomplete="off" required><br>

        <label>Mot de passe :</label>
        <input type="password" name="password"  autocomplete="new-password" required><br><br>

        <button type="submit">Se connecter</button>
    </form>
    
</body>
</html>
