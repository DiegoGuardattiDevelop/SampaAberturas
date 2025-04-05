@include('header_views')
        <main class="content outlet-gallery">
            <section class="gallery">
                <div>
                    <hr class="bg-success-light">
                    <h1>Productos en Outlet</h1>
                    <hr class="bg-light">
                </div>
                <div class="container">
                    <div class="row">
                        <!-- Producto 1 -->
                        <div class="col-md-4 product-card">
                            <a href="detalle-producto.html?id=1" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_1.jpg') }}" alt="Producto 1" class="product-image active">
                                            <!-- <img src="assets/producto1a.jpg" alt="Producto 1 - otra vista" class="product-image"> -->
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
        
                        <!-- Producto 2 -->
                        <div class="col-md-4 product-card">
                            <a href="detalle-producto.html?id=2" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_2.jpg') }}" alt="Producto 2" class="product-image active">
                                            <!-- <img src="assets/producto2a.jpg" alt="Producto 2 - otra vista" class="product-image"> -->
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
        
                        <!-- Producto 3 -->
                        <div class="col-md-4 product-card">
                            <a href="detalle-producto.html?id=3" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_3.jpg') }}" alt="Producto 3" class="product-image active">
                                            <!-- <img src="assets/producto3a.jpg" alt="Producto 3 - otra vista" class="product-image"> -->
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
                        <div class="col-md-4 product-card">
                            <a href="detalle-producto.html?id=3" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_4.jpg') }}" alt="Producto 3" class="product-image active">
                                            <!-- <img src="assets/producto3a.jpg" alt="Producto 3 - otra vista" class="product-image"> -->
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
                        <div class="col-md-4 product-card">
                            <a href="detalle-producto.html?id=3" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_6.jpg') }}" alt="Producto 3" class="product-image active">
                                            <!-- <img src="assets/producto3a.jpg" alt="Producto 3 - otra vista" class="product-image"> -->
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
                        <div class="col-md-4 product-card">
                            <a href="detalle-producto.html?id=3" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-images">
                                            <img src="{{asset('Images/sampa_outlet_7.png') }}" alt="Producto 3" class="product-image active">
                                            <!-- <img src="assets/producto3a.jpg" alt="Producto 3 - otra vista" class="product-image"> -->
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
        
                    </div>
                </div>
            </section>
        </main>
        
        @include('footer')       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Función para cambiar el color del navbar al hacer scroll
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('scroll', function() {
                var navbar = document.querySelector('.navbar');
                
                // Agregar clase al hacer scroll (puedes ajustar el valor 50 según prefieras)
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });
        });
    </script>
</body>
</html>