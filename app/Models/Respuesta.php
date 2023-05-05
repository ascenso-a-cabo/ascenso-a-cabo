<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'texto',
        'valor',
        'pregunta_id',
    ];

    protected $table = 'respuestas';

    public function preguntas(){
        return $this->belongsTo(Pregunta::class);
    }
}
