  @extends('layout')

@section('title', 'Liste des Clients')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Liste des Clients</h2>

    @if ($clients->isEmpty())
        <div class="alert alert-info text-center">Aucun client enregistré pour le moment.</div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <th>Date de création</th>
                        <th>Nombre de réservations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>{{ $client->adresse }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->created_at->format('d/m/Y') }}</td>
                        <td>{{ $client->reservations->count() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    <div class="text-center mt-4">
        <a href="{{ route('AdminDashboard') }}" class="btn btn-secondary">← Retour</a>
    </div>
</div>
@endsection
