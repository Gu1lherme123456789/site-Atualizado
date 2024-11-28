<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           // Criação da tabela 'materias' no banco de dados
        Schema::create('materias', function (Blueprint $table) {
            // Cria uma coluna 'id' do tipo BIGINT auto-incremental como chave primária
            $table->id();
            // Cria uma coluna 'nome' do tipo STRING
            $table->string('nome');
             // Se um aluno for deletado, todas as matérias associadas a esse aluno também serão removidas ('cascade')
            $table->foreignId('aluno_id')->constrained()->onDelete('cascade');
             // Cria as colunas 'created_at' e 'updated_at' para armazenar as datas de criação e modificação dos registros
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Deleta a tabela 'materias' caso ela exista
        Schema::dropIfExists('materias');
    }
}
