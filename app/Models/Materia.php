<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

     // Definir la tabla explícitamente 
     protected $table = 'materias';

     protected $fillable = ['nombre'];
}
