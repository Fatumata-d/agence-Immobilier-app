<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence IDA IMMO</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (icônes utilisateur, etc.) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            margin-top: 50px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
        .navbar-nav .nav-link.active {
            font-weight: bold;
            color: #0d6efd !important;
        }
        header img {
            max-width: 150px;
        }
    </style>
</head>
<body>
    {{ asset('maison.jpg') }}

    <!-- Contenu -->
    <main class="container py-5">
        @yield('content')
    </main>

    <!-- Pied de page -->
    <footer class="footer">
        &copy; {{ date('Y') }} Agence Immobilière IDA IMMO. Tous droits réservés.
    </footer>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
