<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'imagen',
        'activo',
        'orden',
    ];

    /**
     * Una categoría puede tener muchos productos.
     */
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}