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
        <a href="{{ route('client.connexion.form') }}">Je suis un Client</a>
        <a href="{{ route('admin.connexion.form') }}" class="btn btn-dark">Je suis un Administrateur</a>
    </div>
    
</body>
</html>



