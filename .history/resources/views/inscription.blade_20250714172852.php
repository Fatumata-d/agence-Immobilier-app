  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inscription Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4 text-center">Inscription Client</h2>

                    <form method="POST" action="{{ route('inscriptionTraitement') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom :</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>

                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom :</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>

                        <div class="mb-3">
                            <label for="telephone" class="form-label">Téléphone :</label>
                            <input type="text" class="form-control" id="telephone" name="telephone" required>
                        </div>

                        <div class="mb-3">
                            <label for="adresse" class="form-label">Adresse :</label>
                            <input type="text" class="form-control" id="adresse" name="adresse" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" autocomplete="off" required>
                        </div>

                        <div class="mb-3">
                            <label for="motDePasse" class="form-label">Mot de passe :</label>
                            <input type="password" class="form-control" id="motDePasse" name="motDePasse" required>
                        </div>

                        <div class="mb-3">
                            <label for="motDePasse_confirmation" class="form-label">Confirmer le mot de passe :</label>
                            <input type="password" class="form-control" id="motDePasse_confirmation" name="motDePasse_confirmation" autocomplete="new-password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ route('') }}" class="btn btn-outline-secondary">← Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
