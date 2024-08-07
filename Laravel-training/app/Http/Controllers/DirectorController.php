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
        // Validation et stockage du directeur
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
        // Validation et mise à jour du directeur
    }

    public function destroy($id)
    {
        // Suppression du directeur
    }
}
