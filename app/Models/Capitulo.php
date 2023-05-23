<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Capitulo extends ApiModelFunctions
{
    use HasFactory;

    public mixed $nombre;
    protected $table = 'capitulos';

    protected $fillable = [
        'nombre'
    ];

    public function bloques()
    {
        return $this->hasMany(ApiModelFunctions::class);
    }
}
