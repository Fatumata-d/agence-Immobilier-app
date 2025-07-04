

@extends('layouts.app')

@section('content')
    <h2>Mes biens ajoutés</h2>

    @foreach ($biens as $bien)
        <div style="border:1px solid #ccc; margin-bottom:20px; padding:10px;">
            <h4>{{ $bien->titre }}</h4>
            <p>{{ $bien->description }}</p>
            <img src="{{ asset('storage/photos/' . $bien->photo) }}" width="300" alt="photo">
        </div>
    @endforeach
@endsection
