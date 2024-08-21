<?php

namespace App\Http\Controllers;

use App\Models\maladie;
use Illuminate\Http\Request;

class MaladieController extends Controller
{
    public function index()
    {
        return Maladie::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'famille_malade' => 'required|string|max:255',
            'sous_famille' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'prix_traitement' => 'required|string|max:255',
        ]);

        $maladie = Maladie::create($validatedData);

        return response()->json($maladie, 201);
    }

    public function show($id)
    {
        $maladie = Maladie::findOrFail($id);
        return response()->json($maladie);
    }

    public function update(Request $request, $id)
    {
        $maladie = Maladie::findOrFail($id);

        $validatedData = $request->validate([
            'famille_malade' => 'required|string|max:255',
            'sous_famille' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'prix_traitement' => 'required|string|max:255',
        ]);

        $maladie->update($validatedData);

        return response()->json($maladie);
    }

    public function destroy($id)
    {
        $maladie = Maladie::findOrFail($id);
        $maladie->delete();

        return response()->json(null, 204);
    }
}
