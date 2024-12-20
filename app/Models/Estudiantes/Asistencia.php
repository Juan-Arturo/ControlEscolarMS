<?php

namespace App\Models\Estudiantes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    
    // Definir la tabla explícitamente
    protected $table = 'asistencias';

    //Iincluir todos los campos necesarios
    protected $fillable = ['alumno_id', 'grupo_id', 'materia_id', 'fecha', 'presente'];
}
