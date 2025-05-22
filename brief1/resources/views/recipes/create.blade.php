@extends('layouts.app')
@section('content')

<h1>create recipe</h1>
<form method="POST" action="{{ route('recipes.store') }}">
@csrf
    <div>
        <label for="nom">titre</label>
        <input type="text" name="titre" class="form-control">
    </div>

    <div>
        <label for="description">description</label>
        <input type="text" name="description" class="form-control">
    </div>

    <button type="submit">creer la recette</button>
</form>
@endsection