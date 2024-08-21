<?php

namespace App\Http\Controllers;

use App\Models\infermier;
use Illuminate\Http\Request;

class InfermierController extends Controller
{
    public function index()
    {
        $infermiers = Infermier::all();
        return response()->json($infermiers);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_infe' => 'required|string|max:255',
            'sex' => 'required|string|max:10',
            'age' => 'required|integer|min:18',
            'date_recrt' => 'required|date',
            'adress' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:infermiers',
            'telphon' => 'required|string|max:15',
            'id_mal' => 'required|exists:maladies,id',
        ]);

        $infermier = Infermier::create($request->all());

        return response()->json($infermier, 201);
    }

    public function show($id)
    {
        $infermier = Infermier::all()->findOrFail($id);
        return response()->json($infermier);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_infe' => 'required|string|max:255',
            'sex' => 'required|string|max:10',
            'age' => 'required|integer|min:18',
            'date_recrt' => 'required|date',
            'adress' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:infermiers,email,' . $id,
            'telphon' => 'required|string|max:15',
            'id_mal' => 'required|exists:maladies,id',
        ]);

        $infermier = Infermier::findOrFail($id);
        $infermier->update($request->all());

        return response()->json($infermier);
    }

    public function destroy($id)
    {
        $infermier = Infermier::findOrFail($id);
        $infermier->delete();

        return response()->json(null, 204);
    }
}