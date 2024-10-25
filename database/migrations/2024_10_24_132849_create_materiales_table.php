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
        Schema::create('materiales', function (Blueprint $table) {
            $table->id('id_materiales');
            $table->foreignId('id_areas')->constrained('areas', 'id_areas');
            $table->string('codigo', 10);
            $table->string('nombre', 80);
            $table->string('descripcion', 255);
            $table->string('modelo', 40);
            $table->string('estado', 30);
            $table->string('observaciones', 255);
            $table->float('costo_adquisicion');
            $table->string('foto_material', 255);
            $table->float('cantidad');
            $table->string('tipo_unidad', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales');
    }
};
