<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto; // Importa tu modelo Producto
use App\Models\Categoria; // Importa tu modelo Categoria para buscar la categoría
use Illuminate\Support\Str; // Para generar el slug

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Producto::truncate(); // ¡Cuidado! Esto borra todos los datos de la tabla productos

        // Primero, busca una categoría existente para asociar el producto
        // Si no existe, puedes crearla aquí mismo o lanzar un error
        $categoriaAluminio = Categoria::where('slug', Str::slug('Aberturas de Aluminio'))->first();

        if ($categoriaAluminio) {
            Producto::create([
                'categoria_id' => $categoriaAluminio->id,
                'nombre' => 'Ventana Módena 150x100',
                'slug' => Str::slug('Ventana Módena 150x100'),
                'sku' => 'VM-150-100-001',
                'descripcion_corta' => 'Ventana de aluminio línea Módena con vidrio 4mm.',
                'descripcion_larga' => 'Ventana de aluminio de alta calidad, ideal para ambientes modernos. Incluye vidrio de 4mm. Medidas: 150cm de ancho x 100cm de alto.',
                'precio_actual' => 75000.00,
                'precio_anterior' => 80000.00, // Opcional
                'stock' => 15,
                'imagen_principal' => 'productos/ventana-modena-1.jpg', // Ruta de imagen de ejemplo
                'materiales' => ['aluminio', 'vidrio'], // Ejemplo de uso del campo JSON
                'valoracion' => 4.8,
                'activo' => true,
                // Si tienes un campo 'nuevo' o 'descuento' en el modelo
                // 'nuevo' => true,
                // 'descuento' => 5,
            ]);

            Producto::create([
                'categoria_id' => $categoriaAluminio->id,
                'nombre' => 'Puerta Balcón Línea A30',
                'slug' => Str::slug('Puerta Balcon Linea A30'),
                'sku' => 'PB-A30-200-200-001',
                'descripcion_corta' => 'Puerta balcón robusta de aluminio A30.',
                'descripcion_larga' => 'Puerta balcón de dos hojas, línea A30 de alta prestación. Ideal para grandes aberturas. Incluye vidrio doble.',
                'precio_actual' => 150000.00,
                'stock' => 5,
                'imagen_principal' => 'productos/puerta-balcon-a30-1.jpg',
                'materiales' => ['aluminio', 'vidrio'],
                'valoracion' => 4.9,
                'activo' => true,
            ]);

            // Más productos si lo deseas
        } else {
            $this->command->info('La categoría "Aberturas de Aluminio" no fue encontrada. No se crearon productos de prueba para esta categoría.');
        }

        $categoriaPuertaPlaca = Categoria::where('slug', Str::slug('Puertas Placa'))->first();

        if ($categoriaPuertaPlaca) {
            Producto::create([
                'categoria_id' => $categoriaPuertaPlaca->id,
                'nombre' => 'Puerta Placa Cedro 70cm',
                'slug' => Str::slug('Puerta Placa Cedro 70cm'),
                'sku' => 'PPC-70-001',
                'descripcion_corta' => 'Puerta placa de interior en cedro, medidas 70x200cm.',
                'descripcion_larga' => 'Puerta placa de cedro, excelente terminación. Ideal para dormitorios o baños. Incluye marco.',
                'precio_actual' => 35000.00,
                'stock' => 20,
                'imagen_principal' => 'productos/puerta-placa-cedro.jpg',
                'materiales' => ['madera'],
                'valoracion' => 4.2,
                'activo' => true,
            ]);
        }
    }
}