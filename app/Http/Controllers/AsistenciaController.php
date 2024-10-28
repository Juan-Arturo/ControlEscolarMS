<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\Grupo;

class AsistenciaController extends Controller{


public function index(){
    $grupos=Grupo::all();

    return view('asistencias.index', compact('grupos'));
}

 public function store(Request $request){
        $fecha = $request->input('attendance_date');
        $grupoId = $request->input('grupo_id');
        $asistencias = $request->input('asistencia');

        // Obtener el grupo usando el ID que se pasó en el formulario
        $grupo = Grupo::find($grupoId);

        if (!$grupo) {
            return redirect()->back()->with('error', 'Grupo no encontrado.');
        }

        // Acceder a los alumnos del grupo
        $alumnosDelGrupo = $grupo->alumnos;

        // Iterar sobre todos los alumnos del grupo
        foreach ($alumnosDelGrupo as $alumno) {
            Asistencia::create([
                'alumno_id' => $alumno->matricula,
                'grupo_id' => $grupoId,
                'fecha' => $fecha,
                'presente' => isset($asistencias[$alumno->matricula]),
            ]);
        }

        return redirect()->route('grupos.index');
    }

    

}
