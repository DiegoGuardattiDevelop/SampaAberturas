@extends('layouts.app')

@section('title', 'Sampa - Tienda')

@section('content')
<main class="container mt-5"
    <section class="gallery mb-5">
        <div>
            <hr class="bg-success-light">
            <h1>Tienda</h1>
            <hr class="bg-light">
        </div>
        <div class="container">
            <div class="row">
                <!-- Menú vertical de categorías -->
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" data-category="all">Todas</a>
                        <a href="#" class="list-group-item list-group-item-action" data-category="aluminio">Aluminio</a>
                        <a href="#" class="list-group-item list-group-item-action" data-category="puertas-interior">Puertas de Interior</a>
                        <a href="#" class="list-group-item list-group-item-action" data-category="maparas">Mamparas</a>
                        <a href="#" class="list-group-item list-group-item-action" data-category="cortinas">Cortinas</a>
                    </div>
                </div>

                <!-- Área de productos -->
                <div class="col-md-9">
                    <div class="row" id="product-container">
                        <!-- Producto 1 (Aluminio) -->
                        <div class="col-md-4 product-card" data-category="aluminio">
                            <a href="detalle-producto.html?id=1" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_1.jpg') }}" alt="Producto 1" class="product-image active">
                                        </div>
                                        <h5 class="card-title text-center">Producto 1</h5>
                                        <p class="card-text text-center text-success fw-bold">$9,999</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-success">Comprar</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Producto 2 (Puertas de Interior) -->
                        <div class="col-md-4 product-card" data-category="puertas-interior">
                            <a href="detalle-producto.html?id=2" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_2.jpg') }}" alt="Producto 2" class="product-image active">
                                        </div>
                                        <h5 class="card-title text-center">Producto 2</h5>
                                        <p class="card-text text-center text-success fw-bold">$7,499</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-success">Comprar</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Producto 3 (Maparas) -->
                        <div class="col-md-4 product-card" data-category="maparas">
                            <a href="detalle-producto.html?id=3" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_3.jpg') }}" alt="Producto 3" class="product-image active">
                                        </div>
                                        <h5 class="card-title text-center">Producto 3</h5>
                                        <p class="card-text text-center text-success fw-bold">$12,299</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-success">Comprar</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Producto 4 (Cortinas) -->
                        <div class="col-md-4 product-card" data-category="cortinas">
                            <a href="detalle-producto.html?id=4" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_4.jpg') }}" alt="Producto 4" class="product-image active">
                                        </div>
                                        <h5 class="card-title text-center">Producto 4</h5>
                                        <p class="card-text text-center text-success fw-bold">$12,299</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-success">Comprar</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Producto 5 (Aluminio) -->
                        <div class="col-md-4 product-card" data-category="aluminio">
                            <a href="detalle-producto.html?id=5" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_6.jpg') }}" alt="Producto 5" class="product-image active">
                                        </div>
                                        <h5 class="card-title text-center">Producto 5</h5>
                                        <p class="card-text text-center text-success fw-bold">$12,299</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-success">Comprar</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Producto 6 (Puertas de Interior) -->
                        <div class="col-md-4 product-card" data-category="puertas-interior">
                            <a href="detalle-producto.html?id=6" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_7.png') }}" alt="Producto 6" class="product-image active">
                                        </div>
                                        <h5 class="card-title text-center">Producto 6</h5>
                                        <p class="card-text text-center text-success fw-bold">$12,299</p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-success">Comprar</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection