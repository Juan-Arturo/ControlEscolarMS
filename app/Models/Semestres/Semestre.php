<?php

namespace App\Models\Semestres;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{

    use HasFactory;

    
     // Definir la tabla explícitamente 
     protected $table = 'semestres';

    protected $fillable = [
        'nombre', 
        'descripcion',
        'fecha_inicio',
        'fecha_fin'
    ];
}
