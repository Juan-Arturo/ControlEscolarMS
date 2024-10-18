<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;
use App\Models\Alumno;
use App\Models\GrupoAlumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $grupoId = $request->input('grupo_id'); // Obtener el ID del grupo de la solicitud
        $grupos = Grupo::all(); // Si necesitas todos los grupos
        return view('alumnos.create', compact('grupos', 'grupoId')); // Pasar el grupoId a la vista
    }
    
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'especialidad' =>  'required|string|max:255',
            'seguro_medico' => 'required|numeric',
            'curp' => 'required|string|max:18|unique:alumnos,curp',
            'fecha_nacimiento' => 'required|date',
            'grupo_id' => 'required|exists:grupos,id',
        ]);
    
        // Crear el alumno
        $alumno = Alumno::create([
            'nombre' => $validatedData['nombre'],
            'apellido_paterno' => $validatedData['apellido_paterno'],
            'apellido_materno' => $validatedData['apellido_materno'],
            'especialidad'=>$validatedData['especialidad'],
            'seguro_medico'=>$validatedData['seguro_medico'],
            'curp' => $validatedData['curp'],
            'fecha_nacimiento' => $validatedData['fecha_nacimiento'],
            
        ]);
    
        // Crear el registro en grupo_alumno
        GrupoAlumno::create([
            'grupo_id' => $validatedData['grupo_id'],
            'alumno_id' => $alumno->matricula, 
        ]);
    
        // Redireccionar a la vista del grupo
        return redirect()->route('grupos.show', ['grupo' => $validatedData['grupo_id']]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show($grupo)
    {
        $controllerGrupo = Grupo::find($grupo);
        return view('alumnos.show', compact('controllerGrupo'));
       
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
