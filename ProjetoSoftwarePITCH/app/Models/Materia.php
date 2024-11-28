<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    // Define os campos que podem ser preenchidos em massa (mass assignment)
    protected $fillable = ['nome'];

    // Relacionamento muitos-para-muitos com o modelo Aluno
    public function alunos()
    {
        // Define a relação muitos-para-muitos entre Materia e Aluno
        return $this->belongsToMany(Aluno::class);
    }

    // Relacionamento muitos-para-muitos com o modelo Professor
    public function professores()
    {
        // Define a relação muitos-para-muitos entre Materia e Professor
        return $this->belongsToMany(Professor::class);
    }

    // Relacionamento um-para-muitos com o modelo Assunto
    public function assuntos()
    {
        // Define a relação um-para-muitos entre Materia e Assunto
        return $this->hasMany(Assunto::class);
    }
}
