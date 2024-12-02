<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id(); // ID autoincremental para cada materia
            $table->string('nombre', 100); // Nombre de la materia
            $table->unsignedBigInteger('semestre_id'); // ID del semestre al que pertenece la materia
            $table->timestamps(); // created_at y updated_at

            // Relación con la tabla 'semestres'
            $table->foreign('semestre_id')
                  ->references('id')
                  ->on('semestres')
                  ->onDelete('cascade'); // Eliminar materia si el semestre asociado es eliminado
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
