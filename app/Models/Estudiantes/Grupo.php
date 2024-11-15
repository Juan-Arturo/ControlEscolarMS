<?php

namespace App\Models\Estudiantes;
use App\Models\Estudiantes\Alumno;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    // Permitir la asignación masiva de los campos 'grado' y 'grupo'
    protected $fillable = ['grado', 'grupo'];

    // Definir la tabla explícitamente
    protected $table = 'grupos';


    protected static function boot()
    {
        parent::boot();

        // Evento que se dispara antes de eliminar el grupo
        static::deleting(function ($grupo) {
            // Elimina los alumnos asociados al grupo
            $grupo->alumnos()->delete();
        });
    }



    public function alumnos(){
    return $this->belongsToMany(Alumno::class, 'grupo_alumno', 'grupo_id', 'alumno_id');
    }

}
