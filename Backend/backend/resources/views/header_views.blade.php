<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sampa Aberturas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('style_views.css')}}">
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
                                <li class="nav-item"><a class="nav-link fw-bold fs-6" href="{{ url('/') }}">Inicio</a></li>
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
                                <li class="nav-item"><a class="nav-link fw-bold fs-6 {{ Request::is('obras') ? 'active' : '' }}" href="{{ url('/obras') }}">Obras</a></li>
                                <li class="nav-item"><a class="nav-link fw-bold fs-6 {{ Request::is('tienda') ? 'active' : '' }}" href="{{ url('/outlet') }}">Outlet</a></li>
                                <li class="nav-item"><a class="nav-link fw-bold fs-6 {{ Request::is('nosotros') ? 'active' : '' }}" href="{{ url('/nosotros') }}">Nosotros</a></li>
                                <li class="nav-item"><a class="nav-link fw-bold fs-6 {{ Request::is('contacto') ? 'active' : '' }}" href="{{ url('/contacto') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>