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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique(); // Nombre de la categoría (ej. "Aberturas de Aluminio")
            $table->string('slug')->unique();   // Slug para URLs amigables (ej. "aberturas-aluminio")
            $table->text('descripcion')->nullable(); // Descripción de la categoría
            $table->string('imagen')->nullable(); // Ruta a una imagen representativa de la categoría
            $table->boolean('activo')->default(true); // Para activar/desactivar la categoría en la tienda
            $table->integer('orden')->default(0); // Para controlar el orden de visualización en el menú
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};