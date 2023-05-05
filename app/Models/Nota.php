<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nota',
    ];

    protected $table = 'notas';

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function examenes(){
        return $this->belongsTo(Examen::class);
    }
}
