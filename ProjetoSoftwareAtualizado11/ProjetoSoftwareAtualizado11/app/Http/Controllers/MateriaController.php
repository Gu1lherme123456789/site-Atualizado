<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::with(['alunos', 'professores', 'assuntos'])->get();
        return response()->json($materias);
    }

    public function store(Request $request)
    {
        $materia = Materia::create($request->all());
        return response()->json($materia, 201);
    }

    public function show($id)
    {
        $materia = Materia::with(['alunos', 'professores', 'assuntos'])->findOrFail($id);
        return response()->json($materia);
    }

    public function update(Request $request, $id)
    {
        $materia = Materia::findOrFail($id);
        $materia->update($request->all());
        return response()->json($materia);
    }

    public function destroy($id)
    {
        Materia::destroy($id);
        return response()->json(null, 204);
    }
}
