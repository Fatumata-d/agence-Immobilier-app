   @extends('layout')

@section('title', 'Modifier un Bien')

@section('content')
<div class="container py-5" style="max-width: 700px;">
    <h2 class="mb-4 text-center">Modifier le bien : {{ $bien->titre }}</h2>

    <form method="POST" action="{{ route('BienMettreAJour', $bien->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="type_bien_id" class="form-label">Type de Bien :</label>
            <select name="type_bien_id" id="type_bien_id" class="form-select" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ $type->id == $bien->type_bien_id ? 'selected' : '' }}>
                        {{ $type->titre }}
                    </option>
                @endforeach
            </select>
            <div class="invalid-feedback">Veuillez sélectionner un type de bien.</div>
        </div>

        <div class="mb-3">
            <label for="titre" class="form-label">Titre :</label>
            <input type="text" id="titre" name="titre" class="form-control" value="{{ $bien->titre }}" required>
            <div class="invalid-feedback">Veuillez saisir un titre.</div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <textarea id="description" name="description" class="form-control" rows="4" required>{{ $bien->description }}</textarea>
            <div class="invalid-feedback">Veuillez saisir une description.</div>
        </div>

        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse :</label>
            <input type="text" id="adresse" name="adresse" class="form-control" value="{{ $bien->adresse }}" required>
            <div class="invalid-feedback">Veuillez saisir une adresse.</div>
        </div>

        <div class="mb-3">
            <label for="ville" class="form-label">Ville :</label>
            <input type="text" id="ville" name="ville" class="form-control" value="{{ $bien->ville }}" required>
            <div class="invalid-feedback">Veuillez saisir une ville.</div>
        </div>

        <div class="mb-3">
            <label for="superficie" class="form-label">Superficie (m²) :</label>
            <input type="number" id="superficie" name="superficie" class="form-control" value="{{ $bien->superficie }}" min="1" required>
            <div class="invalid-feedback">Veuillez saisir une superficie valide.</div>
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">Prix (FCFA) :</label>
            <input type="number" step="0.01" id="prix" name="prix" class="form-control" value="{{ $bien->prix }}" min="0" required>
            <div class="invalid-feedback">Veuillez saisir un prix valide.</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Photo actuelle :</label><br>
            <img src="{{ asset('storage/photos/' . $bien->photo) }}" alt="Photo actuelle" class="img-fluid rounded" style="max-width: 200px;">
        </div>

        <div class="mb-4">
            <label for="photo" class="form-label">Changer la photo :</label>
            <input type="file" id="photo" name="photo" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary w-100">Enregistrer les modifications</button>
    </form>

    <a href="{{ route('') }}" class="btn btn-outline-secondary btn-sm mt-auto align-self-start">Modifier ce bien</a>
</div>

<script>
// Bootstrap form validation example (optional)
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
@endsection
