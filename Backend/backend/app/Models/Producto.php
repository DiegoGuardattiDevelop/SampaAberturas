<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'categoria_id',
        'nombre',
        'slug',
        'sku',
        'descripcion_corta',
        'descripcion_larga',
        'precio_actual',
        'precio_anterior',
        'stock',
        'imagen_principal',
        'materiales',
        'valoracion',
        'activo',
    ];

    // Castear 'materiales' como array para facilitar su manejo
    protected $casts = [
        'materiales' => 'array',
    ];

    /**
     * Un producto pertenece a una categoría.
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * Scope para obtener solo productos activos.
     */
    public function scopeActivo($query)
    {
        return $query->where('activo', true);
    }
}