<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesaTable extends Migration
{
    public function up()
    {
        Schema::create('mesa', function (Blueprint $table) {
            $table->id(); // Crea una columna id autoincremental
            $table->string('material'); // Columna para el material
            $table->string('dimensiones'); // Columna para las dimensiones
            $table->string('estilo'); // Columna para el estilo
            $table->string('color'); // Columna para el color
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('mesa');
    }
}
