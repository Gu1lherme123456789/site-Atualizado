<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class);
    }

    public function professores()
    {
        return $this->belongsToMany(Professor::class);
    }

    public function assuntos()
    {
        return $this->hasMany(Assunto::class);
    }
}
