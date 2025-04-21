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

            $table->foreignId('empleador_id')->constrained('employers')->onDelete('cascade');
            $table->string('titulo');
            $table->string('categoria');
            $table->string('contrato');
            $table->string('duracion');
            $table->string('educacion');
            $table->text('contacto');
            $table->string('ciudad');
            $table->text('habilidades');
            $table->string('experiencia');
            $table->string('email');
            $table->string('modalidad');
            $table->text('descripcion');
            $table->decimal('salario', 10, 2);

            //falta agregar esto en la vista de publicar trabajo
            $table->string('ubicacion');
            $table->enum('estado', ['activa', 'cerrada'])->default('activa');

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
