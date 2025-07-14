  @extends('layout')

@section('title', 'Liste des Agents')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Liste des Agents</h2>

    @if ($agents->isEmpty())
        <div class="alert alert-info text-center">Aucun agent enregistré pour le moment.</div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Date d'embauche</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agents as $agent)
                    <tr>
                        <td>{{ $agent->id }}</td>
                        <td>{{ $agent->nom }}</td>
                        <td>{{ $agent->prenom }}</td>
                        <td>{{ $agent->email }}</td>
                        <td>{{ $agent->telephone }}</td>
                        <td>{{ \Carbon\Carbon::parse($agent->date_embauche)->format('d/m/Y') }}</td>
                        <td>
                            @if($agent->statut)
                                <span class="badge bg-success">Actif</span>
                            @else
                                <span class="badge bg-secondary">Inactif</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('AgentsModifier', $agent->id) }}" class="btn btn-sm btn-primary me-2">Modifier</a>

                            <form action="{{ route('AgentsSupprimer', $agent->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirmer la suppression ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                        </td>
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
