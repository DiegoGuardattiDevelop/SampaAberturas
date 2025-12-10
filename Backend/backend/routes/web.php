<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\SitemapController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/aberturas-aluminio', function () {
    return view('aberturas_aluminio');
})->name('aberturas-aluminio');

Route::get('/puertas-placa', function () {
    return view('Puertas_placa');
})->name('puertas-placa');

Route::get('/mamparas', function () {
    return view('mamparas');
})->name('mamparas');

Route::get('/mosquiteros', function () {
    return view('mosquiteros');
})->name('mosquiteros');

Route::get('/herrajes', function () {
    return view('herrajes');
})->name('herrajes');

Route::get('/perfileria', function () {
    return view('perfileria');
})->name('perfileria');

// Rutas para las otras páginas
Route::get('/obras', function () {
    return view('obras');
})->name('obras');

// Route::get('/outlet', function () {
//     return view('tienda');
// })->name('outlet');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/outlet', [TiendaController::class, 'mostrarTienda'])->name('tienda.index');
Route::get('/outlet/categoria/{categoria:slug}', [TiendaController::class, 'categoria'])->name('tienda.categoria');
Route::get('/outlet/{producto:slug}', [TiendaController::class, 'producto'])->name('tienda.producto');

// Sitemap XML
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
