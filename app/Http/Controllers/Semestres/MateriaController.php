<?php

namespace App\Http\Controllers\Semestres;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Semestres\Materia;
use App\Models\Semestres\Semestre;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::all(); // Obtiene todas las materias de la base de datos
        return view('panel.semestres.materias.index', compact('materias')); // Pasa las materias a la vista
    }



    public function store(Request $request)
    {
        // Validar la entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
            'semestre_id' => 'required|exists:semestres,id',
        ]);

        // Comprobar si la materia ya existe
        $existingMateria = Materia::where('nombre', $request->input('nombre'))->first();
        if ($existingMateria) {
            // Si existe, redirigir con un mensaje de error
            return redirect()->route('materias.create')->with('error', 'La materia ya existe y no se puede duplicar');
        }

        // Crear y guardar la materia
        Materia::create([
            'nombre' => $request->input('nombre'),
            'semestre_id' => $request->semestre_id,
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('materias.create')->with('success', 'Materia guardada correctamente');
    }


    public function create()
    {
        $semestres = Semestre::all();
        return view('panel.semestres.materias.create', compact('semestres'));
    }


    public function edit($id)
    {
        $materia = Materia::findOrFail($id); // Busca la materia por ID
        $semestres = Semestre::all(); // Obtiene todos los semestres
        return view('panel.semestres.materias.edit', compact('materia', 'semestres')); // Pasa la materia a la vista de edición
    }

    public function destroy($id)
    {
        Materia::destroy($id);
        return redirect()->route('materias.index')->with('success', 'Materia eliminada correctamente');
    }

    public function update(Request $request, $id)
{
    // Validar los campos del formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'semestre_id' => 'required|exists:semestres,id', // Validar que el semestre exista
    ]);

    $materia = Materia::findOrFail($id);

    // Comprobar si la materia con el nuevo nombre ya existe, excluyendo la materia actual
    $existingMateria = Materia::where('nombre', $request->input('nombre'))
        ->where('id', '!=', $id) // Asegurarse de que no se compare con sí misma
        ->first();

    if ($existingMateria) {
        // Si existe, redirigir con un mensaje de error
        return redirect()->route('materias.edit', $id)->with('error', 'La materia ya existe y no se puede duplicar');
    }

    // Actualizar los datos de la materia
    $materia->nombre = $request->input('nombre');
    $materia->semestre_id = $request->input('semestre_id'); // Actualizar el semestre
    $materia->save();

    // Redirigir a la lista de materias con un mensaje de éxito
    return redirect()->route('materias.index')->with('success', 'Materia actualizada correctamente');
}

}
