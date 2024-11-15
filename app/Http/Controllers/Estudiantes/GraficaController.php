<?php

namespace App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GraficaController extends Controller
{
   public function index(){
       return view('panel.estudiantes.graficas.index');
   }
}
