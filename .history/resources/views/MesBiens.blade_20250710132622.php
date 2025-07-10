<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Biens</title>
</head>
<body>
    <h2>Mes biens ajoutés</h2>

    @foreach ($biens as $bien)
        <div style="border:1px solid #ccc; margin-bottom:20px; padding:10px;">
            <h4>{{ $bien->titre }}</h4>
            <p>{{ $bien->description }}</p>
            <p><strong>Statut :</strong> {{ ucfirst($bien->statut) }}</p>
            <img src="{{ asset('storage/photos/' . $bien->photo) }}" width="300" alt="photo du bien">

        
            <form method="POST" action="{{ route('statutBien', $bien->id) }}">
                @csrf
                @method('PUT')

                <label>Changer le statut :</label>
                <select name="statut" required>
                    <option {{ $bien->statut == 'disponible' ? 'selected' : '' }}>disponible</option>
                    <option {{ $bien->statut == 'loué' ? 'selected' : '' }}>loué</option>
                    <option {{ $bien->statut == 'vendu' ? 'selected' : '' }}>vendu</option>
                </select>

                <button type="submit">Mettre à jour</button>
            </form>

            <form method="POST" action="{{ route('agent.bien.supprimer', $bien->id) }}" style="margin-top:10px;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Confirmer la suppression ?')" style="color:red;">
                    Supprimer
                </button>
            </form>

        </div>
    @endforeach

    <br>
    <button> <a href="{{ route('AgentDashboard') }}">Retour</a></button>
</body>
</html>
