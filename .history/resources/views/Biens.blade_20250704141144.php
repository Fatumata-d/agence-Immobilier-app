@extends('layout')

@section('title', 'Biens')

@section('content')
 
    <div>
        <h1>Boutique de l'agence</h1>
    </div>

    @foreach ($biens as $bien)
        <div style="border: 1px solid #ccc; margin: 15px; padding: 10px;">
            <img src="{{ asset('storage/' . $bien->photo) }}" alt="photo" style="width: 300px; height: auto;"><br><br>

            <strong>{{ $bien->titre }}</strong><br>
            <em>Type :</em> {{ $bien->type->titre }}<br>
            <em>Description :</em> {{ $bien->description }}<br>
            <em>Adresse :</em> {{ $bien->adresse }} - {{ $bien->ville }}<br>
            <em>Superficie :</em> {{ $bien->superficie }} m²<br>
            <em>Prix :</em> {{ number_format($bien->prix, 0, ',', ' ') }} FCFA<br>
            <em>Ajouté par :</em> {{ $bien->agent->prenom }}<br>
            <em>Date d’ajout :</em> {{ $bien->date_ajout }}<br>
        </div>
    @endforeach

@endsection