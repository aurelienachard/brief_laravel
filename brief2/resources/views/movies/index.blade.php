@extends('layouts.app')

@section('content')
<h1>les films</h1>

<div>
        <a href="{{ route('movies.index') }}" >
            Ordre normal
        </a>
        <!-- Cette fonction Laravel conserve tous les paramètres actuels de l'URL et ajoute/modifie seulement le paramètre spécifié -->
        <a href="{{ request()->fullUrlWithQuery(['sort_by_rating' => '1']) }}" >
            Trier par note
        </a>
        
        <a href="{{ request()->fullUrlWithQuery(['sort_by_year' => '1']) }}" >
            Trier par année
        </a>
</div>

<div class="movies-list">
    @foreach ($movies as $movie)
        <div class="movie-item">
            <h2>{{ $movie->titre }}</h2>
            <p>Année: {{ $movie->annee }}</p>
            <p>Note: {{ $movie->note }}/5</p>
            <p>Commentaire: {{ $movie->commentaire }}</p>
            <a href="{{ route('movies.edit', $movie->id) }}">Modifier</a>
            <br>

            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </div>
    @endforeach
</div>

<div>
    <a href="{{ route('movies.create') }}">Ajouter un nouveau film</a>
</div>
