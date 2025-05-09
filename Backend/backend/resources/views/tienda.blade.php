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
                    <div class="category-card bg-section-soft rounded-4 p-4 shadow-sm">
                        <h3 class="fw-bold text-green mb-4">
                            <i class="bi bi-filter-circle me-2"></i>
                            Categorías
                        </h3>
                        <div class="list-group list-group-flush">
                            <button class="list-group-item list-group-item-action d-flex align-items-center active" 
                                    data-category="all">
                                <i class="bi bi-grid-fill me-2"></i>
                                Todas las categorías
                            </button>
                            <button class="list-group-item list-group-item-action d-flex align-items-center" 
                                    data-category="aluminio">
                                <i class="bi bi-border-width me-2"></i>
                                Aberturas de Aluminio
                            </button>
                            <button class="list-group-item list-group-item-action d-flex align-items-center" 
                                    data-category="puertas-interior">
                                <i class="bi bi-door-open me-2"></i>
                                Puertas de Interior
                            </button>
                            <button class="list-group-item list-group-item-action d-flex align-items-center" 
                                    data-category="mamparas">
                                <i class="bi bi-shower me-2"></i>
                                Mamparas
                            </button>
                            <button class="list-group-item list-group-item-action d-flex align-items-center" 
                                    data-category="cortinas">
                                <i class="bi bi-layers me-2"></i>
                                Cortinas
                            </button>
                        </div>
                    </div>

                    <!-- Filtros adicionales -->
                    <div class="filter-card bg-section-soft rounded-4 p-4 mt-4 shadow-sm">
                        <h3 class="fw-bold text-green mb-4">
                            <i class="bi bi-funnel me-2"></i>
                            Filtros
                        </h3>
                        <div class="mb-3">
                            <label for="priceRange" class="form-label">Rango de precios</label>
                            <input type="range" class="form-range" id="priceRange" min="0" max="50000" step="1000">
                            <div class="d-flex justify-content-between">
                                <small>$0</small>
                                <small>$50,000</small>
                            </div>
                        </div>
                        <button class="btn btn-outline-green w-100 mt-2">
                            <i class="bi bi-arrow-clockwise me-2"></i>
                            Reiniciar filtros
                        </button>
                    </div>
                </div>

                <!-- Área de productos -->
                <div class="col-lg-9">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-bold text-gradient-green m-0">
                            <i class="bi bi-box-seam me-2"></i>
                            Nuestros Productos
                        </h3>
                        <div class="sort-dropdown">
                            <select class="form-select" aria-label="Ordenar por">
                                <option selected>Ordenar por</option>
                                <option value="1">Precio: Menor a mayor</option>
                                <option value="2">Precio: Mayor a menor</option>
                                <option value="3">Más recientes</option>
                                <option value="4">Mejor valorados</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-4" id="product-container">
                        <!-- Producto 1 -->
                        <div class="col-md-6 col-lg-4 product-card" data-category="aluminio" data-price="9999">
                            <div class="card h-100 border-0 shadow-hover">
                                <div class="product-badge bg-success">Nuevo</div>
                                <a href="#" class="text-decoration-none">
                                    <div class="product-image-container">
                                        <img src="{{ asset('Images/sampa_outlet_1.jpg') }}" class="card-img-top" alt="Ventana de aluminio Modena" loading="lazy">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 class="card-title text-green">Ventana Modena</h5>
                                            <div class="rating small text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </div>
                                        </div>
                                        <p class="card-text text-muted small">Línea Modena - Blanco</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h5 text-success fw-bold m-0">$9,999</span>
                                            <button class="btn btn-sm btn-outline-green">
                                                <i class="bi bi-cart-plus me-1"></i> Añadir
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Producto 2 -->
                        <div class="col-md-6 col-lg-4 product-card" data-category="puertas-interior" data-price="7499">
                            <div class="card h-100 border-0 shadow-hover">
                                <div class="product-badge bg-danger">Oferta</div>
                                <a href="#" class="text-decoration-none">
                                    <div class="product-image-container">
                                        <img src="{{ asset('Images/sampa_outlet_2.jpg') }}" class="card-img-top" alt="Puerta interior diseño moderno" loading="lazy">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 class="card-title text-green">Puerta Interior</h5>
                                            <div class="rating small text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                        </div>
                                        <p class="card-text text-muted small">Diseño moderno - Roble claro</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="text-decoration-line-through text-muted me-2">$8,499</span>
                                                <span class="h5 text-success fw-bold">$7,499</span>
                                            </div>
                                            <button class="btn btn-sm btn-outline-green">
                                                <i class="bi bi-cart-plus me-1"></i> Añadir
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Producto 3 -->
                        <div class="col-md-6 col-lg-4 product-card" data-category="mamparas" data-price="12299">
                            <div class="card h-100 border-0 shadow-hover">
                                <a href="#" class="text-decoration-none">
                                    <div class="product-image-container">
                                        <img src="{{ asset('Images/sampa_outlet_3.jpg') }}" class="card-img-top" alt="Mampara para baño Alukit" loading="lazy">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 class="card-title text-green">Mampara Alukit</h5>
                                            <div class="rating small text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <p class="card-text text-muted small">Modelo Premium - Vidrio templado</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h5 text-success fw-bold m-0">$12,299</span>
                                            <button class="btn btn-sm btn-outline-green">
                                                <i class="bi bi-cart-plus me-1"></i> Añadir
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Producto 4 -->
                        <div class="col-md-6 col-lg-4 product-card" data-category="cortinas" data-price="12299">
                            <div class="card h-100 border-0 shadow-hover">
                                <a href="#" class="text-decoration-none">
                                    <div class="product-image-container">
                                        <img src="{{ asset('Images/sampa_outlet_4.jpg') }}" class="card-img-top" alt="Cortina roller blackout" loading="lazy">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 class="card-title text-green">Cortina Roller</h5>
                                            <div class="rating small text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                        </div>
                                        <p class="card-text text-muted small">Blackout - Varios colores</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h5 text-success fw-bold m-0">$12,299</span>
                                            <button class="btn btn-sm btn-outline-green">
                                                <i class="bi bi-cart-plus me-1"></i> Añadir
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Producto 5 -->
                        <div class="col-md-6 col-lg-4 product-card" data-category="aluminio" data-price="12299">
                            <div class="card h-100 border-0 shadow-hover">
                                <div class="product-badge bg-primary">Popular</div>
                                <a href="#" class="text-decoration-none">
                                    <div class="product-image-container">
                                        <img src="{{ asset('Images/sampa_outlet_6.jpg') }}" class="card-img-top" alt="Ventana corrediza A30" loading="lazy">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 class="card-title text-green">Ventana A30</h5>
                                            <div class="rating small text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </div>
                                        </div>
                                        <p class="card-text text-muted small">Línea A30 - Anodizado</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h5 text-success fw-bold m-0">$12,299</span>
                                            <button class="btn btn-sm btn-outline-green">
                                                <i class="bi bi-cart-plus me-1"></i> Añadir
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Producto 6 -->
                        <div class="col-md-6 col-lg-4 product-card" data-category="puertas-interior" data-price="12299">
                            <div class="card h-100 border-0 shadow-hover">
                                <a href="#" class="text-decoration-none">
                                    <div class="product-image-container">
                                        <img src="{{ asset('Images/sampa_outlet_7.png') }}" class="card-img-top" alt="Puerta interior diseño clásico" loading="lazy">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 class="card-title text-green">Puerta Clásica</h5>
                                            <div class="rating small text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                        </div>
                                        <p class="card-text text-muted small">Diseño clásico - Nogal</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h5 text-success fw-bold m-0">$12,299</span>
                                            <button class="btn btn-sm btn-outline-green">
                                                <i class="bi bi-cart-plus me-1"></i> Añadir
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Paginación -->
                    <nav class="mt-5" aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('styles')
