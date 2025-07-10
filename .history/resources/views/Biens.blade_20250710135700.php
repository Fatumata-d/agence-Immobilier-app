@extends('layout')

@section('title', 'Biens')

@section('content')
 
    <div>
        <h1>Boutique de l'agence</h1>
    </div>

    <form method="GET" action="{{ route('Biens') }}">
        <label for="type_bien_id">Filtrer par type de bien :</label>
        <select name="type_bien_id" id="type_bien_id" onchange="this.form.submit()">
            <option value="">-- Tous les types --</option>
            @foreach($types as $type)
                <option value="{{ $type->id }}" {{ request('type_bien_id') == $type->id ? 'selected' : '' }}>
                    {{ $type->titre }}
                </option>
            @endforeach
        </select>
    </form>
    <br>
    

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
            <em>Statut :</em> <strong>{{ ucfirst($bien->statut) }}</strong><br> 
        </div>

        @if(session('client'))
            <a href="{{ route('FormulaireReservation', $bien->id) }}" style="...">
                Réserver ce bien
            </a>
        @else
            <p style="color: red; margin-top: 10px;">
                <strong>Connectez-vous pour pouvoir réserver ce bien.</strong>
                <a href="{{ route('connexionClient') }}" style="color: blue;">Se connecter</a>
            </p>
        @endif
    @endforeach
    <br> <br>
    <button><a href="{{ route('welcome') }}">Retour</a></button>

@endsection