<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Definição da classe AlunoController que lida com as operações de CRUD para o modelo Aluno
class AlunoController extends Controller
{
    // Método para retornar todos os alunos
    public function index()
    {
        // Recupera todos os registros da tabela 'alunos'
        $alunos = Aluno::all();
        // Retorna os alunos em formato JSON
        return response()->json($alunos);
    }

    // Método para armazenar um novo aluno no banco de dados
    public function store(Request $request)
    {
        // Cria um novo aluno com os dados fornecidos na requisição
        $aluno = Aluno::create($request->all());
        // Retorna o aluno criado com o status HTTP 201 (Criado)
        return response()->json($aluno, 201);
    }

    // Método para exibir os detalhes de um aluno específico
    public function show($id)
    {
        // Tenta encontrar um aluno pelo ID ou lança um erro 404 se não encontrado
        $aluno = Aluno::findOrFail($id);
        // Retorna os dados do aluno encontrado em formato JSON
        return response()->json($aluno);
    }
    // Método para atualizar as informações de um aluno específico
    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        return response()->json($aluno);
    }
    // Método para excluir um aluno específico
    public function destroy($id)
    {
        Aluno::destroy($id);
        return response()->json(null, 204);
    }
}
