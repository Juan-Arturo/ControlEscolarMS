<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    // Permitir la asignación masiva de los campos 'grado' y 'grupo'
    protected $fillable = ['grado', 'grupo'];

    // Definir la tabla explícitamente
    protected $table = 'grupos';


    public function alumnos()
{
    return $this->belongsToMany(Alumno::class, 'grupo_alumno', 'grupo_id', 'alumno_id');
}

}
