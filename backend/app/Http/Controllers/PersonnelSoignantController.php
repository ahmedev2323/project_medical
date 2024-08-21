<?php

namespace App\Http\Controllers;

use App\Models\personnel_soignant;
use Illuminate\Http\Request;

class PersonnelSoignantController extends Controller
{
    public function index()
    {
        $personnelSoignants = Personnel_soignant::all();
        return response()->json($personnelSoignants);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_per' => 'required|string|max:255',
            'post_no_per' => 'required|string|max:255',
            'sex_pers' => 'required|string|max:10',
            'garde_pers' => 'required|string|max:255',
            'function_pers' => 'required|string|max:255',
            'telphon_person' => 'required|string|max:15',
            'email_pers' => 'required|string|email|max:255|unique:personnel_soignants',
            'adress_pers' => 'required|string|max:255',
            'date_naisanse' => 'required|date',
            'date_recutment_pers' => 'required|date',
            'id_servise' => 'required|exists:services,id',
        ]);

        $personnelSoignant = Personnel_soignant::create($request->all());

        return response()->json($personnelSoignant, 201);
    }

    public function show($id)
    {
        $personnelSoignant = Personnel_soignant::all()->findOrFail($id);
        return response()->json($personnelSoignant);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_per' => 'required|string|max:255',
            'post_no_per' => 'required|string|max:255',
            'sex_pers' => 'required|string|max:10',
            'garde_pers' => 'required|string|max:255',
            'function_pers' => 'required|string|max:255',
            'telphon_person' => 'required|string|max:15',
            'email_pers' => 'required|string|email|max:255|unique:personnel_soignants,email_pers,' . $id,
            'adress_pers' => 'required|string|max:255',
            'date_naisanse' => 'required|date',
            'date_recutment_pers' => 'required|date',
            'id_servise' => 'required|exists:services,id',
        ]);

        $personnelSoignant = Personnel_soignant::findOrFail($id);
        $personnelSoignant->update($request->all());

        return response()->json($personnelSoignant);
    }

    public function destroy($id)
    {
        $personnelSoignant = Personnel_soignant::findOrFail($id);
        $personnelSoignant->delete();

        return response()->json(null, 204);
    }
}