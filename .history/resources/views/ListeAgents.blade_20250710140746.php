<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Agents</title>
</head>
<body>
    <h2>Liste des Agents</h2>

    @if ($agents->isEmpty())
        <p>Aucun agent enregistré pour le moment.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date d'embauche</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agents as $agent)
                    <tr>
                        <td>{{ $agent->id }}</td>
                        <td>{{ $agent->nom }}</td>
                        <td>{{ $agent->prenom }}</td>
                        <td>{{ $agent->email }}</td>
                        <td>{{ $agent->telephone }}</td>
                        <td>{{ $agent->date_embauche }}</td>
                        <td>{{ $agent->statut ? 'Actif' : 'Inactif' }}</td>
                        <td>
                            <a href="{{ route('Agents.modifier', $agent->id) }}">Modifier</a>

                            <!-- Formulaire supprimer -->
                            <form action="{{ route('admin.agents.supprimer', $agent->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Confirmer la suppression ?')" style="color:red;">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <br>
    <button> <a href="{{ route('AdminDashboard') }}">Retour</a></button>
</body>
</html>
