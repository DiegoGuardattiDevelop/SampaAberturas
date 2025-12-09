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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade'); // Clave foránea a la tabla categorias
            $table->string('nombre');
            $table->string('slug')->unique(); // Slug para URLs amigables (ej. "ventana-modena-150x100")
            $table->string('sku')->unique()->nullable(); // Código de stock único (opcional)
            $table->text('descripcion_corta')->nullable(); // Pequeña descripción para listados
            $table->longText('descripcion_larga')->nullable(); // Descripción completa para la página de detalle
            $table->decimal('precio_actual', 10, 2); // Precio actual del producto (ej. 10000.00)
            $table->decimal('precio_anterior', 10, 2)->nullable(); // Precio antes de un descuento (opcional)
            $table->unsignedInteger('stock')->default(0); // Cantidad en stock
            $table->string('imagen_principal')->nullable(); // Ruta a la imagen principal del producto
            // Considera agregar una tabla 'imagenes_producto' si vas a tener múltiples imágenes por producto
            $table->json('materiales')->nullable(); // Para guardar un array de materiales si es necesario (ej. ["aluminio", "vidrio"])
            $table->decimal('valoracion', 2, 1)->nullable(); // Valoración promedio (ej. 4.5 estrellas)
            $table->boolean('activo')->default(true); // Para activar/desactivar el producto en la tienda
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};