<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'materia_id'];

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function duvidas()
    {
        return $this->hasMany(Duvida::class);
    }
}
