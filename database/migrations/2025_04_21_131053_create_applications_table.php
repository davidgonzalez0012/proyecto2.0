<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            $table->foreignId('trabajador_id')->constrained('employers')->onDelete('cascade');
            $table->foreignId('oferta_id')->constrained('offers')->onDelete('cascade');


            $table->enum('estado', ['pendiente', 'aceptado', 'rechazado'])->default('pendiente');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
