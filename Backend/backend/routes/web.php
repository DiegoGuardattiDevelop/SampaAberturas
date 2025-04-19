<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/aberturas-aluminio', function () {
    return view('aberturas_aluminio');
});

Route::get('/puertas-placa', function () {
    return view('Puertas_placa');
});

Route::get('/mamparas', function () {
    return view('mamparas');
});

Route::get('/mosquiteros', function () {
    return view('mosquiteros');
});

Route::get('/herrajes', function () {
    return view('herrajes');
});

Route::get('/perfileria', function () {
    return view('perfileria');
});

// Rutas para las otras páginas
Route::get('/obras', function () {
    return view('obras');
});

Route::get('/outlet', function () {
    return view('tienda');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

