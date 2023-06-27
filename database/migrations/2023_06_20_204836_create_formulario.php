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
        Schema::create('formulario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->enum('tipo', ['cedula', 'tarjeta de identidad', 'cedula de extranjeria']);
            $table->integer('identificacion');
            $table->integer('celular');
            $table->string('profesion');
            $table->enum('rol', ['administrador', 'ejecutor', 'invitado', 'visualizador']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulario');
    }
};
