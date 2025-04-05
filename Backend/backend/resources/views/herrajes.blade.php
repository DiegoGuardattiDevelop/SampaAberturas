@include('header_views')
        
        <main>
            <div>
                <hr class="bg-sucess-light">
                <h1>Herrajes | Productos</h1>
                <hr class="bg-light">
            </div>
    
            <section id="herrajes">
                <h2>Herrajes</h2>
                <p>Los <strong>herrajes</strong> son componentes esenciales para garantizar el correcto funcionamiento y durabilidad de tus aberturas. Ofrecemos una amplia gama de herrajes de alta calidad, compatibles con todo tipo de puertas y ventanas.</p>
                
                <h3>Características Principales</h3>
                <ul>
                    <li><strong>Materiales de Calidad:</strong> Fabricados en acero inoxidable, aluminio y otros materiales resistentes.</li>
                    <li><strong>Diseño Funcional:</strong> Sistemas de apertura, cierre y bloqueo suaves y eficientes.</li>
                    <li><strong>Compatibilidad:</strong> Adecuados para aberturas de aluminio, madera y PVC.</li>
                    <li><strong>Personalización:</strong> Disponibles en diferentes estilos y acabados.</li>
                </ul>
            
                <h3>Beneficios</h3>
                <ul>
                    <li><strong>Durabilidad:</strong> Resistentes a la corrosión y al desgaste.</li>
                    <li><strong>Seguridad:</strong> Sistemas de bloqueo robustos para mayor protección.</li>
                    <li><strong>Estética:</strong> Acabados que complementan el diseño de tus aberturas.</li>
                </ul>
            
                <p><strong>Consulta con nosotros:</strong> En Sampa Aberturas, te asesoramos para encontrar los herrajes perfectos para tus aberturas. ¡Contáctanos!</p>
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