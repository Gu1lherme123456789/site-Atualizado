<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssuntoController extends Controller
{
    public function index()
    {
        $assuntos = Assunto::with('materia')->get();
        return response()->json($assuntos);
    }

    public function store(Request $request)
    {
        $assunto = Assunto::create($request->all());
        return response()->json($assunto, 201);
    }

    public function show($id)
    {
        $assunto = Assunto::with('materia')->findOrFail($id);
        return response()->json($assunto);
    }

    public function update(Request $request, $id)
    {
        $assunto = Assunto::findOrFail($id);
        $assunto->update($request->all());
        return response()->json($assunto);
    }

    public function destroy($id)
    {
        Assunto::destroy($id);
        return response()->json(null, 204);
    }
}
