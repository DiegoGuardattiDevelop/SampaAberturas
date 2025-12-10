<header class="hero position-relative {{ Request::is('home') ? 'hero-full' : 'hero-min' }}">
    <!-- Background solo en home -->
    @if(Request::is('home'))
    <div class="hero-bg home-gradient"></div>
    <div class="hero-overlay"></div>
    @endif
    
    <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100" aria-label="Menú principal">
        <div class="container">
            <a href="/home" class="navbar-brand" aria-label="Sampa Aberturas - Inicio">
                <img src="{{ asset('Images/Sampa_Logo_Livianno.png') }}" alt="Logo de Sampa Aberturas" class="logo-img" style="height: 50px;" aria-hidden="false">
            </a>
    
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Alternar navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="offcanvas offcanvas-end bg-section-soft" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header border-bottom">
                    <img src="{{ asset('Images/Sampa_Logo_Livianno.png') }}" alt="Logo de Sampa Aberturas" style="height: 40px;" aria-hidden="false">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar menú"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto align-items-lg-center" role="menubar">
                        <li class="nav-item" role="none">
                            <a class="nav-link fw-semibold {{ Request::is('/home') ? 'active text-green' : '' }}" href="{{ url('/home') }}" role="menuitem" aria-current="{{ Request::is('/home') ? 'page' : 'false' }}" accesskey="h">Inicio</a>
                        </li>
    
                        <li class="nav-item dropdown" role="none">
                            <a class="nav-link fw-semibold dropdown-toggle" href="#" data-bs-toggle="dropdown" role="menuitem" aria-expanded="false" aria-haspopup="true" id="productosMenu" accesskey="p">Productos</a>
                            <ul class="dropdown-menu dropdown-menu-lg-end p-2 border-0 shadow" aria-labelledby="productosMenu" role="menu">
                                <li role="none"><a class="dropdown-item py-2" href="{{ url('/aberturas-aluminio') }}" role="menuitem">Aberturas de aluminio</a></li>
                                <li role="none"><hr class="dropdown-divider mx-2 my-1"></li>
                                <li role="none"><a class="dropdown-item py-2" href="{{ url('/puertas-placa') }}" role="menuitem">Puertas de Interior</a></li>
                                <li role="none"><hr class="dropdown-divider mx-2 my-1"></li>
                                <li role="none"><a class="dropdown-item py-2" href="{{ url('/mamparas') }}" role="menuitem">Vidrios y Mamparas</a></li>
                                <li role="none"><hr class="dropdown-divider mx-2 my-1"></li>
                                <li role="none"><a class="dropdown-item py-2" href="{{ url('/mosquiteros') }}" role="menuitem">Cortinas y Mosquiteros</a></li>
                                <li role="none"><hr class="dropdown-divider mx-2 my-1"></li>
                                <li role="none"><a class="dropdown-item py-2" href="{{ url('/herrajes') }}" role="menuitem">Herrajes y perfileria</a></li>
                                <li role="none"><hr class="dropdown-divider mx-2 my-1"></li>
                                <li role="none"><a class="dropdown-item py-2" href="{{ url('/perfileria') }}" role="menuitem">Portones Automáticos</a></li>
                            </ul>
                        </li>
    
                        <li class="nav-item" role="none">
                            <a class="nav-link fw-semibold {{ Request::is('obras') ? 'active text-green' : '' }}" href="{{ url('/obras') }}" role="menuitem" aria-current="{{ Request::is('obras') ? 'page' : 'false' }}" accesskey="o">Obras</a>
                        </li>
    
                        <li class="nav-item" role="none">
                            <a class="nav-link fw-semibold {{ Request::is('outlet') ? 'active text-green' : '' }}" href="{{ url('/outlet') }}" role="menuitem" aria-current="{{ Request::is('outlet') ? 'page' : 'false' }}" accesskey="t">Tienda</a>
                        </li>
    
                        <li class="nav-item" role="none">
                            <a class="nav-link fw-semibold {{ Request::is('nosotros') ? 'active text-green' : '' }}" href="{{ url('/nosotros') }}" role="menuitem" aria-current="{{ Request::is('nosotros') ? 'page' : 'false' }}" accesskey="n">Nosotros</a>
                        </li>
    
                        <li class="nav-item" role="none">
                            <a class="nav-link fw-semibold {{ Request::is('contacto') ? 'active text-green' : '' }}" href="{{ url('/contacto') }}" role="menuitem" aria-current="{{ Request::is('contacto') ? 'page' : 'false' }}" accesskey="c">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @if(Request::is('home'))
    <!-- Skip link para accesibilidad -->
    <a href="#main-content" class="skip-link" tabindex="0">Saltar al contenido principal</a>

    <div class="hero-content">
        <div class="container text-center text-white position-relative">
            <p class="bienvenida lead mb-2" id="bienvenida">Bienvenidos</p>
            <h1 class="display-4 fw-bold mb-3" id="main-title">Sampa Aberturas</h1>
            <p class="descripcion hero-subtitle mb-4" id="main-subtitle">Creamos ambientes en tu hogar</p>
            <div class="hero-buttons">
                <a href="{{ route('contacto') }}" class="btn btn-custom-green btn-lg px-4" aria-label="Contactar con Sampa Aberturas" accesskey="1">
                    <i class="bi bi-envelope me-1" aria-hidden="true"></i> Contactanos
                </a>
                <a href="#productos" class="btn btn-custom-outline-green btn-lg px-4" aria-label="Ver sección de productos" accesskey="2">
                    <i class="bi bi-box-seam me-1" aria-hidden="true"></i> Ver Productos
                </a>
            </div>
        </div>
    </div>
    @endif
