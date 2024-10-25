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
        Schema::create('area_voluntario', function (Blueprint $table) {
            $table->foreignId('id_area')->constrained('areas', 'id_areas');
            $table->foreignId('id_voluntario')->constrained('voluntarios', 'id_voluntarios');
            $table->primary(['id_area', 'id_voluntario']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_voluntario');
    }
};
