@extends('layout')

@section('title', 'Accueil')

@section('content')
 
    <div>
        <h1>Bienvenue {{ $admin->email }} </h1>
    </div>

@endsection