@extends('layout')

@section('title', 'Biens')

@section('content')
 
    <div>
        <h1>Boutique de l'agence</h1>
    </div>

    @foreach ($biens as $bien)
        <div style="border: 1px solid #ccc; margin: 15px; padding: 10px;">
            <img src="{{ asset('storage/photos/' . $bien->photo) }}" alt="photo" style="width: 300px; height: auto;"><br><br>

            <strong>{{ $bien->titre }}</strong><br>
            <em>Type :</em> {{ $bien->typeBien->titre }}<br>
            <em>Description :</em> {{ $bien->description }}<br>
            <em>Adresse :</em> {{ $bien->adresse }} - {{ $bien->ville }}<br>
            <em>Superficie :</em> {{ $bien->superficie }} m²<br>
            <em>Prix :</em> {{ number_format($bien->prix, 0, ',', ' ') }} FCFA<br>
            <em>Ajouté par :</em> {{ $bien->agent->prenom }}<br>
            <em>Date d’ajout :</em> {{ $bien->date_ajout }}<br>
        </div>

        @guest('client')
    <p style="color: red; margin-top: 10px;">
        <strong>Connectez-vous pour pouvoir réserver ce bien.</strong>
        <a href="{{ route('client.connexion') }}" style="color: blue;">Se connecter</a>
    </p>
@endif
        @if(session('client'))
            <a href="{{ route('FormulaireReservation', $bien->id) }}" style="margin-top: 10px; display: inline-block; padding: 8px 15px; background-color: green; color: white; text-decoration: none;">
                Réserver ce bien
            </a>
        @endif
    @endforeach

@endsection