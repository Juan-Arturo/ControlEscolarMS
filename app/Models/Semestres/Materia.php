<?php

namespace App\Models\Semestres;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    // Definir la tabla explícitamente 
    protected $table = 'materias';

    protected $fillable = ['nombre', 'semestre_id'];

    public function semestre()
    {
        return $this->belongsTo(Semestre::class, 'semestre_id');
    }
}
