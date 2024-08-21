<?php

namespace App\Http\Controllers;

use App\Models\patient_per;

use Illuminate\Http\Request;

class PatientPerController extends Controller
{
    public function index()
    {
        $patients = Patient_per::all();
        return response()->json($patients);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_pat' => 'required|string|max:255',
            'post_bom_pat' => 'required|string|max:255',
            'sex_pat' => 'required|string|max:10',
            'adresse_pat' => 'required|string|max:255',
            'telephone_pat' => 'required|string|max:15',
            'email_path' => 'required|string|email|max:255|unique:patient_pers',
            'poids_pat' => 'required|string|max:50',
            'date_naissance_pat' => 'required|date',
            'id_infermier' => 'required|exists:infermiers,id',
            'id_malde' => 'required|exists:maladies,id',
            'id_doctore' => 'required|exists:doctores,id',
        ]);

        $patient = Patient_per::create($request->all());

        return response()->json($patient, 201);
    }

    public function show($id)
    {
        $patient = Patient_per::all()->findOrFail($id);
        return response()->json($patient);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_pat' => 'required|string|max:255',
            'post_bom_pat' => 'required|string|max:255',
            'sex_pat' => 'required|string|max:10',
            'adresse_pat' => 'required|string|max:255',
            'telephone_pat' => 'required|string|max:15',
            'email_path' => 'required|string|email|max:255|unique:patient_pers,email_path,' . $id,
            'poids_pat' => 'required|string|max:50',
            'date_naissance_pat' => 'required|date',
            'id_infermier' => 'required|exists:infermiers,id',
            'id_malde' => 'required|exists:maladies,id',
            'id_doctore' => 'required|exists:doctores,id',
        ]);

        $patient = Patient_per::findOrFail($id);
        $patient->update($request->all());

        return response()->json($patient);
    }

    public function destroy($id)
    {
        $patient = Patient_per::findOrFail($id);
        $patient->delete();

        return response()->json(null, 204);
    }
}
