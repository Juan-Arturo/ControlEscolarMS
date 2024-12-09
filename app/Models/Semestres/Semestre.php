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
        'semestre',
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin'
    ];

    public function materias()
    {
        return $this->hasMany(Materia::class, 'semestre_id');
    }
}
