<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sampa Aberturas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('style.css')}}">
</head>
<body>
    <div class="page-container">
        <header class="hero">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid navbar-container">
                    <a href="#" class="logo">
                        <img src="{{ asset('Images/Sampa_Logo_Livianno.png') }}" alt="Tu Logo">
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
                                <li class="nav-item"><a class="nav-link fw-bold fs-6 active href="index.html">Inicio</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link fw-bold fs-6 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Productos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ url('/aberturas-aluminio') }}">Aberturas de aluminio</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/puertas-placa') }}">Puertas placas</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/mamparas') }}">Mamparas</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/mosquiteros') }}">Mosquiteros</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/herrajes') }}">Herrajes</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/perfileria') }}">Perfileria</a></li>
                                </ul>
                                <li class="nav-item"><a class="nav-link fw-bold fs-6" href="{{ url('/obras') }}">Obras</a></li>
                                <li class="nav-item"><a class="nav-link fw-bold fs-6" href="{{ url('/outlet') }}">Outlet</a></li>
                                <li class="nav-item"><a class="nav-link fw-bold fs-6" href="{{ url('/nosotros') }}">Nosotros</a></li>
                                <li class="nav-item"><a class="nav-link fw-bold fs-6" href="{{ url('/contacto') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="presentacion">
                <p class="bienvenida">Bienvenidos</p>
                <h2><span>Sampa Aberturas</span> Creamos ambientes</h2>
                <p class="descripcion">Fabricamos cerramientos para tu hogar</p>
            </div>
        </header>

        <main class="content">
            <section id="presenta" class="presenta">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container_presenta">
                                <div class="presenta_info">
                                    <div class="presenta_text">
                                        <h1>Brindamos soluciones <br> integrales a tu hogar</h1>
                                    </div>
                                </div>
                                <div class="presenta_img">
                                    <img src="{{ asset('Images/sampa_casa1.jpg') }}" alt="Imagen 1">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container_presenta">
                                <div class="presenta_img">
                                    <img src="{{ asset('Images/sampa_casa_2.jpg') }}" alt="Imagen 2">
                                </div>
                                <div class="presenta_info">
                                    <div class="presenta_text">
                                        <h1>Le damos valor <br> a tus ambientes</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container_presenta">
                                <div class="presenta_info">
                                    <div class="presenta_text">
                                        <h1>La experiencia es <br> nuestro mejor producto</h1>
                                    </div>
                                </div>
                                <div class="presenta_img">
                                    <img src="{{ asset('Images/sampa_casa_3.jpg') }}" alt="Imagen 3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </section>

            <section id="servicios" class="servicios">
                <div class="imagen_fondo">
                    <div class="container">
                        <!-- <h2>Nuestros Servicios Destacados</h2> -->
                        <div class="row">
                            <div class="col-md-4 servicio">
                                <i class="bi bi-gear"></i> <h3>Asesoramiento Personalizado</h3>
                                <p>Te ayudamos a elegir las mejores <br>soluciones para tus espacios.</p>
                            </div>
                            <div class="col-md-4 servicio">
                                <i class="bi bi-tools"></i> <h3>Servicio Postventa</h3>
                                <p>Garantizamos tu satisfacción <br>con un excelente servicio postventa.</p>
                            </div>
                            <div class="col-md-4 servicio">
                                <i class="bi bi-house-door"></i> <h3>Fabricamos e Instalamos a Medida</h3>
                                <p>Creamos aberturas personalizadas<br> para tus necesidades.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="productos" class="seccion">
                <div class="container">
                    <!-- <h2 class="text-center mb-4">Nuestros Productos</h2> -->
                    <div class="row g-4">
                        <!-- Producto 1 -->
                        <div class="col-md-4">
                            <div class="producto-item" onclick="window.location='http://tusitio.com/producto/aberturas-aluminio';">
                                <img src=" {{ asset('Images/sampa_aluminio.jpeg') }}" alt="Aberturas de Aluminio" class="img-fluid rounded">
                                <div class="overlay">
                                    <p>ABERTURAS<br>DE ALUMINIO</p>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 2 -->
                        <div class="col-md-4">
                            <div class="producto-item" onclick="window.location='http://tusitio.com/producto/puertas-placas';">
                                <img src="{{ asset('Images/sampa_placa.jpg') }}" alt="Puertas Placas" class="img-fluid rounded">
                                <div class="overlay">
                                    <p>PUERTAS<br>PLACAS</p>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 3 -->
                        <div class="col-md-4">
                            <div class="producto-item" onclick="window.location='http://tusitio.com/producto/mamparas';">
                                <img src="{{ asset('Images/sampa_mampara.jpg') }}" alt="Mamparas" class="img-fluid rounded">
                                <div class="overlay">
                                    <p>MAMPARAS<br>PARA BAÑO</p>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 4 -->
                        <div class="col-md-4">
                            <div class="producto-item" onclick="window.location='http://tusitio.com/producto/mosquiteros';">
                                <img src="{{ asset('Images/sampa_mosquitero.jpeg') }}" alt="Mosquiteros" class="img-fluid rounded">
                                <div class="overlay">
                                    <p>MOSQUITEROS</p>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 5 -->
                        <div class="col-md-4">
                            <div class="producto-item" onclick="window.location='http://tusitio.com/producto/herrajes';">
                                <img src="{{ asset('Images/sampa_herrajes.jpeg') }}" alt="Herrajes" class="img-fluid rounded">
                                <div class="overlay">
                                    <p>HERRAJES</p>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 6 -->
                        <div class="col-md-4">
                            <div class="producto-item" onclick="window.location='http://tusitio.com/producto/perfileria';">
                                <img src=" {{ asset('Images/sampa_perfileria.jpg') }}" alt="Perfilería" class="img-fluid rounded">
                                <div class="overlay">
                                    <p>PERFILERÍA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Sección: Marcas con las que Trabajamos -->
            <!-- <section id="marcas" class="seccion bg-light">
                <div class="container">
                    <h4 class="text-center mb-4">Colaboramos con las mejores marcas del mercado para ofrecerte productos de alta calidad.</h4>
                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-6 col-md-3 mb-4">
                            <img src="asset/marca1.png" alt="Marca 1" class="img-fluid">
                        </div>
                        
                        <div class="col-6 col-md-3 mb-4">
                            <img src="asset/marca2.png" alt="Marca 2" class="img-fluid">
                        </div>
                        
                        <div class="col-6 col-md-3 mb-4">
                            <img src="asset/marca3.png" alt="Marca 3" class="img-fluid">
                        </div>
                        
                        <div class="col-6 col-md-3 mb-4">
                            <img src="asset/marca4.png" alt="Marca 4" class="img-fluid">
                        </div>
                        
                        <div class="col-6 col-md-3 mb-4">
                            <img src="asset/marca5.png" alt="Marca 5" class="img-fluid">
                        </div>
                        
                        <div class="col-6 col-md-3 mb-4">
                            <img src="asset/marca6.png" alt="Marca 6" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section> -->
        </main>

        <footer class="footer text-light py-4">
            <div class="container">
                <div class="row text-center text-md-start">
                    <!-- Logo -->
                    <div class="col-12 col-md-3 mb-4 mb-md-0">
                        <img src=" {{asset('Images/Sampa_Logo.jpg') }}" alt="Logo Sampa Aberturas" class="img-fluid footer-logo">
                    </div>
        
                    <!-- Navegación -->
                    <div class="col-12 col-md-3 mb-4 mb-md-0">
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
                    <div class="col-12 col-md-3 mb-4 mb-md-0">
                        <p class="mb-1"><i class="bi bi-geo-alt-fill"></i> Calle Falsa 123, Ciudad</p>
                        <p class="mb-1"><i class="bi bi-telephone-fill"></i> +12 345 6789</p>
                        <p class="mb-1"><i class="bi bi-envelope-fill"></i> info@sampaaberturas.com</p>
                    </div>
        
                    <!-- Redes Sociales -->
                    <div class="col-12 col-md-3 mb-4 mb-md-0">
                        <div class="d-flex justify-content-center justify-content-md-start gap-3">
                            <a href="https://www.facebook.com/profile.php?id=100063444205455" target="_blank" class="text-light"><i class="bi bi-facebook fs-4"></i></a>
                            <a href="https://www.instagram.com/sampaaberturas/" target="_blank" class="text-light"><i class="bi bi-instagram fs-4"></i></a>
                            <a href="https://wa.me/5493572666666" target="_blank" class="text-light"><i class="bi bi-whatsapp fs-4"></i></a>
                        </div>
                    </div>
                </div>
        
                <hr class="bg-light">
        
                <!-- Copyright -->
                <div class="text-center mt-3">
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