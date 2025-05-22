@extends('layouts.app')

@section('content')
<h1>les recettes</h1>
<div class="recipes-list">
    @foreach ($recipes as $recipe)
        <div class="recipe-item">
            <h2>{{ $recipe->titre }}</h2>
            <p>{{ $recipe->description }}</p>
            <a href="{{ route('recipes.edit', $recipe->id) }}">Modifier</a>
            <br>

            <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </div>
    @endforeach
</div>

<div>
    <a href="{{ route('recipes.create') }}">Ajouter une nouvelle recette</a>
</div>

