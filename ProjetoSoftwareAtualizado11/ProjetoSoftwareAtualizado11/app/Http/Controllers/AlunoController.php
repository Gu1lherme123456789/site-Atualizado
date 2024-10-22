<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return response()->json($alunos);
    }

    public function store(Request $request)
    {
        $aluno = Aluno::create($request->all());
        return response()->json($aluno, 201);
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return response()->json($aluno);
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        return response()->json($aluno);
    }

    public function destroy($id)
    {
        Aluno::destroy($id);
        return response()->json(null, 204);
    }
}
