<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends ApiModelFunctions
{
    use HasFactory;

    protected $fillable = [
        'enunciado',
        'tema_id',
    ];

    protected $table = 'preguntas';

    /*public function temas()
    {
        return $this->belongsTo(Tema::class);
    }*/

    public function bloques()
    {
        return $this->belongsTo(Bloque::class);
    }

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class);
    }
}
