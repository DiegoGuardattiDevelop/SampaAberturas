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
                    <li class="nav-item"><a class="nav-link fw-bold fs-6 'active text-green'" href="{{ url('/home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold fs-6" href="{{ url('/obras') }}">Obras</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold fs-6" href="{{ url('/outlet') }}">Tienda</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold fs-6" href="{{ url('/nosotros') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold fs-6" href="{{ url('/contacto') }}">Contacto</a></li>
                </ul>
            </div>

            <!-- Contacto -->
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <p class="mb-1"><i class="bi bi-geo-alt-fill"></i> San Lucas 235</p>
                <p class="mb-1"><i class="bi bi-telephone-fill"></i> +12 345 6789</p>
                <p class="mb-1"><i class="bi bi-envelope-fill"></i> info@sampaaberturas.com</p>
            </div>

            <!-- Redes Sociales -->
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <div class="d-flex justify-content-center justify-content-md-start gap-3">
                    <a href="https://www.facebook.com/profile.php?id=100063444205455" target="_blank" class="text-light"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="https://www.instagram.com/sampaaberturas/" target="_blank" class="text-light"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="https://wa.me/5493572666666" target="_blank" class="text-light"><i class="bi bi-whatsapp fs-4"></i></a>
                    <a href="https://maps.app.goo.gl/rQCjw4VXtCsv2WxG9" target="_blank" class="text-light" title="Nuestra ubicación"><i class="bi bi-geo-alt fs-4"></i></a>
                </div>
            </div>
        </div>

        <hr class="bg-light">

        <!-- Copyright -->
        <div class="text-center mt-3">
            <p class="mb-0">&copy; 2025 Sampa Aberturas S.R.L. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>