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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('grado'); // Grado (1, 2, 3, etc.)
            $table->string('grupo', 1); // Letra del grupo (A, B, C, etc.)
            $table->unique(['grado', 'grupo']); // Asegura que no haya duplicados en la combinación grado-letra
            $table->timestamps();
        });
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
