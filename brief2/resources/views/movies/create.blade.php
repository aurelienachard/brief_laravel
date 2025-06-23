@extends('layouts.app')
@section('content')

<h1>create recipe</h1>
<form method="POST" action="{{ route('movies.store') }}">
@csrf
    <div>
        <label for="titre">titre</label>
        <input type="text" name="titre" class="form-control">
    </div>

    <div>
        <label for="annee">annee</label>
        <input type="number" name="annee" class="form-control">
    </div>

    <div>
        <label for="note">note</label>
        <input type="number" step="0.1" name="note" class="form-control">
    </div>

    <div>
        <label for="commentaire">commentaire</label>
        <textarea name="commentaire" class="form-control"></textarea>
    </div>

    <button type="submit">creer le films</button>
</form>
@endsection