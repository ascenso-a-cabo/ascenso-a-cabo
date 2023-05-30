<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends ApiModelFunctions
{
    use HasFactory;

    protected $fillable = [
        'nota',
    ];

    protected $table = 'notas';

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function bloques()
    {
        return $this->belongsTo(Bloque::class);
    }
}
