@extends('layout')

@section('title', 'Accueil')

@section('content')
 
    <div>
        <h1>Bienvenue dans IDA IMMO</h1>
    </div>
    <br>

    <div>
        <a href=" {{ route('connexionAdmin') }}FormulaireReservation">Reserver</a>
    </div>
@endsection