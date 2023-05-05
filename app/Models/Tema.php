<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'nota_media',
    ];

    protected $table = 'temas';

    public function bloques(){
        return $this->belongsTo(Bloque::class);
    }

    public function examenes(){
        return $this->hasMany(Examen::class);
    }
}
