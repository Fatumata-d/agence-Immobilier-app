@extends('layout')

@section('title', 'Tableau de Bord')

@section('content')


    <h2>Bienvenue Agent {{ session('agent')->prenom ?? '' }}</h2>
    <p>Voici le tableau de bord.</p>

    <div>
        <a href="{{ route('RendezVous') }}">Rendez-Vous</a>
    </div>

    <div>
        <a href="{{ route('ajouterBiens') }}">Ajouter un bien</a>
    </div>
    <br>
    <a href="{{ route('deconnexion-agent') }}">Se déconnecter</a>

@endsection