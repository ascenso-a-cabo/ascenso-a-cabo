<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloque extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function capitulos(){
        return $this->belongsTo(Capitulo::class);
    }

    public function temas(){
        return $this->hasMany(Tema::class);
    }
}
