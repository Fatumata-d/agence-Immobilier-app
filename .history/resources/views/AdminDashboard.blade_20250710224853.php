<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Administration du systeme</title>
</head>
<body>
    <div>
        <h1>Bienvenue dans le tableau de bord administratif !</h1>
    </div>

    <div>
        <a href="{{ route('creerAgent') }}">Ajouter Un Agent</a>
    </div>
    <br>
    <div>
        <a href="{{ route('Rapport') }}">Rapport</a>
    </div>
    <br>
    <div>
        <a href="{{ route('ListeAgents') }}"> Liste-Agents</a>
    </div>
    <br>
    <div>
        <a href="{{ route('ListeClients') }}"> Liste-Clients</a>
    </div>
    <br>
    <div>
        <a href="{{ route('deconnexion-admin') }}">Se déconnecter</a>
    </div>
</body>
</html>