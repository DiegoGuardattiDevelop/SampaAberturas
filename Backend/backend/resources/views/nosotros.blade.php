@extends('layouts.app')

@section('title', 'Sampa - Nosotros')

@section('content')
    <main class="container mt-5">
        <section id="historia" class="mb-5">
            <div>
                <hr class="bg-success-light">
                <h1>Nuestra Historia</h1>
                <hr class="bg-light">
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('Images/sampa_nosotros_2.jpg') }}" alt="Historia 2" class="img-fluid rounded">
                </div>
                <div class="col-md-6 text-md-start">
                    <p>Sampa Aberturas es una empresa creada en la localidad de Laguna Larga, Córdoba, Argentina. Con una experiencia previa en el rubro y un pequeño capital, nació como un proyecto familiar con el sueño de brindar productos de calidad y un servicio confiable. Desde sus inicios, la empresa se ha destacado por su compromiso con la excelencia y la satisfacción del cliente.</p>
                    <p>Con humildad y dedicación, fue sentando las bases de un crecimiento constante. A medida que pasaba el tiempo, la empresa incorporó nuevas tecnologías y materiales innovadores, permitiendo la fabricación de aberturas más eficientes, seguras y estéticamente atractivas.</p>
                    <p>El asesoramiento personalizado y el servicio postventa fueron clave para expandir el alcance de la empresa y acceder a proyectos de mayor envergadura. Gracias a la confianza de sus clientes y al esfuerzo del equipo de trabajo, Sampa Aberturas logró posicionarse como un referente en la provincia de Córdoba, participando en proyectos residenciales, comerciales e institucionales.</p>
                    <p>Hoy, con una sólida trayectoria en el mercado, Sampa Aberturas continúa apostando por la calidad, la innovación y el compromiso con cada uno de sus clientes. La empresa sigue en constante evolución, adaptándose a las nuevas tendencias y necesidades del sector para ofrecer soluciones a medida, garantizando durabilidad, diseño y funcionalidad en cada uno de sus productos.</p>
                </div>
            </div>
        </section>

        <section id="mision-vision" class="mb-5">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-start">
                    <h2>Nuestra Misión</h2>
                    <p>En Sampa Aberturas, nuestra misión es ofrecer soluciones innovadoras y de alta calidad en aberturas para el hogar, comercios e industrias, brindando seguridad, diseño y eficiencia en cada uno de nuestros productos.</p>
                    <p>Nos enfocamos en proporcionar una atención personalizada, asegurando que cada cliente reciba el asesoramiento necesario para encontrar la mejor opción según sus necesidades. Nuestro compromiso con la excelencia nos impulsa a mejorar continuamente nuestros procesos, incorporando nuevas tecnologías y materiales de vanguardia.</p>
                    <p>Además, trabajamos con un fuerte sentido de responsabilidad y ética, priorizando la satisfacción del cliente y la confianza en cada proyecto que emprendemos. Buscamos contribuir al desarrollo del sector, promoviendo la sustentabilidad y la innovación en cada una de nuestras creaciones.</p>
        
                    <h2>Nuestra Visión</h2>
                    <p>En Sampa Aberturas, aspiramos a ser la empresa líder en soluciones de aberturas en la región, reconocida por la calidad, innovación y excelencia en el servicio. Nuestro objetivo es expandir nuestra presencia en el mercado, consolidándonos como la primera opción para hogares, empresas e instituciones que buscan seguridad, diseño y durabilidad en sus espacios.</p>
                    <p>Buscamos crecer de manera sostenible, implementando tecnologías avanzadas y materiales de última generación que nos permitan ofrecer productos cada vez más eficientes y adaptados a las necesidades del futuro.</p>
                    <p>Además, nos comprometemos a fortalecer nuestras relaciones con clientes, proveedores y colaboradores, fomentando una cultura de trabajo basada en la confianza, el respeto y la mejora continua. Queremos dejar una huella positiva en la comunidad, contribuyendo al desarrollo del sector y promoviendo prácticas responsables con el medio ambiente.</p>
                </div>
                <div class="col-md-6">
                    <img src=" {{asset('Images/sampa_nosotros_3.jpg') }}" alt="Nuestra Misión y Visión" class="img-fluid rounded">
                </div>
            </div>
        </section>
        

        <section id="equipo" class="mb-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src=" {{asset('Images/sampa_nosotros_4.jpg') }}" alt="Equipo de Sampa Aberturas" class="img-fluid rounded">
                </div>
                <div class="col-md-6 text-md-start">
                    <h2>Nuestro Equipo de Trabajo</h2>
                    <p>En Sampa Aberturas, creemos que el éxito de nuestra empresa se basa en el compromiso, la pasión y la experiencia de nuestro equipo. Contamos con un grupo de profesionales altamente capacitados que trabajan día a día para ofrecer soluciones innovadoras y de calidad en aberturas.</p>
                    <p>Desde el área de diseño y producción hasta el equipo de ventas y atención al cliente, cada uno de nuestros colaboradores aporta su conocimiento y dedicación para garantizar que cada proyecto cumpla con los más altos estándares de excelencia.</p>
                    <p>Nos destacamos por fomentar un ambiente de trabajo basado en la confianza, el respeto y la mejora continua. La capacitación constante y la incorporación de nuevas tecnologías son claves para nuestro crecimiento, permitiéndonos ofrecer productos cada vez más eficientes y adaptados a las necesidades del mercado.</p>
                    <p>Juntos, trabajamos con un mismo propósito: brindar soluciones seguras, funcionales y estéticamente atractivas para hogares, empresas e instituciones. En Sampa Aberturas, más que un equipo, somos una familia comprometida con la calidad y la satisfacción de nuestros clientes.</p>
                </div>
            </div>
        </section>
    </main>
@endsection