<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outlet | Sampa Aberturas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style_obra.css">
</head>
<body>
    <div class="page-container">
        <header class="hero">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid navbar-container">
                    <a href="#" class="logo">
                        <img src="asset/Sampa_Logo_Livianno.png" alt="Tu Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Menú offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"><a class="nav-link fw-bold fs-6" href="index.html">Inicio</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link fw-bold fs-6 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Productos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="aberturas_aluminio.html">Aberturas de aluminio</a></li>
                                    <li><a class="dropdown-item" href="Puertas_placa.html">Puertas placas</a></li>
                                    <li><a class="dropdown-item" href="mamparas.html">Mamparas</a></li>
                                    <li><a class="dropdown-item" href="mosquiteros.html">Mosquiteros</a></li>
                                    <li><a class="dropdown-item" href="herrajes.html">Herrajes</a></li>
                                    <li><a class="dropdown-item" href="perfileria.html">Perfileria</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link fw-bold fs-6" href="obras.html">Obras</a></li>
                            <li class="nav-item"><a class="nav-link fw-bold fs-6 active" href="#">Outlet</a></li>
                            <li class="nav-item"><a class="nav-link fw-bold fs-6" href="nosotros.html">Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link fw-bold fs-6" href="contacto.html">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
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
                                            <img src="asset/sampa_outlet_1.jpg" alt="Producto 1" class="product-image active">
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
                                            <img src="asset/sampa_outlet_2.jpg" alt="Producto 2" class="product-image active">
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
                                            <img src="asset/sampa_outlet_3.jpg" alt="Producto 3" class="product-image active">
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
                                            <img src="asset/sampa_outlet_4.jpg" alt="Producto 3" class="product-image active">
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
                                            <img src="asset/sampa_outlet_6.jpg" alt="Producto 3" class="product-image active">
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
                                            <img src="asset/sampa_outlet_7.png" alt="Producto 3" class="product-image active">
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
        
        <footer class="footer text-light py-4">
            <div class="container">
                <div class="row text-center text-md-start">
                    
                    <!-- Logo -->
                    <div class="col-md-3 mb-3">
                        <img src="asset/Sampa_Logo.jpg" alt="Logo Sampa Aberturas" class="img-fluid" width="400vh">
                    </div>
        
                    <!-- Navegación -->
                    <div class="col-md-3 mb-3">
                        <ul class="list-unstyled">
                            <li><a href="index.html" class="text-light text-decoration-none">Inicio</a></li>
                            <li><a href="#productos" class="text-light text-decoration-none">Productos</a></li>
                            <li><a href="obras.html" class="text-light text-decoration-none">Obras</a></li>
                            <li><a href="outlet.html" class="text-light text-decoration-none">Outlet</a></li>
                            <li><a href="nosotros.html" class="text-light text-decoration-none">Nosotros</a></li>
                            <li><a href="contacto.html" class="text-light text-decoration-none">Contacto</a></li>
                        </ul>
                    </div>
        
                    <!-- Contacto -->
                    <div class="col-md-3 mb-3">
                        <p class="mb-1"><i class="bi bi-geo-alt-fill"></i> Calle Falsa 123, Ciudad</p>
                        <p class="mb-1"><i class="bi bi-telephone-fill"></i> +12 345 6789</p>
                        <p class="mb-1"><i class="bi bi-envelope-fill"></i> info@sampaaberturas.com</p>
                    </div>
        
                    <!-- Redes Sociales -->
                    <div class="col-md-3 mb-3">
                        <div class="d-flex justify-content-center justify-content-md-start gap-3">
                            <a href="https://www.facebook.com/profile.php?id=100063444205455" target="_blank" class="text-light"><i class="bi bi-facebook fs-4"></i></a>
                            <a href="https://www.instagram.com/sampaaberturas/" target="_blank" class="text-light"><i class="bi bi-instagram fs-4"></i></a>
                            <a href="https://wa.me/5493572666666" target="_blank" class="text-light"><i class="bi bi-whatsapp fs-4"></i></a> </div>
                        </div>
                    </div>
                </div>
        
                <hr class="bg-light">
        
                <!-- Copyright -->
                <div class="text-center">
                    <p class="mb-0">&copy; 2024 Sampa Aberturas S.R.L. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>         
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