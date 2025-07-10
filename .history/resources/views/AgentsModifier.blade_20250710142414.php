<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification - Agent</title>
</head>
<body>
    <h2>Modifier l'agent {{ $agent->prenom }} {{ $agent->nom }}</h2>

    <form method="POST" action="{{ route('modifieragents', $agent->id) }}">
        @csrf
        @method('PUT')

        <label>Nom :</label>
        <input type="text" name="nom" value="{{ $agent->nom }}" required><br><br>

        <label>Prénom :</label>
        <input type="text" name="prenom" value="{{ $agent->prenom }}" required><br><br>

        <label>Email :</label>
        <input type="email" name="email" value="{{ $agent->email }}" required><br><br>

        <label>Téléphone :</label>
        <input type="text" name="telephone" value="{{ $agent->telephone }}" required><br><br>

        <label>Date d'embauche :</label>
        <input type="date" name="date_embauche" value="{{ old('date_embauche', $agent->date_embauche) }}" required><br><br>

        <label>Statut :</label>
        <select name="statut">
            <option value="1" {{ $agent->statut ? 'selected' : '' }}>Actif</option>
            <option value="0" {{ !$agent->statut ? 'selected' : '' }}>Inactif</option>
        </select><br><br>

        <label>Nouveau mot de passe :</label>
        <input type="password" name="motDePasse" placeholder="Laisser vide pour ne pas changer"><br><br>


        <button type="submit">Enregistrer les modifications</button>
    </form>
</body>
</html>