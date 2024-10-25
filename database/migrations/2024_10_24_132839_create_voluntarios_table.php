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
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->id('id_voluntarios');
            $table->string('nombre', 80);
            $table->string('apellido', 80);
            $table->dateTime('fecha_nacimiento');
            $table->string('email', 80);
            $table->string('telefono', 30);
            $table->string('ci', 30);
            $table->string('usuario', 30);
            $table->string('password', 60);
            $table->string('rol', 30);
            $table->string('universidad', 100);
            $table->foreignId('creado_por')->nullable()->constrained('personal', 'id_personal');
            $table->dateTime('fecha_creacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voluntarios');
    }
};
