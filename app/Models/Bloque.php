<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bloque extends ApiModelFunctions
{
    use HasFactory;

    protected $table = 'bloques';

    protected $fillable = [
        'nombre'
    ];

    /**
     * Get the capitulo that owns the bloque.
     */
    public function capitulos()
    {
        return $this->belongsTo(Capitulo::class);
    }

    /**
     * Get the temas associated with the bloque.
     */
    public function temas()
    {
        return $this->hasMany(Tema::class);
    }
}
