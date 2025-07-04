<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <img src="{{ asset('Logo.png') }}" alt="IDA IMMO"  width="155" class="rounded-circle">
    </div>

    <main>
        @yield('content')
    </main>

    <div class="footer">
        <p>&copy; copyright 2025 Restaurant SO SUSHI. Tous droits réservés.</p>
        <div class="social-icons">
            <a href="https://www.instagram.com/sosushidakar?igsh=MWVjdWF3MWx1Nmh2aw=="  style="color:black; font-size: 1.1em;"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</body>
</html>