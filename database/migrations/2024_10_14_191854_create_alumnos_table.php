<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('matricula'); // La matrícula será la clave primaria
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('especialidad')->nullable();
            $table->string('seguro_medico')->nullable();
            $table->string('curp')->unique(); // Agregar campo CURP como único
            $table->date('fecha_nacimiento')->nullable(); // Agregar la columna de fecha de nacimiento
            $table->timestamps();
        });
    }

   /**
    * Reverse the migrations.
    */
   public function down()
   {
       Schema::dropIfExists('alumnos');
   }
};