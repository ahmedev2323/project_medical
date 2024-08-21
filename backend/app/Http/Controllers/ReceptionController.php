<?php

namespace App\Http\Controllers;

use App\Models\reception;
use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    public function index()
    {
        $receptions = Reception::all();
        return response()->json($receptions);
    }

    public function store(Request $request)
    {
        $request->validate([
            'type_consult' => 'required|string|max:255',
            'observation' => 'required|string',
            'frais_consult' => 'required|numeric',
            'date_consult' => 'required|date',
            'id_pat' => 'required|exists:patient_pers,id',
            'id_per' => 'required|exists:infermiers,id',
            'id_doctore' => 'required|exists:doctores,id',
        ]);

        $reception = reception::create($request->all());

        return response()->json($reception, 201);
    }

    public function show($id)
    {
        $reception = Reception::all()->findOrFail($id);
        return response()->json($reception);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type_consult' => 'required|string|max:255',
            'observation' => 'required|string',
            'frais_consult' => 'required|numeric',
            'date_consult' => 'required|date',
            'id_pat' => 'required|exists:patient_pers,id',
            'id_per' => 'required|exists:infermiers,id',
            'id_doctore' => 'required|exists:doctores,id',
        ]);

        $reception = reception::findOrFail($id);
        $reception->update($request->all());

        return response()->json($reception);
    }

    public function destroy($id)
    {
        $reception = reception::findOrFail($id);
        $reception->delete();

        return response()->json(null, 204);
    }
}