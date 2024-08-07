<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Director;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('director')->get();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        $directors = Director::all();
        return view('movies.create', compact('directors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'release_year' => 'required|integer',
            'director_id' => 'required|exists:directors,id'
        ]);

        Movie::create($request->all());
        return redirect()->route('movies.index');
    }

    public function edit(Movie $movie)
    {
        $directors = Director::all();
        return view('movies.edit', compact('movie', 'directors'));
    }

    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required',
            'release_year' => 'required|integer',
            'director_id' => 'required|exists:directors,id'
        ]);

        $movie->update($request->all());
        return redirect()->route('movies.index');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
