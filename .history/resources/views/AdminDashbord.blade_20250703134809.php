@extends('layout')

@section('title', 'Accueil')

@section('content')
 
    <div>
        <h1>Bienvenue {{ $client->name }} </h1>
    </div>

@endsection