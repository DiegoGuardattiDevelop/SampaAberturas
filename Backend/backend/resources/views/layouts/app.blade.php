<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sampa Aberturas')</title>
    
    <!-- Fuentes y librerías -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- Toastify CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    
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
    <!-- Toastify JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    @stack('scripts') <!-- Para scripts específicos de vistas -->
    
    <script>
        // Navbar scroll (común a todas las vistas)
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', function() {
                navbar.classList.toggle('navbar-scrolled', window.scrollY > 50);
            });
        });

        // Función global para notificaciones Toastify
        window.showToast = function(type, message) {
            const toastOptions = {
                text: message,
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
            };

            switch(type) {
                case 'success':
                    Toastify(toastOptions).showToast();
                    break;
                case 'error':
                    Toastify({...toastOptions, backgroundColor: "#dc3545"}).showToast();
                    break;
                case 'warning':
                    Toastify({...toastOptions, backgroundColor: "#ffc107", text: "⚠️ " + message}).showToast();
                    break;
                case 'info':
                    Toastify({...toastOptions, backgroundColor: "#0dcaf0", text: "ℹ️ " + message}).showToast();
                    break;
                default:
                    Toastify(toastOptions).showToast();
            }
        };
    </script>
    <script src="{{ asset('js/tienda.js') }}"></script>
</body>
</html>