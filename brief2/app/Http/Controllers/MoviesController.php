<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movies;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('sort_by_rating')) {
            $movies = movies::orderBy('note', 'desc')->get();
        } elseif ($request->has('sort_by_year')) { 
            $movies = movies::orderBy('annee', 'desc')->get();
        } else { 
            $movies = movies::all();
        }
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'annee' => 'required|integer',
            'note' => 'required|numeric',
            'commentaire' => 'required|string',
        ]);

        movies::create($request->all());
        return redirect()->route('movies.index')->with('success', 'Movie created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(movies $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(movies $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, movies $movie)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'annee' => 'required|integer', 
            'note' => 'required|numeric',
            'commentaire' => 'required|string',
        ]);

        $movie->update($request->all());
        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(movies $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }
}
