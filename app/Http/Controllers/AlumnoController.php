<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        return Alumno::all();
    }

    public function show($id)
    {
        return Alumno::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:32',
            'telefono' => 'nullable|string|max:16',
            'edad' => 'nullable|integer',
            'password' => 'required|string|max:64',
            'email' => 'required|string|email|max:64|unique:alumnos',
            'sexo' => 'nullable|string',
        ]);

        return Alumno::create($validated);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:32',
            'telefono' => 'nullable|string|max:16',
            'edad' => 'nullable|integer',
            'password' => 'required|string|max:64',
            'email' => 'required|string|email|max:64|unique:alumnos,email,' . $id,
            'sexo' => 'nullable|string',
        ]);

        $alumno = Alumno::findOrFail($id);
        $alumno->update($validated);
        return $alumno;
    }

    public function destroy($id)
    {
        Alumno::destroy($id);
        return response()->json(['message' => 'Alumno deleted']);
    }
}
