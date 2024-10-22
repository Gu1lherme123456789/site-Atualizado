<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return response()->json($professores);
    }

    public function store(Request $request)
    {
        $professor = Professor::create($request->all());
        return response()->json($professor, 201);
    }

    public function show($id)
    {
        $professor = Professor::findOrFail($id);
        return response()->json($professor);
    }

    public function update(Request $request, $id)
    {
        $professor = Professor::findOrFail($id);
        $professor->update($request->all());
        return response()->json($professor);
    }

    public function destroy($id)
    {
        Professor::destroy($id);
        return response()->json(null, 204);
    }
}
