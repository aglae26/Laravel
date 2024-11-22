@extends('layouts.dashboard')
@section('nameModule', 'DuinTech Solutions')

@section('content')
 
<div id="carouselExampleCaptions" class="carousel">
    <div class="carousel-indicators">
        <button onclick="changeSlide(0)" class="active" aria-label="Slide 1"></button>
        <button onclick="changeSlide(1)" aria-label="Slide 2"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/carrusel.jpeg')}}" alt="">
        </div>

        <div class="carousel-item">
            <img src="{{asset('img/fondo.jpeg')}}" alt="">
            <div class="carousel-caption">
                <h5>¿Quienes somos?</h5>
                <p>
                    En DuinTech Solutions somos una empresa familiar apasionada por la tecnología y el desarrollo de software. Nos especializamos en crear soluciones digitales personalizadas para personas y empresas, adaptándonos a las necesidades únicas de cada proyecto.   
                </p>

                <p>
                    Nuestra filosofía combina innovación tecnológica con un enfoque humano, asegurándonos de que cada herramienta que diseñamos no solo sea eficiente, sino también accesible y práctica para nuestros clientes.
                </p>

                <p>
                    Como equipo familiar, valoramos la cercanía, la confianza y el compromiso, construyendo relaciones sólidas que nos permitan crecer junto a quienes confían en nosotros. Transformamos tus ideas en soluciones digitales que impulsan el futuro.
                </p>
            </div>
        </div>
    </div>
  <button class="carousel-control-prev" onclick="prevSlide()">&#10094;</button>
  <button class="carousel-control-next" onclick="nextSlide()">&#10095;</button>
