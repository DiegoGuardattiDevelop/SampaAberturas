<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sampa Aberturas')</title>
    
    <!-- Fuentes y librerías -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @stack('styles') <!-- Para estilos específicos de vistas -->
</head>
<body>
    @include('layouts.header')

    <div class="page-container">
        @yield('content')
    </div>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts') <!-- Para scripts específicos de vistas -->
    
    <script>
        // Navbar scroll (común a todas las vistas)
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', function() {
                navbar.classList.toggle('navbar-scrolled', window.scrollY > 50);
            });
        });
    </script>
</body>
</html>