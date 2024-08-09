<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index()
    {
        $directors = Director::all();
        return view('directors.index', compact('directors'));
    }

    public function create()
    {
        return view('directors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create and save the director
        $director = new Director();
        $director->name = $request->input('name');
        $director->save();

        // Redirection après la création
        return redirect()->route('directors.index')->with('success', 'Director created successfully.');
    }

    public function show($id)
    {
        $director = Director::findOrFail($id);
        return view('directors.show', compact('director'));
    }

    public function edit($id)
    {
        $director = Director::findOrFail($id);
        return view('directors.edit', compact('director'));
    }

    public function update(Request $request, $id)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Recherche du réalisateur et mise à jour des données
        $director = Director::findOrFail($id);
        $director->name = $request->input('name');
        $director->save();

        // Redirection après la mise à jour
        return redirect()->route('directors.index')->with('success', 'Director updated successfully.');
    }

    public function destroy($id)
    {
        // Recherche du réalisateur et suppression
        $director = Director::findOrFail($id);
        $director->delete();

        // Redirection après la suppression
        return redirect()->route('directors.index')->with('success', 'Director deleted successfully.');
    }
}