</div>

    <!--<h1>¿Quiénes somos?</h1>
    <p>
        En DuinTech Solutions somos una empresa familiar apasionada por la tecnología y el desarrollo de software. Nos especializamos en crear soluciones digitales personalizadas para personas y empresas, adaptándonos a las necesidades únicas de cada proyecto.   
    </p>

    <p>
        Nuestra filosofía combina innovación tecnológica con un enfoque humano, asegurándonos de que cada herramienta que diseñamos no solo sea eficiente, sino también accesible y práctica para nuestros clientes.
    </p>

    <p>
        Como equipo familiar, valoramos la cercanía, la confianza y el compromiso, construyendo relaciones sólidas que nos permitan crecer junto a quienes confían en nosotros. Transformamos tus ideas en soluciones digitales que impulsan el futuro.
    </p> -->

    <h1>Nuestro equipo</h1>

    <div class="principal-card-container">
        
        <div class="principal-card">
            <!-- Imagen -->
            <img src="{{asset('img/gio1.jpeg')}}" class="card-img-top" alt="Card image">
            <div class="principal-card-body">
                <h5 class="principal-card-title">Giovanny Duin Mendoza</h5>
                <p class="principal-card-text">
                    <p>Soy un profesional con amplia experiencia en el desarrollo de software de interoperabilidad, DevOps, administración de sistemas (Sysadmin) y bases de datos (DBA). A lo largo de mi carrera, me he destacado por mis habilidades en comunicación, negociación, resolución de problemas, adaptabilidad y aprendizaje rápido, lo que me permite enfrentar desafíos técnicos con soluciones efectivas e innovadoras.</p>
                    <p>Mi enfoque está en diseñar arquitecturas tecnológicas sólidas y mejorar el rendimiento de sistemas, siempre buscando entregar resultados de alta calidad que impulsen el crecimiento y la eficiencia de los proyectos en los que participo. Con un fuerte espíritu emprendedor, me apasiona transformar ideas en soluciones escalables y alineadas con las necesidades de cada negocio.</p>
                    <p>Si buscas a alguien comprometido con la excelencia técnica y el desarrollo de soluciones personalizadas, estás en el lugar correcto.</p>
                </p>
            </div>
        </div>

        <div class="principal-card">
            <img src="{{asset('img/agla.jpeg')}}" class="card-img-top" alt="Card image">
            <div class="principal-card-body">
                <h5 class="principal-card-title">Aglae Duin</h5>
                <p class="principal-card-text">
                    <p>Soy una estudiante apasionada por el mundo de la programación, enfocada en el análisis de bases de datos, el desarrollo frontend y el uso de tecnologías en la nube. Me encanta transformar datos en información útil, diseñar interfaces atractivas e intuitivas y aprovechar el poder de la nube para crear soluciones escalables y eficientes.</p>
                    <p>A lo largo de mi formación, he desarrollado habilidades en diseño visual, estructura de bases de datos, desarrollo web y la implementación de herramientas y servicios en Google Cloud. Esto me permite conectar el análisis de datos con la creación de experiencias de usuario sólidas y optimizadas.</p>
                    <p>Mi objetivo es construir soluciones innovadoras que combinen funcionalidad, diseño y eficiencia tecnológica, contribuyendo al éxito de los proyectos en los que participo. Estoy emocionada por seguir explorando el potencial de la tecnología para resolver problemas y transformar ideas en realidad.</p>
                </p>
            </div>
        </div>

        <div class="principal-card">
            <img src="{{asset('img/gio3.jpeg')}}" class="card-img-top" alt="Card image">
            <div class="principal-card-body">
                <h5 class="principal-card-title">Giovanna Duin</h5>
                <p class="principal-card-text">
                    <p>Soy una ingeniera en computación especializada en Aseguramiento de Calidad (QA), con experiencia en garantizar la excelencia de productos de software a través de pruebas rigurosas y procesos de mejora continua. Mi pasión por los detalles y la calidad me impulsa a identificar problemas antes de que lleguen al usuario final, asegurando soluciones fiables, eficientes y alineadas con los objetivos del proyecto.</p>
                    <p>A lo largo de mi carrera, he adquirido experiencia en la planificación y ejecución de pruebas funcionales, automatizadas y de rendimiento, así como en la implementación de estrategias de control de calidad que optimizan los ciclos de desarrollo. También tengo un sólido entendimiento de las metodologías ágiles, lo que me permite trabajar de manera efectiva con equipos interdisciplinarios.</p>
                    <p>Mi compromiso es ayudar a las organizaciones a ofrecer productos tecnológicos que no solo cumplan con las expectativas de los usuarios, sino que las superen. Si buscas una profesional dedicada, meticulosa y orientada a resultados, estoy lista para llevar tu proyecto al siguiente nivel.</p>
                </p>
            </div>
        </div>

        <div class="principal-card">
            <img src="{{asset('img/gio2.jpeg')}}" class="card-img-top" alt="Card image">
            <div class="principal-card-body">
                <h5 class="principal-card-title">Giovanny Duin Galindez</h5>
                <p class="principal-card-text">
                    <p>Soy un estudiante de Ingeniería en Sistemas en el último semestre de la carrera, apasionado por el desarrollo backend y el análisis de datos. Me entusiasma construir soluciones robustas y eficientes en el lado del servidor, así como extraer valor de los datos para tomar decisiones estratégicas y optimizar procesos.</p>
                    <p>A lo largo de mi formación académica, he desarrollado habilidades en diseño y gestión de bases de datos, creación de APIs, procesamiento de datos y optimización de sistemas. Me gusta combinar lógica, creatividad y análisis para resolver problemas complejos y crear aplicaciones funcionales que respondan a las necesidades del usuario.</p>
                    <p>Estoy en constante aprendizaje, explorando nuevas herramientas y tecnologías que me permitan perfeccionar mi trabajo y crecer profesionalmente. Mi objetivo es contribuir al desarrollo de soluciones tecnológicas que impulsen el éxito de las organizaciones mientras sigo desarrollándome como profesional en este apasionante campo.</p>
                </p>
            </div>
        </div>
    </div>
@endsection

@section('js')
    
@endsection

