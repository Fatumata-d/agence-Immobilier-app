  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succès</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center py-5">
        <div class="alert alert-success">
            <h4 class="alert-heading">Réservation réussie !</h4>
            <p>
                Votre réservation a été effectuée avec succès et sera transmise à l'agent correspondant.<br>
                Il vous contactera pour plus d'informations. Merci !
            </p>
        </div>
        <a href="{{ route('profil') }}" class="btn btn-primary mt-3">Retour au profil</a>
    </div>
</body>
</html>
