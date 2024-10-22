<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuvidaController extends Controller
{
    public function index()
    {
        $duvidas = Duvida::with('assunto')->get();
        return response()->json($duvidas);
    }

    public function store(Request $request)
    {
        $duvida = Duvida::create($request->all());
        return response()->json($duvida, 201);
    }

    public function show($id)
    {
        $duvida = Duvida::with('assunto')->findOrFail($id);
        return response()->json($duvida);
    }

    public function update(Request $request, $id)
    {
        $duvida = Duvida::findOrFail($id);
        $duvida->update($request->all());
        return response()->json($duvida);
    }

    public function destroy($id)
    {
        Duvida::destroy($id);
        return response()->json(null, 204);
    }
}
