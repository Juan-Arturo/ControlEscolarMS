<?php

namespace App\Models\Estudiantes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

     // Definir la tabla explícitamente 
     protected $table = 'alumnos';
     protected $primaryKey = 'matricula';


    // Especifica los campos que se pueden llenar masivamente
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'especialidad',
        'seguro_medico',
        'curp',
        'fecha_nacimiento',
        'grupo_id',
        
    ];

    //Relación con el modelo Grupo
    public function grupo()
    {
        return $this->belongsToMany(Grupo::class, 'grupo_alumno', 'alumno_id', 'grupo_id');
    }
    

    
}
