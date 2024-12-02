<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_id');
            $table->foreign('alumno_id')->references('matricula')->on('alumnos')->onDelete('cascade');
            $table->foreignId('grupo_id')->constrained('grupos')->onDelete('cascade');
            $table->unsignedBigInteger('materia_id'); // Nueva columna para almacenar la materia
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
            $table->date('fecha');
            $table->boolean('presente');
            $table->timestamps();

            // Índice único para evitar duplicados de asistencia en el mismo grupo, materia y fecha
            $table->unique(['alumno_id', 'grupo_id', 'materia_id', 'fecha'], 'unique_asistencia');
        });
    }

     

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
