<?php

namespace App\Http\Controllers\Semestres;

use App\Http\Controllers\Controller;



use Illuminate\Http\Request;
use App\Models\Semestres\Semestre;
use Carbon\Carbon;

class SemestresController extends Controller
{
    public function index()
    {
        // Obtener todos los semestres
        $Semestres = Semestre::all();

        // Pasar los semestres a la vista
        return view('panel.semestres.semestres.index', compact('Semestres'));
    }

    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        // Crear el semestre

        
        $Semestres = Semestre::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,

        ]);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'Semestre' => $Semestres]);
        }

        return redirect()->route('semestres.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        $semestre = Semestre::findOrFail($id);
        $semestre->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);

        return redirect()->route('semestres.index')->with('success', 'Semestre actualizado correctamente');
    }


    public function destroy($id)
{
    // Buscar el semestre por su ID
    $semestre = Semestre::findOrFail($id);
    
    // Eliminar el semestre
    $semestre->delete();
    
    // Redirigir o devolver una respuesta
    return redirect()->route('semestres.index')->with('success', 'Semestre eliminado correctamente');
}



    public function mapaCurricular()
    {
        return view('panel.semestres.semestres.mapacurricular');
    }
}
