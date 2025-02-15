<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estadistica extends ApiModelFunctions
{
    use HasFactory;

    protected $table = 'estadisticas';

    protected $fillable = [
        'media_total_nota',
        'media_examenes_realizados',
    ];
}
