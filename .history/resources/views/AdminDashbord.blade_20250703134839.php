@extends('layout')

@section('title', 'Accueil')

@section('content')
 
    <div>
        <h1>Bienvenue {{ $admin->name }} </h1>
    </div>

@endsection