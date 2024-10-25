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
        Schema::create('personal', function (Blueprint $table) {
            $table->id('id_personal');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('usuario', 30)->unique(); // Usuario único para autenticación
            $table->string('password', 255); // El tamaño de 255 es adecuado para hashes de contraseñas
            $table->string('rol', 30);
            $table->foreignId('creado_por')->nullable()->constrained('personal', 'id_personal'); // Clave foránea autoreferenciada
            $table->dateTime('fecha_creacion')->useCurrent(); // Para establecer la fecha de creación automáticamente
            $table->boolean('estado')->default(true); // Agregado valor por defecto
            $table->rememberToken(); // Necesario para la autenticación con "Remember me"
            $table->timestamps(); // Para created_at y updated_at automáticas
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal');
    }
};
