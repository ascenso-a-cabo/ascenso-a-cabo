<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Capitulo extends ApiModelFunctions
{
    use HasFactory;

    //Arreglar el problema de que no se puede asignar un valor por defecto a un atributo de tipo string

    protected string $nombre = ''; // Inicializar con un valor predeterminado

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->nombre = ''; // Asignar un valor en el constructor si es necesario
    }

    //Fin de la solución

    protected $table = 'capitulos';

    protected $fillable = [
        'nombre'
    ];

    public function bloques()
    {
        return $this->hasMany(Bloque::class);
    }
}
