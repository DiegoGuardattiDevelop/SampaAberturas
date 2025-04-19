<header class="hero position-relative {{ Request::is('/') ? 'hero-full' : 'hero-min' }}">
    <!-- Overlay para mejorar legibilidad -->
    <div class="hero-overlay"></div>
    
    <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src="{{ asset('Images/Sampa_Logo_Livianno.png') }}" alt="Sampa Aberturas" class="logo-img" style="height: 50px;">
            </a>
            
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="offcanvas offcanvas-end bg-section-soft" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header border-bottom">
                    <img src="{{ asset('Images/Sampa_Logo_Livianno.png') }}" alt="Sampa Aberturas" style="height: 40px;">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('/') ? 'active text-green' : 'text-dark' }}" href="{{ url('/') }}">Inicio</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-semibold dropdown-toggle text-dark" href="#" data-bs-toggle="dropdown">
                                Productos
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg-end p-2 border-0 shadow">
                                <li><a class="dropdown-item py-2" href="{{ url('/aberturas-aluminio') }}">Aberturas de aluminio</a></li>
                                <li><hr class="dropdown-divider mx-2 my-1"></li>
                                <li><a class="dropdown-item py-2" href="{{ url('/puertas-placa') }}">Puertas de Interior</a></li>
                                <li><hr class="dropdown-divider mx-2 my-1"></li>
                                <li><a class="dropdown-item py-2" href="{{ url('/mamparas') }}">Vidrios y Mamparas</a></li>
                                <li><hr class="dropdown-divider mx-2 my-1"></li>
                                <li><a class="dropdown-item py-2" href="{{ url('/mosquiteros') }}">Cortinas y Mosquiteros</a></li>
                                <li><hr class="dropdown-divider mx-2 my-1"></li>
                                <li><a class="dropdown-item py-2" href="{{ url('/herrajes') }}">Herrajes y perfileria</a></li>
                                <li><hr class="dropdown-divider mx-2 my-1"></li>
                                <li><a class="dropdown-item py-2" href="{{ url('/perfileria') }}">Portones Automáticos</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('obras') ? 'active text-green' : 'text-dark' }}" href="{{ url('/obras') }}">Obras</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('outlet') ? 'active text-green' : 'text-dark' }}" href="{{ url('/outlet') }}">Tienda</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('nosotros') ? 'active text-green' : 'text-dark' }}" href="{{ url('/nosotros') }}">Nosotros</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('contacto') ? 'active text-green' : 'text-dark' }}" href="{{ url('/contacto') }}">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @if(Request::is('/'))
    <div class="hero-bg"></div>
    <div class="hero-content">
        <div class="container text-center text-white position-relative">
            <p class="bienvenida lead mb-2">Bienvenidos</p>
            <h1 class="display-4 fw-bold mb-3">Sampa Aberturas</h1>
            <p class="descripcion hero-subtitle mb-4">Creamos ambientes en tu hogar</p>
            <div class="hero-buttons">
                <a href="{{ route('contacto') }}" class="btn btn-custom-green btn-lg px-4">
                    <i class="bi bi-envelope me-1"></i> Contactanos
                </a>
                <a href="#productos" class="btn btn-custom-green btn-lg px-4">
                    <i class="bi bi-box-seam me-1"></i> Ver Productos
                </a>
            </div>
        </div>
    </div>
    @endif
</header>

<style>
    /* Estilos del Header */
    /* .hero {
        min-height: {{ Request::is('/') ? '100vh' : '80px' }};
        position: relative;
    } */
    .hero-full {
    min-height: 100vh;
    }

    .hero-min {
        min-height: 80px;
    }
    .hero-bg {
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
    
    @if(Request::is('/'))
    .hero-bg::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.3) 100%);
    }
    @endif
    
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.1) 100%);
        z-index: 0;
    }
    
    .navbar {
        z-index: 1000;
        transition: all 0.3s ease;
        padding-top: 15px;
        padding-bottom: 15px;
    }
    
    .navbar.scrolled {
        background-color: rgba(255, 255, 255, 0.95) !important;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        padding-top: 10px;
        padding-bottom: 10px;
    }
    
    .navbar.scrolled .nav-link {
        color: #333 !important;
    }
    
    .navbar.scrolled .navbar-brand img {
        filter: brightness(0);
    }
    
    .logo-img {
        transition: all 0.3s ease;
    }
    
    .nav-link {
        position: relative;
        padding: 8px 12px;
        transition: all 0.3s ease;
    }
    
    .nav-link.active:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 12px;
        right: 12px;
        height: 2px;
        background-color: rgb(49, 146, 85);
    }
    
    .dropdown-menu {
        border-radius: 8px;
    }
    
    .dropdown-item {
        border-radius: 6px;
        transition: all 0.2s ease;
    }
    
    .dropdown-item:hover {
        background-color: rgba(49, 146, 85, 0.1);
        color: rgb(49, 146, 85);
    }
    
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
        margin-left: auto;
        margin-right: auto;
    }
    
    /* Estilos consistentes con el resto */
    .bg-section-soft {
        background-color: rgba(255, 255, 255, 0.98);
    }
    
    .text-green {
        color: rgb(49, 146, 85);
    }
    
    /* .btn-green {
        background-color: rgb(49, 146, 85);
        color: white;
    } */
    
    .btn-green:hover {
        background-color: rgb(39, 126, 75);
        color: white;
    }

    .btn-custom-green {
        /* background-color: rgb(49, 146, 85); */
        color: white;
        border: 2px solid rgb(49, 146, 85);
        transition: all 0.3s ease;
    }
    
    .btn-custom-green:hover {
        background-color: rgb(39, 126, 75);
        border-color: rgb(39, 126, 75);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    /* Botón con borde verde */
    .btn-custom-outline-green {
        background-color: transparent;
        color: white;
        border: 2px solid white;
        transition: all 0.3s ease;
    }
    
    .btn-custom-outline-green:hover {
        background-color: rgba(255,255,255,0.1);
        border-color: rgb(49, 146, 85);
        color: white;
        transform: translateY(-2px);
    }
    
    /* Versión para navbar scrolled */
    .navbar.scrolled .btn-custom-outline-green {
        color: rgb(49, 146, 85);
        border-color: rgb(49, 146, 85);
    }
    
    .navbar.scrolled .btn-custom-outline-green:hover {
        background-color: rgba(49, 146, 85, 0.1);
    }
</style>

<script>
    // Efecto de navbar al hacer scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Inicializar tooltips
    document.addEventListener('DOMContentLoaded', function() {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>