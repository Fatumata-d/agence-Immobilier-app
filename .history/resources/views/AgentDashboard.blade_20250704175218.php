@extends('layout')

@section('title', 'Tableau de Bord')

@section('content')


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Agent</title>
</head>
<body>
    <h2>Bienvenue Agent {{ session('agent')->prenom ?? '' }}</h2>
    <p>Voici le tableau de bord.</p>

    <div>
        <a href="{{ route('ajouterBiens') }}">Ajouter un bien</a>
    </div>
    <br>
    <a href="{{ route('deconnexion-agent') }}">Se déconnecter</a>
</body>
</html>
@endsection