<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

    <h2>Connexion</h2>

    <div>
        <a href="{{ route('connexionClient') }}">Je suis un Client</a> <br>
        <a href="{{ route('connexionA') }}">Je suis un Administrateur</a> <br>
        <a href="{{ route('client.connexion.form') }}">Je suis un Agent</a> <br>
    </div>
    
</body>
</html>



