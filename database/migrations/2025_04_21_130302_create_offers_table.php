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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('empleador_id')->constrained('users')->onDelete('cascade');
            $table->string('titulo');
            $table->string('categoria');
            $table->string('tipo_contrato');
            $table->string('duracion_contrato');
            $table->decimal('salario', 10, 2);
            $table->text('descripcion');
            $table->string('educacion');
            $table->string('experiencia');
            $table->string('contacto_nombre');
            $table->string('contacto_correo');
            $table->string('ciudad');
            $table->string('modalidad');
            $table->string('habilidades')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
