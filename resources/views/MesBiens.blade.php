  @extends('layout')

@section('title', 'Mes Biens')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Mes biens ajoutés</h2>

    @forelse ($biens as $bien)
    <div class="card mb-4 shadow">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/photos/' . $bien->photo) }}" class="img-fluid rounded-start" alt="Photo du bien {{ $bien->titre }}">
            </div>
            <div class="col-md-8">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">{{ $bien->titre }}</h4>
                    <p class="card-text">{{ $bien->description }}</p>
                    <p class="card-text"><strong>Statut :</strong> <span class="badge 
                        @if($bien->statut == 'disponible') bg-success
                        @elseif($bien->statut == 'loué') bg-warning
                        @elseif($bien->statut == 'vendu') bg-danger
                        @else bg-secondary @endif
                        ">{{ ucfirst($bien->statut) }}</span></p>

                    <form method="POST" action="{{ route('statutBien', $bien->id) }}" class="mb-3">
                        @csrf
                        @method('PUT')

                        <label for="statut-{{ $bien->id }}" class="form-label">Changer le statut :</label>
                        <select name="statut" id="statut-{{ $bien->id }}" class="form-select w-auto d-inline-block me-2" required>
                            <option value="disponible" {{ $bien->statut == 'disponible' ? 'selected' : '' }}>Disponible</option>
                            <option value="loué" {{ $bien->statut == 'loué' ? 'selected' : '' }}>Loué</option>
                            <option value="vendu" {{ $bien->statut == 'vendu' ? 'selected' : '' }}>Vendu</option>
                        </select>

                        <button type="submit" class="btn btn-primary btn-sm">Mettre à jour</button>
                    </form>

                    <form method="POST" action="{{ route('supprimerBien', $bien->id) }}" onsubmit="return confirm('Confirmer la suppression ?');" class="mb-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>

                    <a href="{{ route('modifierBien', $bien->id) }}" class="btn btn-outline-secondary btn-sm mt-auto align-self-start">Modifier ce bien</a>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="alert alert-info text-center">Vous n'avez encore ajouté aucun bien.</div>
    @endforelse

    <div class="text-center mt-4">
        <a href="{{ route('AgentDashboard') }}" class="btn btn-secondary">← Retour</a>
    </div>
</div>
@endsection
