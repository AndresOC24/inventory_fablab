<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('maquinas', function (Blueprint $table) {
            $table->id('id_maquinas');
            $table->foreignId('id_areas')->constrained('areas', 'id_areas');
            $table->string('nombre_maquina', 80);
            $table->string('descripcion', 255);
            $table->string('numero_serie', 50);
            $table->string('modelo', 40);
            $table->string('estado', 30);
            $table->string('ubicacion', 50);
            $table->string('observaciones', 255);
            $table->string('foto_maquina', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maquinas');
    }
};
