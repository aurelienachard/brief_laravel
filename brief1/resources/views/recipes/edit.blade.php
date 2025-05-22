@extends('layouts.app')

@section('content')
<h1>Modifier la recette</h1>

<form method="POST" action="{{ route('recipes.update', $recipe->id) }}">
    @csrf
    @method('PUT')
    
    <div>
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" value="{{ $recipe->titre }}" class="form-control">
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control">{{ $recipe->description }}</textarea>
    </div>

    <button type="submit">Mettre à jour la recette</button>
</form>
@endsection
