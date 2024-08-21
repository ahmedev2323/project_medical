<?php

namespace App\Http\Controllers;

use App\Models\doctore;
use Illuminate\Http\Request;

class DoctoreController extends Controller
{
    public function index()
    {
        $doctors = Doctore::all();
        return response()->json($doctors);
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'tealphon' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:doctores',
            'date_debute_travaill' => 'required|date',
            'date_fin_travaill' => 'nullable|date',
        ]);

        $doctor = Doctore::create($request->all());

        return response()->json($doctor, 201);
    }

    public function show($id)
    {
        $doctor = Doctore::findOrFail($id);
        return response()->json($doctor);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'tealphon' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:doctores,email,' . $id,
            'date_debute_travaill' => 'required|date',
            'date_fin_travaill' => 'nullable|date',
        ]);

        $doctor = Doctore::findOrFail($id);
        $doctor->update($request->all());

        return response()->json($doctor);
    }

    public function destroy($id)
    {
        $doctor = Doctore::findOrFail($id);
        $doctor->delete();

        return response()->json(null, 204);
    }
}