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
        Schema::create('grupo_alumno', function (Blueprint $table) {
            $table->id();
            
            // Relación con la tabla grupos
            $table->foreignId('grupo_id')->constrained('grupos')->onDelete('cascade');

            // Relación con la tabla alumnos usando 'matricula'
            $table->unsignedBigInteger('alumno_id');
            $table->foreign('alumno_id')->references('matricula')->on('alumnos')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Asegúrate de eliminar la tabla correctamente
        Schema::dropIfExists('grupo_alumno');
    }
};
