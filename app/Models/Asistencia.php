<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    // Definir la tabla explícitamente
    protected $table = 'asistencias';

    protected $fillable = ['alumno_id', 'grupo_id', 'fecha', 'presente'];
}
