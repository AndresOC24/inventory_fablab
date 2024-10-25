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
        Schema::table('personal', function (Blueprint $table) {
            // Añadir remember_token y timestamps
            $table->rememberToken()->after('estado');
            $table->timestamps(); // created_at y updated_at automáticos

            // Cambiar el tamaño del campo password
            $table->string('password', 255)->change();

            // Hacer el campo usuario único
            $table->string('usuario', 30)->unique()->change();

            // Cambiar el campo fecha_creacion para usar la fecha actual por defecto
            $table->dateTime('fecha_creacion')->useCurrent()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personal', function (Blueprint $table) {
            // Revertir los cambios realizados
            $table->dropColumn('remember_token');
            $table->dropTimestamps();
            $table->string('password', 60)->change();
            $table->dropUnique(['usuario']);
            $table->dateTime('fecha_creacion')->change(); // revertir uso de 'useCurrent'
        });
    }
};
