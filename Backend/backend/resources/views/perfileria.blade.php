@include('header_views')
        
        <main>
            <div>
                <hr class="bg-sucess-light">
                <h1>Perfileria | Productos</h1>
                <hr class="bg-light">
            </div>
    
            <section id="perfileria">
                <h2>Perfileria</h2>
                <p>La <strong>perfileria</strong> es fundamental para la fabricación y montaje de aberturas de calidad. Ofrecemos una amplia variedad de perfiles de aluminio, ideales para proyectos residenciales, comerciales e industriales.</p>
                
                <h3>Características Principales</h3>
                <ul>
                    <li><strong>Materiales de Alta Calidad:</strong> Perfiles de aluminio resistentes y duraderos.</li>
                    <li><strong>Diseño Versátil:</strong> Compatibles con diferentes sistemas de aberturas (corredizas, oscilobatientes, etc.).</li>
                    <li><strong>Personalización:</strong> Disponibles en diversos colores y acabados.</li>
                    <li><strong>Eficiencia Energética:</strong> Perfiles con rotura de puente térmico para mejorar el aislamiento.</li>
                </ul>
            
                <h3>Beneficios</h3>
                <ul>
                    <li><strong>Resistencia:</strong> Ideales para condiciones climáticas extremas.</li>
                    <li><strong>Estética:</strong> Acabados modernos que complementan cualquier diseño.</li>
                    <li><strong>Funcionalidad:</strong> Fáciles de instalar y mantener.</li>
                </ul>
            
                <p><strong>Consulta con nosotros:</strong> En Sampa Aberturas, te ayudamos a seleccionar la perfileria adecuada para tu proyecto. ¡Contáctanos!</p>
            </section>
        </main>

        @include('footer')        
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