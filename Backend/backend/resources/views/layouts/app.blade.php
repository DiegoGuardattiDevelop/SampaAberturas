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
    
    <!-- Variables CSS Globales -->
    <style>
        :root {
            /* Colores */
            --color-primary: rgb(49, 146, 85);
            --color-primary-dark: rgb(39, 126, 75);
            --color-primary-light: rgba(49, 146, 85, 0.1);
            --color-primary-transparent: rgba(233, 251, 229, 0.85);
            --color-dark: #2D3748;
            --color-light: #718096;
            --color-white: #FFFFFF;
            --color-bg-light: rgba(233, 251, 229, 0.85);
            
            /* Espaciado */
            --spacing-xs: 0.25rem;
            --spacing-sm: 0.5rem;
            --spacing-md: 1rem;
            --spacing-lg: 1.5rem;
            --spacing-xl: 2rem;
            --spacing-2xl: 3rem;
            --spacing-3xl: 4rem;
            
            /* Bordes */
            --border-radius-sm: 4px;
            --border-radius-md: 8px;
            --border-radius-lg: 15px;
            --border-radius-xl: 24px;
            
            /* Sombras */
            --shadow-sm: 0 2px 4px rgba(0,0,0,0.05);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
            --shadow-xl: 0 20px 25px rgba(0,0,0,0.15);
            
            /* Transiciones */
            --transition-fast: 0.15s ease;
            --transition-normal: 0.3s ease;
            --transition-slow: 0.5s ease;
        }
    </style>
    
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