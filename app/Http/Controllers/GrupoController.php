<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $grupos = Grupo::all();
        return view('grupos.index', compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grupos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Insertar los datos directamente usando el modelo Grupo
        Grupo::create([
            'grado' => $request->input('grado'),
            'grupo' => $request->input('grupo'),
        ]);

        // Redireccionar a la vista de lista de grupos o donde prefieras
        return redirect()->route('grupos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($grupo)
    {
        // Buscar el grupo junto con los alumnos asociados
        $controllerGrupo = Grupo::with('alumnos')->findOrFail($grupo);
    
        // Redirigir o mostrar un mensaje si no se encuentra el grupo
        if (!$controllerGrupo) {
            return redirect()->route('grupos.index')->with('error', 'Grupo no encontrado');
        }
    
        // Pasar el grupo y los alumnos a la vista
        return view('grupos.show', compact('controllerGrupo'));
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($grupo)
    {
        $controllerGrupo = Grupo::find($grupo);
        return view('grupos.edit', compact('controllerGrupo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $grupo)
    {
        $controllerGrupo = Grupo::find($grupo);

        //Asignacion masiva
        $controllerGrupo->update($request->all());


        // Redireccionar sin enviar la ID
        return redirect()->route('grupos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($grupo )
    {
        $controllerGrupo = Grupo::find($grupo);
        $controllerGrupo->delete();

        // Redireccionar sin enviar la ID 
        return redirect()->route('grupos.index');
    }
}
