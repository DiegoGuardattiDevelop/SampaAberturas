<header class="hero position-relative {{ Request::is('home') ? 'hero-full' : 'hero-min' }}">
    <!-- Background solo en home -->
    @if(Request::is('home'))
    <div class="hero-bg home-gradient"></div>
    <div class="hero-overlay"></div>
    @endif
    
    <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100 navbar-custom">
        <div class="container">
            <a href="/home" class="navbar-brand">
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
                            <a class="nav-link fw-semibold {{ Request::is('/home') ? 'active text-green' : '' }}" href="{{ url('/home') }}">Inicio</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-semibold dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                Productos
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg-end p-2 border-0 shadow dropdown-menu-custom">
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
                            <a class="nav-link fw-semibold {{ Request::is('obras') ? 'active text-green' : '' }}" href="{{ url('/obras') }}">Obras</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('outlet') ? 'active text-green' : '' }}" href="{{ url('/outlet') }}">Tienda</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('nosotros') ? 'active text-green' : '' }}" href="{{ url('/nosotros') }}">Nosotros</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link fw-semibold {{ Request::is('contacto') ? 'active text-green' : '' }}" href="{{ url('/contacto') }}">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @if(Request::is('home'))
    <div class="hero-content-custom">
        <div class="container text-center text-white position-relative">
            <p class="bienvenida lead mb-2">Bienvenidos</p>
            <h1 class="display-4 fw-bold mb-3">Sampa Aberturas</h1>
            <p class="descripcion hero-subtitle-custom mb-4">Creamos ambientes en tu hogar</p>
            <div class="hero-buttons">
                <a href="{{ route('contacto') }}" class="btn btn-custom-green btn-lg px-4">
                    <i class="bi bi-envelope me-1"></i> Contactanos
                </a>
                <a href="#productos" class="btn btn-custom-outline-green btn-lg px-4">
                    <i class="bi bi-box-seam me-1"></i> Ver Productos
                </a>
            </div>
        </div>
    </div>
    @endif
</header>

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