</header>

<style>
    /* Estilos del Header */
    .hero-full {
        min-height: 100vh;
        position: relative;
    }

    .hero-min {
        min-height: 80px;
        position: relative;
    }

    /* Estilos solo aplican cuando están dentro de hero-full */
    .hero-full .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('Images/sampa_casa_3.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .hero-full .home-gradient::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.3) 100%);
    }
    
    .hero-full .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.1) 100%);
        z-index: 0;
    }
    
    /* Navbar Styles */
    .navbar {
        z-index: 1000;
        transition: all 0.3s ease;
        padding: 15px 0;
    }
    
    .navbar.scrolled {
        background-color: rgba(255, 255, 255, 0.95) !important;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        padding: 10px 0;
    }
    
    .navbar.scrolled .nav-link {
        color: #333 !important;
    }
    
    .navbar.scrolled .navbar-brand img {
        filter: brightness(0);
    }
    
    .logo-img {
        transition: all 0.3s ease;
        height: auto;
        max-width: 100%;
    }
    
    /* Navigation Links */
    .nav-link {
        position: relative;
        padding: 8px 12px;
        transition: all 0.3s ease;
        color: white;
    }
    
    .navbar.scrolled .nav-link {
        color: #333 !important;
    }
    
    .nav-link.active {
        color: rgb(49, 146, 85) !important;
    }
    
    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 12px;
        right: 12px;
        height: 2px;
        background-color: rgb(49, 146, 85);
    }
    
    /* Dropdown Styles */
    .dropdown-menu {
        border-radius: 8px;
        border: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .dropdown-item {
        border-radius: 6px;
        transition: all 0.2s ease;
        padding: 8px 16px;
    }
    
    .dropdown-item:hover {
        background-color: rgba(49, 146, 85, 0.1);
        color: rgb(49, 146, 85);
    }
    
    /* Hero Content */
    .hero-content {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        transform: translateY(-50%);
        z-index: 1;
    }
    
    .hero-subtitle {
        font-size: 1.25rem;
        max-width: 600px;
        margin: 0 auto;
    }
    
    /* Button Styles */
    .btn-custom-green {
        background-color: rgb(49, 146, 85);
        color: white;
        border: 2px solid rgb(49, 146, 85);
        transition: all 0.3s ease;
        padding: 10px 20px;
    }
    
    .btn-custom-green:hover {
        background-color: rgb(39, 126, 75);
        border-color: rgb(39, 126, 75);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .btn-custom-outline-green {
        background-color: transparent;
        color: white;
        border: 2px solid white;
        transition: all 0.3s ease;
        padding: 10px 20px;
        margin-left: 10px;
    }
    
    .btn-custom-outline-green:hover {
        background-color: rgba(255,255,255,0.1);
        border-color: rgb(49, 146, 85);
        color: white;
        transform: translateY(-2px);
    }
    
    .navbar.scrolled .btn-custom-outline-green {
        color: rgb(49, 146, 85);
        border-color: rgb(49, 146, 85);
    }
    
    .navbar.scrolled .btn-custom-outline-green:hover {
        background-color: rgba(49, 146, 85, 0.1);
    }

    /* Skip link para accesibilidad */
    .skip-link {
        position: absolute;
        top: -40px;
        left: 0;
        background: rgb(49, 146, 85);
        color: white;
        padding: 8px 16px;
        z-index: 1001;
        transition: top 0.3s ease;
        text-decoration: none;
        border-radius: 0 0 5px 0;
    }

    .skip-link:focus {
        top: 0;
    }

    /* Mejorar contraste de colores para accesibilidad */
    .nav-link {
        color: white;
        transition: all 0.3s ease;
    }

    .navbar.scrolled .nav-link {
        color: #212529 !important;
    }

    .nav-link.active {
        color: rgb(49, 146, 85) !important;
        font-weight: 600;
    }

    /* Estilos de enfoque para accesibilidad */
    .nav-link:focus,
    .dropdown-item:focus,
    .btn:focus,
    a:focus {
        outline: 2px solid rgb(49, 146, 85);
        outline-offset: 2px;
    }

    /* Mejorar contraste en texto sobre imágenes */
    .hero-content {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
    }
</style>

<script>
    // Navbar scroll effect
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');
        
        // Función para manejar el scroll
        function handleScroll() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }
        
        // Ejecutar al cargar la página
        handleScroll();
        
        // Escuchar eventos de scroll
        window.addEventListener('scroll', handleScroll);
        
        // Inicializar tooltips de Bootstrap
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>