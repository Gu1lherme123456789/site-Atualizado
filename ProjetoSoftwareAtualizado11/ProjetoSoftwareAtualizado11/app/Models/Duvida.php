<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duvida extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'assunto_id'];

    public function assunto()
    {
        return $this->belongsTo(Assunto::class);
    }
}
