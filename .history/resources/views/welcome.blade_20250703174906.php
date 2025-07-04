@extends('layout')

@section('title', 'Accueil')

@section('content')
 
    <div>
        <h1>Bienvenue dans IDA IMMO</h1>
    </div>
    <br>

    <div>
        <a href=" {{ route('connexionAdmin') }}">Reserver</a>
    </div>
@endsection