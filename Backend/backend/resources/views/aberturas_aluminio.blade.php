
@extends('layouts.app')

@section('title', 'Sampa - Aluminio')

@section('content')
    <main class="container mt-5">
        <div>
            <hr class="bg-sucess-light">
            <h1>Aberturas de Aluminio | Productos</h1>
            <hr class="bg-light">
        </div>

        <section id="aberturas">
            <h3>Líneas</h3>
            {{-- <strong>resistencia, durabilidad y diseño moderno</strong> --}}
            
            <div class="aluar-lines">
                <div class="line-card">
                    <img src="{{ asset('Images/sampa_modena.png')}}" alt="Modena">
                    <div>
                        <h4>Modena</h4>
                        <p>Línea versátil ideal para hogares y oficinas, con diseño elegante y funcional.</p>
                    </div>
                </div>
                <div class="line-card">
                    <img src="{{asset('Images/A30.png')}}" alt="A30 New">
                    <div>
                        <h4>A30 New</h4>
                        <p>Sistema de alta prestación, ideal para grandes aberturas y máxima hermeticidad.</p>
                    </div>
                </div>
                <div class="line-card">
                    <img src="{{asset('Images/sampa_A40.png')}}" alt="Línea Herrero">
                    <div>
                        <h4>Línea Herrero</h4>
                        <p>Opción económica y resistente, recomendada para obras estándar.</p>
                    </div>
                </div>
                <div class="line-card">
                    <img src="{{asset('Images/A30.png')}}" alt="Monoblock">
                    <div>
                        <h4>Monoblock</h4>
                        <p>Integración de ventanas con persianas para mayor comodidad.</p>
                    </div>
                </div>
            </div>
            

            {{-- <h3>Tipologías</h3>
            <p>Elegir la abertura adecuada depende de la función que cumplirá en tu proyecto. A continuación, te guiamos para seleccionar la mejor opción:</p>
            <ul>
                <li><strong>Ventanas Corredizas:</strong> Ideales para balcones, terrazas y áreas con limitaciones de espacio. <em>Línea recomendada: Modena o A30 New.</em></li>
                <li><strong>Ventanas Oscilobatientes:</strong> Perfectas para baños, cocinas y áreas que necesitan ventilación controlada. <em>Línea recomendada: Modena o Monoblock.</em></li>
                <li><strong>Puertas de Entrada:</strong> Opta por puertas robustas con vidrios de seguridad. <em>Línea recomendada: A30 New.</em></li>
                <li><strong>Frentes Vidriados:</strong> Ideales para locales comerciales, oficinas y living rooms. <em>Línea recomendada: A30 New.</em></li>
                <li><strong>Mamparas de Baño:</strong> Perfectas para baños y áreas húmedas. <em>Línea recomendada: Monoblock.</em></li>
                <li><strong>Mosquiteros:</strong> Complemento ideal para ventanas y puertas en zonas con alta presencia de insectos. <em>Compatible con todas las líneas de Aluar.</em></li>
            </ul> --}}

            <h3>¿Cómo elegir la abertura ideal?</h3>
                <p>Una abertura es un sistema compuesto por perfiles de aluminio, vidrio, accesorios y herrajes. Elegir correctamente estos elementos garantiza un buen rendimiento a largo plazo y aprovecha al máximo las ventajas del aluminio.

                    Todos los componentes deben ser de alta calidad y adecuados según las condiciones de la ventana: presión del viento, aislamiento térmico y acústico deseado, y relación entre ancho y alto. A mayor tamaño, se necesita mayor resistencia en los perfiles.
                    
                    El diseño también influye en la elección: formas curvas o rectas, cortes a 90º o 45º son detalles estéticos que pueden ser decisivos.
                    
                    Además, es esencial que la fabricación y ensamblaje se realicen con precisión en talleres especializados y con personal capacitado. La calidad de la mano de obra es tan importante como la de los materiales.
                    
                    Finalmente, al elegir la ventana adecuada, se deben considerar aspectos como tipologías, tipos de vidrio, herrajes, accesorios y opciones de recubrimiento.</p>
        </section>
    </main>
@endsection