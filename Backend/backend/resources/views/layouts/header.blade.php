<header class="hero">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid navbar-container">
            <a href="/" class="logo">
                <img src="{{ asset('Images/Sampa_Logo_Livianno.png') }}" alt="Tu Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-6 {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Inicio</a>
                        </li>
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
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-6 {{ Request::is('obras') ? 'active' : '' }}" href="{{ url('/obras') }}">Obras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-6 {{ Request::is('outlet') ? 'active' : '' }}" href="{{ url('/outlet') }}">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-6 {{ Request::is('nosotros') ? 'active' : '' }}" href="{{ url('/nosotros') }}">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-6 {{ Request::is('contacto') ? 'active' : '' }}" href="{{ url('/contacto') }}">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @if(Request::is('/'))
    <div class="presentacion">
        <p class="bienvenida">Bienvenidos</p>
        <h2><span>Sampa Aberturas</span> Creamos ambientes</h2>
        <p class="descripcion">Fabricamos cerramientos para tu hogar</p>
    </div>
    @endif
</header>

<style>
    .hero {
        height: {{ Request::is('/') ? '95vh' : '10vh' }};
        background-image: {{ Request::is('/') ? 'url(/Images/sampa_casa_3.jpg)' : 'none' }};
        background-size: cover;
        background-position: center;
    }
</style>