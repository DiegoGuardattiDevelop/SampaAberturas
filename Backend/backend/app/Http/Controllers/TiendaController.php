<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function mostrarTienda(Request $request)
    {
        // Obtener categorías activas para el menú
        $categorias = Categoria::where('activo', true)
            ->orderBy('orden', 'asc')
            ->get();
            
        // Consulta base de productos
        $query = Producto::with('categoria')
            ->activo()
            ->when($request->has('q'), function($q) use ($request) {
                return $q->where('nombre', 'like', '%'.$request->q.'%')
                    ->orWhere('descripcion_corta', 'like', '%'.$request->q.'%');
            })
            // Se elimina la condición de filtro por 'material'
            ->when($request->has('min_price'), function($q) use ($request) {
                return $q->where('precio_actual', '>=', $request->min_price);
            })
            ->when($request->has('max_price'), function($q) use ($request) {
                return $q->where('precio_actual', '<=', $request->max_price);
            });
            
        // Ordenamiento
        switch($request->orden) {
            case 'precio-asc':
                $query->orderBy('precio_actual', 'asc');
                break;
            case 'precio-desc':
                $query->orderBy('precio_actual', 'desc');
                break;
            case 'valorados':
                $query->orderBy('valoracion', 'desc');
                break;
            default:
                $query->latest();
        }
            
        $productos = $query->paginate(12);
            
        return view('tienda.index', compact('categorias', 'productos'));
    }
    
    public function categoria(Categoria $categoria, Request $request)
    {
        // Obtener categorías activas para el menú
        $categorias = Categoria::where('activo', true)
            ->orderBy('orden', 'asc')
            ->get();
            
        // Consulta base de productos para la categoría
        $query = $categoria->productos()
            ->with('categoria')
            ->activo()
            ->when($request->has('q'), function($q) use ($request) {
                return $q->where('nombre', 'like', '%'.$request->q.'%')
                    ->orWhere('descripcion_corta', 'like', '%'.$request->q.'%');
            })
            // Se elimina la condición de filtro por 'material'
            ->when($request->has('min_price'), function($q) use ($request) {
                return $q->where('precio_actual', '>=', $request->min_price);
            })
            ->when($request->has('max_price'), function($q) use ($request) {
                return $q->where('precio_actual', '<=', $request->max_price);
            });
            
        // Ordenamiento
        switch($request->orden) {
            case 'precio-asc':
                $query->orderBy('precio_actual', 'asc');
                break;
            case 'precio-desc':
                $query->orderBy('precio_actual', 'desc');
                break;
            case 'valorados':
                $query->orderBy('valoracion', 'desc');
                break;
            default:
                $query->latest();
        }
            
        $productos = $query->paginate(12);
        $categoriaActual = $categoria;
            
        return view('tienda.index', compact('categorias', 'productos', 'categoriaActual'));
    }
    
    public function producto(Producto $producto)
    {
        if (!$producto->activo) {
            abort(404);
        }
            
        // Productos relacionados
        $relacionados = Producto::where('categoria_id', $producto->categoria_id)
            ->where('id', '!=', $producto->id)
            ->activo()
            ->inRandomOrder()
            ->limit(4)
            ->get();
            
        return view('tienda.producto', compact('producto', 'relacionados'));
    }
    
    public function search(Request $request)
    {
        $request->validate([
            'q' => 'nullable|string|max:255'
        ]);
            
        return $this->mostrarTienda($request);
    }
}