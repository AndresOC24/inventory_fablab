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
        Schema::create('actualiza', function (Blueprint $table) {
            $table->foreignId('id_personal')->constrained('personal', 'id_personal');
            $table->foreignId('id_materiales')->constrained('materiales', 'id_materiales');
            $table->dateTime('fecha_actualizacion');
            $table->primary(['id_personal', 'id_materiales', 'fecha_actualizacion']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actualiza');
    }
};
