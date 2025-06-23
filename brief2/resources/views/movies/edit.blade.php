@extends('layouts.app')

@section('content')
<h1>Modifier le film</h1>

<form method="POST" action="{{ route('movies.update', $movie->id) }}">
    @csrf
    @method('PUT')
    
    <div>
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" value="{{ $movie->titre }}" class="form-control">
    </div>

    <div>
        <label for="annee">Année</label>
        <input type="number" name="annee" id="annee" value="{{ $movie->annee }}" class="form-control">
    </div>

    <div>
        <label for="note">Note</label>
        <input type="number" step="0.1" name="note" id="note" value="{{ $movie->note }}" class="form-control">
    </div>

    <div>
        <label for="commentaire">Commentaire</label>
        <textarea name="commentaire" id="commentaire" class="form-control">{{ $movie->commentaire }}</textarea>
    </div>

    <button type="submit">Mettre à jour le film</button>
</form>
@endsection
