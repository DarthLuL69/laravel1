<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function index()
    {
        return DB::table('alumnos')->get();
    }

    public function show($id)
    {
        return DB::table('alumnos')->where('id', $id)->first();
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

        DB::table('alumnos')->insert($validated);
        return response()->json(['message' => 'Alumno created'], 201);
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

        DB::table('alumnos')->where('id', $id)->update($validated);
        return response()->json(['message' => 'Alumno updated'], 200);
    }

    public function destroy($id)
    {
        DB::table('alumnos')->where('id', $id)->delete();
        return response()->json(['message' => 'Alumno deleted'], 200);
    }
}
