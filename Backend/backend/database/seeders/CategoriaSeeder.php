<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria; // Importa tu modelo Categoria
use Illuminate\Support\Str; // Para generar el slug

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Puedes borrar categorías existentes para evitar duplicados si ejecutas esto varias veces
        // Categoria::truncate(); // ¡Cuidado! Esto borra todos los datos de la tabla categorias

        Categoria::create([
            'nombre' => 'Aberturas de Aluminio',
            'slug' => Str::slug('Aberturas de Aluminio'), // Genera un slug
            'descripcion' => 'Productos de aluminio de alta calidad para tus proyectos.',
            'imagen' => 'categorias/aberturas-aluminio.jpg', // Ruta de imagen de ejemplo
            'activo' => true,
            'orden' => 10,
            // Asumo que tienes un campo 'icono' si lo usas en tu Blade
            // 'icono' => 'bi-window',
        ]);

        Categoria::create([
            'nombre' => 'Puertas Placa',
            'slug' => Str::slug('Puertas Placa'),
            'descripcion' => 'Variedad de puertas placa para interiores.',
            'imagen' => 'categorias/puertas-placa.jpg',
            'activo' => true,
            'orden' => 20,
            // 'icono' => 'bi-door-open',
        ]);

        // Agrega más categorías si lo deseas
    }
}