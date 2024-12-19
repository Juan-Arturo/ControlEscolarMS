<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Estudiantes\GrupoController;
use App\Http\Controllers\Estudiantes\AlumnoController;
use App\Http\Controllers\Estudiantes\AsistenciaController;
use App\Http\Controllers\Estudiantes\GraficaController;
use App\Http\Controllers\Semestres\MateriaController;
use App\Http\Controllers\Semestres\SemestresController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Página de inicio después de iniciar sesión
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Cambiar el nombre de la ruta para que sea 'home.index'
    Route::get('/home', function () {
        return view('Panel.home.index'); // Ubicación correcta de la vista
    })->name('home.index'); // Nombre cambiado a 'home.index'

    Route::resource('grupos', GrupoController::class);
    Route::resource('alumnos', AlumnoController::class);
    Route::resource('asistencias', AsistenciaController::class);
    Route::resource('graficas', GraficaController::class);
    Route::resource('materias', MateriaController::class);
    Route::resource('semestres', SemestresController::class);

    // Rutas específicas
    Route::get('/asistencia/consultar', [AsistenciaController::class, 'consultarAsistencia'])->name('asistencia.consultar');
    Route::get('/semestre/mapacurricular', [SemestresController::class, 'mapaCurricular'])->name('semestre.mapacurricular');
});

// Redirigir automáticamente después del login al home
Route::redirect('/dashboard', '/home');