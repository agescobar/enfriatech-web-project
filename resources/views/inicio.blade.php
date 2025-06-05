<!DOCTYPE html>
<html lang="es">
<head>
    <!-- METADATOS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Enfríatech El Salvador | Servicios de Aire Acondicionado">
    <meta name="description" content="Enfriatech ofrece servicios de instalación, mantenimiento y reparación de aire acondicionado en El Salvador.">
    <meta name="keywords" content="aire acondicionado, climatización, El Salvador, instalación de aire acondicionado, mantenimiento de aire acondicionado, reparación de aire acondicionado, Enfriatech, soluciones de aire acondicionado, sistemas de climatización, eficiencia energética.">
    <meta name="language" content="Spanish">
    <meta name="author" content="Nathalie Murga, Jonathan Rivera, Leonardo García, Alicia Escobar">

    <!-- TITULO -->
    <title>Enfríatech El Salvador | Servicios de Aire Acondicionado</title>

    <!-- ICONO -->
    <link rel="shortcut icon" href="{{ asset('assets/img/bearblue.svg') }}" type="image/x-icon">

    <!-- HOJA DE ESTILO-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/js/script.js') }}" defer></script>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <!-- NAVBAR -->
    <x-navbar />

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="text-uppercase text-white fw-semibold display-4">Especialistas en <span>Aire Acondicionado</span></h1>
                    <p class="fs-5 text-white mt-3 mb-4" data-aos="fade-up" data-aos-delay="500">
                        En Enfriatech, ofrecemos sistemas de aire acondicionado de última generación, eficientes y ecológicos.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN -->
    <main class="container-fluid">
        <!-- SOBRE NOSOTROS -->
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                        <div class="section-title">
                            <h1 class="display-4 fw-semibold">Sobre nosotros</h1>
                            <div class="line"></div>
                            <p>
                                En Enfriatech El Salvador, ofrecemos soluciones de climatización para hogares y empresas. Nos destacamos por nuestro compromiso con la calidad, utilizando tecnología avanzada y brindando un servicio personalizado para satisfacer tus necesidades.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                        <img src="{{ asset('assets/img/Instalaciones/34.jpg') }}" class="img-fluid" alt="Técnico Enfríatech">
                    </div>
                    <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                        <h1>¿Por qué contratarnos?</h1>
                        <p class="mt-3 mb-4">
                            Somos tu mejor opción en climatización.
                        </p>
                        <div class="d-flex pt-4 mb-3">
                            <div class="me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#0e96d5" class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                                </svg>
                            </div>
                            <div>
                                <h5>
                                    Experiencia
                                </h5>
                                <p>
                                    Nuestros técnicos tienen más de 15 años de experiencia en el sector de aire acondicionado, garantizando un servicio experto y confiable.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#0e96d5" class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                                </svg>
                            </div>
                            <div>
                                <h5>
                                    Profesionalismo
                                </h5>
                                <p>
                                    Nos enorgullecemos de nuestro alto nivel de profesionalismo, asegurando que cada proyecto se maneje con seriedad y dedicación.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#0e96d5" class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                                </svg>
                            </div>
                            <div>
                                <h5>
                                    Eficiencia
                                </h5>
                                <p>
                                    Entendemos la importancia de tu tiempo. Por eso, nuestros servicios son rápidos y eficientes, sin comprometer la calidad.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#0e96d5" class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                                </svg>
                            </div>
                            <div>
                                <h5>
                                    Orden y limpieza
                                </h5>
                                <p>
                                    Mantenemos un entorno de trabajo ordenado y limpio, cuidando tu espacio como si fuera el nuestro.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICIOS -->
        <section id="services" class="section-padding border-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                        <div class="section-title">
                            <h1 class="display-4 fw-semibold">Nuestro Servicios</h1>
                            <div class="line"></div>
                            <p>
                                Nos especializamos en ofrecer soluciones integrales de aire acondicionado para satisfacer todas tus necesidades de climatización. Con un enfoque en la calidad, la eficiencia y el servicio al cliente, nuestros expertos están listos para ayudarte en cada paso del camino. Descubre nuestros servicios:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 text-center">
                    <div class="col-lg-4 col-md-12" data-aos="fade-down" data-aos-delay="150">
                        <div class="service p-lg-5 p-4">
                            <div>
                                <img src="{{ asset('assets/img/Productos/2.jpg') }}" class="img-fluid" alt="Suministro de Equipos">
                            </div>
                            <h5 class="mt-4 mb-3">
                                Suministro de Equipos A/C
                            </h5>
                            <p>
                                Proveemos una amplia gama de equipos de aire acondicionado de las marcas más prestigiosas del mercado. Garantizamos productos de alta eficiencia energética y durabilidad, ideales para cualquier espacio, ya sea residencial, comercial o industrial.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12" data-aos="fade-down" data-aos-delay="250">
                        <div class="service p-lg-5 p-4">
                            <div>
                                <img src="{{ asset('assets/img/Instalaciones/31.jpg') }}" class="img-fluid" alt="Instalaciones">
                            </div>
                            <h5 class="mt-4 mb-3">
                                Instalación Mecánica y Eléctrica
                            </h5>
                            <p>
                                Nuestro equipo de técnicos con más de 15 años de experiencia se encargarán de la instalación completa de tu sistema de aire acondicionado. Aseguramos una instalación rápida, segura y conforme a las normas, garantizando un rendimiento óptimo y una mayor vida útil de tu equipo.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12" data-aos="fade-down" data-aos-delay="350">
                        <div class="service p-lg-5 p-4">
                            <div>
                                <img src="{{ asset('assets/img/Reparaciones/3.jpg') }}" class="img-fluid" alt="Mantenimientos">
                            </div>
                            <h5 class="mt-4 mb-3">
                                Mantenimiento Integral
                            </h5>
                            <p>
                                Ofrecemos mantenimiento preventivo y correctivo para asegurar el funcionamiento óptimo de tu aire acondicionado. Realizamos inspecciones y limpiezas para prevenir fallos y estamos preparados para reparar cualquier avería rápidamente, devolviendo el confort a tu espacio de inmediato.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-end">
                        <a href="{{ url('servicios') }}" class="link-primary fs-5 text-decoration-underline">
                            - Ver todos los servicios
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRODUCTOS -->
        <section id="products" class="section-padding border-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                        <div class="section-title">
                            <h1 class="display-4 fw-semibold">Productos</h1>
                            <div class="line"></div>
                            <p>
                                Tenemos diferentes opciones de climatización que se acoplan a las necesidades de tu hogar o de tu negocio.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 text-center">
                    <div class="col-lg-4 col-md-12" data-aos="fade-down" data-aos-delay="150">
                        <div class="product p-lg-5 p-4">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('assets/img/Productos/Residenciales/CS-MS-Elite.png') }}" class="d-block w-100" alt="ComfortStar Elite Series">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/Productos/Residenciales/CS-MS-Orbit.png') }}" class="d-block w-100" alt="ComfortStar Orbit Series">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/Productos/Residenciales/CS-MS-Carat.png') }}" class="d-block w-100" alt="ComfortStar Carat Series">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/Productos/Residenciales/ADINA - MS - ALEF.webp') }}" class="d-block w-100" alt="Adina Alef Series">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/Productos/Residenciales/688b00_8fceb1114e9e444e9c6b1acc1a78c98f~mv2.webp') }}" class="d-block w-100" alt="Adina Alef Series Empaque">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/Productos/Residenciales/aires-acondicionados-residenciales.png') }}" class="d-block w-100" alt="GAir">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Residenciales</h5>
                                <p class="card-text">
                                    Disfruta del máximo confort en tu hogar con nuestros sistemas de aire acondicionado residencial, diseñados para ofrecer eficiencia energética y un funcionamiento silencioso en cada habitación.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12" data-aos="fade-down" data-aos-delay="250">
                        <div class="product p-lg-5 p-4">
                            <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('assets/img/Productos/Comerciales/ADINA - Comercial.webp') }}" class="d-block w-100" alt="Adina Comercial">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/Productos/Comerciales/ADINA - Comercial 2.webp') }}" class="d-block w-100" alt="Adina Comercial">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/Productos/Comerciales/ComfortStar - Comercial.png') }}" class="d-block w-100" alt="ComfortStar Comercial">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/Productos/Comerciales/ComfostStar - Comercial 2.png') }}" class="d-block w-100" alt="ComfortStar Comercial">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/Productos/Comerciales/GAir - Comercial.jpg') }}" class="d-block w-100" alt="GAir Comercial">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Comerciales</h5>
                                <p class="card-text">
                                    Mantén tu negocio en la temperatura perfecta con nuestras soluciones de aire acondicionado comercial, ideales para oficinas, tiendas y grandes espacios comerciales, garantizando un ambiente agradable para empleados y clientes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12" data-aos="fade-down" data-aos-delay="350">
                        <div class="product p-lg-5 p-4">
                            <div id="carouselExampleFade3" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('assets/img/Productos/Multizona/CS-Comercial.png') }}" class="d-block w-100" alt="ComfortStar Alegria Series Hi-Heat Multizona">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/Productos/Multizona/CS-Multizona.png') }}" class="d-block w-100" alt="ComfortStar Alegria Series Multizona">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Multizona</h5>
                                <p class="card-text">
                                    Optimiza el control de la climatización en múltiples áreas con nuestros sistemas de aire acondicionado multizona, que permiten ajustar la temperatura de manera independiente en diferentes zonas para mayor comodidad y eficiencia.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- GALERIA -->
        <section id="gallery" class="section-padding border-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                        <div class="section-title">
                            <h1 class="display-4 fw-semibold">
                                Galería
                            </h1>
                            <div class="line"></div>
                            <p>
                                Echa un vistazo a algunos de nuestros proyectos destacados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 text-center" data-aos="fade-down" data-aos-delay="250">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('assets/img/Instalaciones/1.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/2.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/12.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/17.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/16.jpg') }}">
                            <img src="{{ asset('assets/img/Reparaciones/2.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/30.jpg') }}">
                        </div>
                        <div class="col">
                            <img src="{{ asset('assets/img/Instalaciones/2.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/19.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/10.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/23.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/26.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/9.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/21.jpg') }}">
                        </div>
                        <div class="col">
                            <img src="{{ asset('assets/img/Mantenimientos/1.jpg') }}">
                            <img src="{{ asset('assets/img/Reparaciones/3.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/36.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/32.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/29.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/27.jpg') }}">
                        </div>
                        <div class="col">
                            <img src="{{ asset('assets/img/Reparaciones/1.jpg') }}">
                            <img src="{{ asset('assets/img/Mantenimientos/2.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/7.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/15.jpg') }}">
                            <img src="{{ asset('assets/img/Instalaciones/20.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACTO -->
        <section id="contact" class="section-padding border-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                        <div class="section-title">
                            <h1 class="display-4 fw-semibold">Contáctanos</h1>
                            <div class="line"></div>
                            <p>
                                ¿Listo para un ambiente fresco y confortable? ¡Contáctanos hoy mismo para obtener más información y cotizaciones personalizadas!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-12 mb-4 mb-sm-0" data-aos="fade-down" data-aos-delay="150">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#0e96d5" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="mb-2">Teléfonos</h4>
                            <p class="mb-2">Llama directamente o escríbenos por Whatsapp.</p>
                            <hr class="w-75 mb-3 border-dark-subtle">
                            <p class="d-flex flex-column mb-0">
                                <a class="link-secondary text-decoration-none" target="_blank" href="tel:+50378338114">(503) 7833 - 8114</a>
                                <a class="link-secondary text-decoration-none" target="_blank" href="tel:+50371472073">(503) 7147 - 2073</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-sm-0" data-aos="fade-down" data-aos-delay="250">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#0e96d5" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="mb-2">Correo Electrónico</h4>
                            <p class="mb-2">Solicita información a nuestro correo electrónico.</p>
                            <hr class="w-75 mb-3 border-dark-subtle">
                            <p class="mb-0">
                                <a class="link-secondary text-decoration-none" href="mailto:enfriatechsv@gmail.com">enfriatechsv@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-sm-0" data-aos="fade-down" data-aos-delay="350">
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#0e96d5" class="bi bi-alarm" viewBox="0 0 16 16">
                                <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="mb-2">Horario de atención</h4>
                            <p class="mb-2">Puedes contactarnos en cualquier momento, pero nuestros horarios de respuesta son:</p>
                            <hr class="w-50 mb-3 border-dark-subtle">
                            <div class="d-flex mb-1">
                                <p class="text-secondary fw-bold mb-0 me-5">Lun - Vie</p>
                                <p class="text-secondary mb-0">9AM - 5PM</p>
                            </div>
                            <div class="d-flex">
                                <p class="text-secondary fw-bold mb-0 me-5">Sab - Dom</p>
                                <p class="text-secondary mb-0">9AM - 1PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <x-footer />

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({});
    </script>
</body>
</html>
