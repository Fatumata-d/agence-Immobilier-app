<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des clients</title>
</head>
<body>
    <h2>Liste des Clients</h2>

    @if ($clients->isEmpty())
        <p>Aucun client enregistré pour le moment.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>{{ $client->adresse }}</td>
                        <td>{{ $client->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <br>
    <button> <a href="{{ route('AdminDashboard') }}">Retour</a></button>
</body>
</html>
