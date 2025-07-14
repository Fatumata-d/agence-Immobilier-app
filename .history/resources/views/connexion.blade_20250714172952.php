  <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Connexion</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

  <div class="card shadow p-4" style="width: 320px;">
    <h2 class="text-center mb-4">Connexion</h2>

    <div class="d-grid gap-3">
      <a href="{{ route('connexionAdmin') }}" class="btn btn-primary btn-lg">Je suis un Administrateur</a>
      <a href="{{ route('connexionClient') }}" class="btn btn-success btn-lg">Je suis un Client</a>
      <a href="{{ route('connexionAgent') }}" class="btn btn-info btn-lg text-white">Je suis un Agent</a>
    </div>

    <div class="text-center mt-4">
      <a href="{{ route('loginPage') }}" class="btn btn-outline-secondary">← Retour</a>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