<style>
    /* Estilos específicos para tienda */
    .category-card, .filter-card {
        transition: all 0.3s ease;
    }
    
    .category-card:hover, .filter-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .list-group-item {
        border: none;
        padding: 12px 15px;
        margin-bottom: 5px;
        border-radius: 8px !important;
        transition: all 0.3s ease;
    }
    
    .list-group-item:hover, .list-group-item.active {
        background-color: rgba(49, 146, 85, 0.1);
        color: rgb(49, 146, 85);
    }
    
    .list-group-item.active {
        font-weight: bold;
        border-left: 3px solid rgb(49, 146, 85);
    }
    
    .product-card .card {
        transition: all 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .shadow-hover:hover {
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15) !important;
        transform: translateY(-5px);
    }
    
    .product-image-container {
        aspect-ratio: 4 / 3;
        overflow: hidden;
        background-color: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .product-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
        display: block;
    }
    
    .product-card:hover .product-image-container img {
        transform: scale(1.05);
    }
    
    .product-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 6px 12px;
        border-radius: 20px;
        color: white;
        font-size: 0.85rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .card-body {
        min-height: 120px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    
    .rating {
        color: #ffc107;
    }
    
    .btn-outline-green {
        border-color: rgb(49, 146, 85);
        color: rgb(49, 146, 85);
    }
    
    .btn-outline-green:hover {
        background-color: rgb(49, 146, 85);
        color: white;
    }
    
    .page-item.active .page-link {
        background-color: rgb(49, 146, 85);
        border-color: rgb(49, 146, 85);
    }
    
    .page-link {
        color: rgb(49, 146, 85);
    }
    
    /* Mantenemos los estilos base del layout */
    .bg-gradient-green {
        background: linear-gradient(135deg, rgba(49, 146, 85, 1) 0%, rgba(39, 126, 75, 1) 100%);
    }
    
    .bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg width="10" height="10" xmlns="http://www.w3.org/2000/svg"><path d="M0 0 L10 10" stroke="white" stroke-width="0.5" opacity="0.3"/></svg>') repeat;
        opacity: 0.1;
    }
    
    .text-gradient-green {
        background: linear-gradient(135deg, rgba(49, 146, 85, 1) 0%, rgba(39, 126, 75, 1) 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    
    .bg-section-soft {
        background-color: rgba(249, 249, 249, 0.7);
        border-left: 5px solid rgba(49, 146, 85, 0.3);
    }
    
    .text-green {
        color: rgb(49, 146, 85);
    }
    
    /* Responsividad */
    @media (max-width: 768px) {
        .hero-header {
            padding: 1.5rem !important;
        }
        
        .hero-header h1 {
            font-size: 2rem;
        }
        
        .hero-header p {
            font-size: 1rem;
        }
        
        .category-card, .filter-card {
            margin-bottom: 1.5rem;
        }
        
        .product-image-container {
            aspect-ratio: 1 / 1;
        }
        
        .card-body {
            min-height: 140px;
        }
    }
</style>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Inicializar animaciones
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-out-back'
    });

    // Filtrado por categoría
    const categoryButtons = document.querySelectorAll('.list-group-item[data-category]');
    const products = document.querySelectorAll('.product-card');

    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const selectedCategory = this.dataset.category;

            products.forEach(product => {
                if (selectedCategory === 'all' || product.dataset.category === selectedCategory) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    });

    // Filtrado por rango de precio
    const priceRange = document.getElementById('priceRange');
    priceRange.addEventListener('input', function() {
        const maxPrice = parseInt(this.value);

        products.forEach(product => {
            const price = parseInt(product.dataset.price);
            if (price <= maxPrice) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    });

    // Reiniciar filtros
    const resetButton = document.querySelector('.btn-outline-green.w-100');
    resetButton.addEventListener('click', function() {
        priceRange.value = priceRange.max;
        categoryButtons.forEach(btn => btn.classList.remove('active'));
        categoryButtons[0].classList.add('active');
        products.forEach(product => product.style.display = 'block');
    });
</script>
@endsection