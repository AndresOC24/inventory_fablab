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
        Schema::create('areas_personal', function (Blueprint $table) {
            $table->foreignId('id_personal')->constrained('personal', 'id_personal');
            $table->foreignId('id_areas')->constrained('areas', 'id_areas');
            $table->primary(['id_personal', 'id_areas']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas_personal');
    }
};
