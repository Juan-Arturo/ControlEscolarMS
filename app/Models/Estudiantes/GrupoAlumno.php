<?php

namespace App\Models\Estudiantes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoAlumno extends Model
{
    use HasFactory;


     // Define la tabla si no sigue la convención
     protected $table = 'grupo_alumno'; // Ajusta esto según el nombre de tu tabla

     // Especifica los campos que se pueden llenar masivamente
     protected $fillable = [
         'grupo_id',
         'alumno_id',
     ];
 
     // Relaciones entre modelos(tablas)
     public function grupo()
     {
         return $this->belongsTo(Grupo::class);
     }
 
     public function alumno()
     {
         return $this->belongsTo(Alumno::class);
     }
}
