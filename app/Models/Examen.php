<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Examen extends ApiModelFunctions
{
    use HasFactory;

    protected $fillable = [
    ];

    protected $table = 'examenes';

    public function temas()
    {
        return $this->belongsTo(Tema::class);
    }

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }
}
