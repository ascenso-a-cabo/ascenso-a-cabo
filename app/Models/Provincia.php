<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'nota_media',
    ];

    protected $table = 'provincias';

    /*public function users()
    {
        return $this->belongsToMany(User::class);
    }*/
}
