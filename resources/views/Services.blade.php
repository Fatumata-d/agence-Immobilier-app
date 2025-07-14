  @extends('layout')

@section('title', 'Services')

@section('content')
<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="display-5">Les Services Proposés</h1>
    </div>

    <div class="text-center">
        <a href="{{ route('Biens') }}" class="btn btn-primary btn-lg">
            Réserver un bien
        </a>
    </div>
</div>
@endsection
