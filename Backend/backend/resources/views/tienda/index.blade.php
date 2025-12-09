@extends('layouts.app')

@section('title', 'Sampa - Tienda')

@section('content')
<main class="container mt-5">
    <!-- Hero Header -->
    <div class="hero-header bg-gradient-green rounded-4 p-4 mb-5 text-white position-relative overflow-hidden">
        <div class="bg-overlay"></div>
        <div class="position-relative z-index-1 text-center">
            <hr class="bg-white-light">
            <h1 class="display-4 fw-bold">Tienda</h1>
            <p class="lead">Productos de calidad para tus proyectos</p>
            <hr class="bg-white-light">
        </div>
    </div>

    <!-- Sección de Tienda -->
    <section id="tienda" class="mb-5" data-aos="fade-up">
        <div class="container">
            <div class="row g-4">
                <!-- Menú de categorías -->
                <div class="col-lg-3">
                    <div class="category-card bg-white rounded-4 p-4 shadow-sm border">
                        <h3 class="fw-bold text-green mb-4">
                            <i class="bi bi-tags me-2"></i>
                            Categorías
                        </h3>
                        <div class="list-group list-group-flush">
                            <a href="{{ route('tienda.index') }}" 
                               class="list-group-item list-group-item-action d-flex align-items-center {{ request()->routeIs('tienda.index') ? 'active' : '' }}">
                                <i class="bi bi-grid-fill me-2"></i>
                                Todas las categorías
                            </a>
                            @foreach($categorias as $categoria)
                            <a href="{{ route('tienda.categoria', $categoria->slug) }}" 
                               class="list-group-item list-group-item-action d-flex align-items-center {{ request()->is('tienda/categoria/'.$categoria->slug) ? 'active' : '' }}">
                                <i class="bi {{ $categoria->icono }} me-2"></i>
                                {{ $categoria->nombre }}
                            </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Filtros adicionales -->
                    <div class="filter-card bg-white rounded-4 p-4 mt-4 shadow-sm border">
                        <h3 class="fw-bold text-green mb-4">
                            <i class="bi bi-funnel me-2"></i>
                            Filtros
                        </h3>
                        <form id="filtrosForm">
                            <div class="mb-3">
                                <label for="priceRange" class="form-label">Rango de precios</label>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>$<span id="minPrice">0</span></span>
                                    <span>$<span id="maxPrice">50,000</span></span>
                                </div>
                                <div class="range-slider">
                                    <input type="range" class="form-range" id="priceRange" min="0" max="50000" step="1000">
                                </div>
                            </div>
                            {{-- <div class="mb-3">
                                <label class="form-label">Materiales</label>
                                @foreach($materiales as $material)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="material[]" 
                                           value="{{ $material->id }}" id="material{{ $material->id }}">
                                    <label class="form-check-label" for="material{{ $material->id }}">
                                        {{ $material->nombre }}
                                    </label>
                                </div>
                                @endforeach
                            </div> --}}
                            <button type="submit" class="btn btn-green w-100 mt-2">
                                <i class="bi bi-funnel-fill me-2"></i>
                                Aplicar filtros
                            </button>
                            <a href="{{ route('tienda.index') }}" class="btn btn-outline-green w-100 mt-2">
                                <i class="bi bi-arrow-clockwise me-2"></i>
                                Reiniciar
                            </a>
                        </form>
                    </div>
                </div>

                <!-- Área de productos -->
                <div class="col-lg-9">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">
                        <h3 class="fw-bold text-green m-0 mb-3 mb-md-0">
                            <i class="bi bi-box-seam me-2"></i>
                            @if(isset($categoriaActual))
                                {{ $categoriaActual->nombre }}
                            @else
                                Todos nuestros productos
                            @endif
                            <small class="text-muted fs-6">({{ $productos->total() }} resultados)</small>
                        </h3>
                        <div class="d-flex align-items-center">
                            <span class="me-2 d-none d-sm-inline">Ordenar por:</span>
                            <select class="form-select" id="ordenarPor" style="width: auto;">
                                <option value="recientes" {{ request('orden') == 'recientes' ? 'selected' : '' }}>Más recientes</option>
                                <option value="precio-asc" {{ request('orden') == 'precio-asc' ? 'selected' : '' }}>Precio: Menor a mayor</option>
                                <option value="precio-desc" {{ request('orden') == 'precio-desc' ? 'selected' : '' }}>Precio: Mayor a menor</option>
                                <option value="valorados" {{ request('orden') == 'valorados' ? 'selected' : '' }}>Mejor valorados</option>
                            </select>
                        </div>
                    </div>

                    @if($productos->count() > 0)
                    <div class="row g-4" id="product-container">
                        @foreach($productos as $producto)
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-hover">
                                @if($producto->nuevo)
                                <div class="product-badge bg-success">Nuevo</div>
                                @endif
                                @if($producto->descuento)
                                <div class="product-badge bg-danger">-{{ $producto->descuento }}%</div>
                                @endif
                                <a href="{{ route('tienda.producto', $producto->slug) }}" class="text-decoration-none">
                                    <div class="product-image-container">
                                        <img src="{{ $producto->imagen_principal }}" class="card-img-top" alt="{{ $producto->nombre }}" loading="lazy">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 class="card-title text-green">{{ $producto->nombre }}</h5>
                                            <div class="rating small text-warning">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $producto->valoracion)
                                                        <i class="bi bi-star-fill"></i>
                                                    @elseif($i - 0.5 <= $producto->valoracion)
                                                        <i class="bi bi-star-half"></i>
                                                    @else
                                                        <i class="bi bi-star"></i>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                        <p class="card-text text-muted small">{{ $producto->descripcion_corta }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            @if($producto->descuento)
                                            <div>
                                                <span class="text-decoration-line-through text-muted me-2">${{ number_format($producto->precio_original, 0) }}</span>
                                                <span class="h5 text-success fw-bold">${{ number_format($producto->precio_actual, 0) }}</span>
                                            </div>
                                            @else
                                            <span class="h5 text-success fw-bold m-0">${{ number_format($producto->precio_actual, 0) }}</span>
                                            @endif
                                            <button class="btn btn-sm btn-green add-to-cart" data-product-id="{{ $producto->id }}">
                                                <i class="bi bi-cart-plus me-1"></i> Añadir
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Paginación -->
                    <div class="mt-5">
                        {{ $productos->links() }}
                    </div>
                    @else
                    <div class="alert alert-info text-center py-4">
                        <i class="bi bi-info-circle-fill fs-1 text-info"></i>
                        <h4 class="mt-3">No se encontraron productos</h4>
                        <p class="mb-0">Intenta con otros filtros o categorías</p>
                        {{-- <a href="{{ route('tienda.index') }}" class="btn btn-green mt-3">
                            <i class="bi bi-arrow-left me-1"></i> Volver a la tienda
                        </a> --}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</main>
@endsection