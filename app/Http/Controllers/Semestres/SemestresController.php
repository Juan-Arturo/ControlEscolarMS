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
           'fecha_inicio' => 'required|date',
           'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
       ]);

       // Crear el semestre
       $Semestres = Semestre::create([
           'nombre' => $request->nombre,
           'fecha_inicio' => $request->fecha_inicio,
           'fecha_fin' => $request->fecha_fin,
           
       ]);

       if ($request->ajax()) {
           return response()->json(['success' => true, 'Semestre' => $Semestres]);
       }

       return redirect()->route('semestres.index');
   }
}
