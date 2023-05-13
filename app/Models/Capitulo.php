<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    use HasFactory;

    protected $table = 'capitulos';

    protected $fillable = [
        'nombre'
    ];

    public function bloques(){
        return $this->hasMany(Bloque::class);
    }
}
