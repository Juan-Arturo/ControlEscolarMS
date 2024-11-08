<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\Grupo;
use App\Models\Alumno;

class AsistenciaController extends Controller{


public function index(){
    $grupos=Grupo::all();
    $alumnosDelGrupo = [];
    return view('asistencias.index', compact('grupos', 'alumnosDelGrupo'));
}


public function store(Request $request) {
    $fecha = $request->input('attendance_date');
    $grupoId = $request->input('grupo_id');
    $materiaId = $request->input('materia_id');
    $asistencias = $request->input('asistencia', []);

    // Verifica si ya existe una asistencia para la misma fecha, grupo y materia
    $existeAsistencia = Asistencia::where('fecha', $fecha)
                                   ->where('grupo_id', $grupoId)
                                   ->where('materia_id', $materiaId)
                                   ->exists();

    if ($existeAsistencia) {
        return redirect()->back()->with('error', 'No se puede tomar más de una asistencia del mismo día y materia.');
    }

    // Obtén el grupo y registra la asistencia
    $grupo = Grupo::find($grupoId);
    foreach ($grupo->alumnos as $alumno) {
        Asistencia::create([
            'alumno_id' => $alumno->matricula,
            'grupo_id' => $grupoId,
            'materia_id' => $materiaId,
            'fecha' => $fecha,
            'presente' => isset($asistencias[$alumno->matricula]) ? true : false,
        ]);
    }

    return redirect()->back()->with('success', 'Asistencia registrada correctamente.');
}

public function consultarAsistencia(Request $request)
{
    $request->validate([
        'attendance_date' => 'required|date',
        'grupo_id' => 'required|exists:grupos,id',
    ]);

    $fecha = $request->input('attendance_date');
    $grupoId = $request->input('grupo_id');

    // Obtener alumnos del grupo específico
    $alumnosDelGrupo = Alumno::whereHas('grupo', function($query) use ($grupoId) {
        $query->where('grupos.id', $grupoId); // Especificar el nombre de la tabla
    })->get();

    // Obtener asistencias en la fecha y grupo
    $asistencias = Asistencia::where('fecha', $fecha)
                             ->where('grupo_id', $grupoId)
                             ->get();

    // Convertir asistencias a un array donde el key sea la matrícula para facilidad en la vista
    $asistenciaPorAlumno = $asistencias->pluck('presente', 'alumno_id')->toArray();

    $grupos = Grupo::all();
    return view('asistencias.index', compact('alumnosDelGrupo', 'asistenciaPorAlumno', 'grupos'));
}


    
    

}
