<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;


class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::all(); // Obtiene todas las materias de la base de datos
        return view('materias.index', compact('materias')); // Pasa las materias a la vista
    }
    


    public function store(Request $request)
    {
        // Validar la entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
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
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('materias.create')->with('success', 'Materia guardada correctamente');
    }


    public function create (){
        return view('materias.create');
    }


    public function edit($id){
    $materia = Materia::findOrFail($id); // Busca la materia por ID
    return view('materias.edit', compact('materia')); // Pasa la materia a la vista de edición
   }

   public function destroy($id){
       Materia::destroy($id);
       return redirect()->route('materias.index')->with('success', 'Materia eliminada correctamente');
   }
   
   public function update(Request $request, $id)
   {
       $request->validate([
           'nombre' => 'required|string|max:255',
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
   
       // Actualizar el nombre de la materia
       $materia->nombre = $request->input('nombre');
       $materia->save();
   
       return redirect()->route('materias.index')->with('success', 'Materia actualizada correctamente');
   }
   

    
}