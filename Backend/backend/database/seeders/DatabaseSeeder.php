<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create(); // Esto es para usuarios de ejemplo, puedes dejarlo o quitarlo

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Llama a tus seeders aquí, en el orden correcto (primero categorías, luego productos)
        $this->call([
            CategoriaSeeder::class,
            ProductoSeeder::class,
        ]);
    }
}