@include('header_views')
        
        <main>
            <div>
                <hr class="bg-sucess-light">
                <h1>Mosquiteros | Productos</h1>
                <hr class="bg-light">
            </div>
    
            <section id="mosquiteros">
                <h2>Mosquiteros</h2>
                <p>Nuestros <strong>mosquiteros</strong> están diseñados para ofrecer protección contra insectos sin sacrificar la ventilación ni la estética. Ideales para ventanas, puertas y áreas exteriores, garantizan un ambiente cómodo y libre de molestias.</p>
                
                <h3>Características Principales</h3>
                <ul>
                    <li><strong>Materiales Duraderos:</strong> Fabricados con aluminio de alta resistencia y mallas de fibra de vidrio o acero inoxidable.</li>
                    <li><strong>Diseño Funcional:</strong> Sistemas corredizos, enrollables o fijos para adaptarse a cualquier espacio.</li>
                    <li><strong>Fácil Mantenimiento:</strong> Mallas fáciles de limpiar y reemplazar.</li>
                    <li><strong>Personalización:</strong> Disponibles en diferentes tamaños y colores para adaptarse a tus necesidades.</li>
                </ul>
            
                <h3>Beneficios</h3>
                <ul>
                    <li><strong>Protección Eficaz:</strong> Evitan la entrada de insectos mientras permiten el paso del aire.</li>
                    <li><strong>Durabilidad:</strong> Resistentes a la intemperie y al desgaste.</li>
                    <li><strong>Estética Discreta:</strong> Se integran perfectamente con cualquier tipo de ventana o puerta.</li>
                </ul>
            
                <p><strong>Consulta con nosotros:</strong> En Sampa Aberturas, te ayudamos a elegir el mosquitero ideal para tu hogar o proyecto. ¡Contáctanos!</p>
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