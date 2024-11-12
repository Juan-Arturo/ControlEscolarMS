<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\GraficaController;
use App\Http\Controllers\MateriaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('Panel.home');
})->name('home.index');


Route::resource('grupos', GrupoController::class);
Route::resource('alumnos', AlumnoController::class);
Route::resource('asistencias', AsistenciaController::class);
Route::resource('graficas', GraficaController::class);
Route::resource('materias', MateriaController::class);

/*Rustas especificas*/
Route::get('/asistencia/consultar', [AsistenciaController::class, 'consultarAsistencia'])->name('asistencia.consultar');






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
