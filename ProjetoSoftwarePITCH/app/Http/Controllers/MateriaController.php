<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Definição da classe MateriaController que lida com as operações de CRUD para o modelo Materia
class MateriaController extends Controller
{
    // Método para retornar todas as matérias com suas relações (alunos, professores, assuntos)
    public function index()
    {
        // Recupera todas as matérias, incluindo os dados relacionados de alunos, professores e assuntos
        $materias = Materia::with(['alunos', 'professores', 'assuntos'])->get();
        return response()->json($materias);
    }

    // Método para armazenar uma nova matéria no banco de dados
    public function store(Request $request)
    {
        // Cria uma nova matéria com os dados fornecidos na requisição
        $materia = Materia::create($request->all());
        return response()->json($materia, 201);
    }

    // Método para exibir os detalhes de uma matéria específica, incluindo suas relações
    public function show($id)
    {
        $materia = Materia::with(['alunos', 'professores', 'assuntos'])->findOrFail($id);
        return response()->json($materia);
    }

    // Método para atualizar as informações de uma matéria específica
    public function update(Request $request, $id)
    {
        $materia = Materia::findOrFail($id);
        $materia->update($request->all());
        return response()->json($materia);
    }
    // Método para excluir uma matéria específica
    public function destroy($id)
    {
        // Exclui a matéria pelo ID
        Materia::destroy($id);
        return response()->json(null, 204);
    }
}
