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
<x-minimal-navbar />

<!-- ENCABEZADO -->
<section id="cotizador-encabezado" class="d-flex align-items-center text-center section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-6">COTIZACIONES</h1>
            </div>
        </div>
    </div>
</section>

<!-- CALCULO DE CAPACIDAD -->
<section class="container section-padding">
    <div class="row">
        <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
            <div class="section-title">
                <h1 class="display-6 fw-semibold">Conoce la capacidad que necesitas</h1>
                <div class="line"></div>
                <p>
                    ¿No sabes qué capacidad de aire acondicionado necesitas para tu habitación? Ingresa en el siguiente formulario las dimensiones de la habitación donde necesitas el equipo y obtén una estimación. ¡Asegúrate de elegir la solución perfecta con Enfriatech!
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <!--FORMULARIO DE CALCULO DE CAPACIDAD-->
            <form id="formulario-capacidad">
                <div class="mb-3">
                    <label for="ancho" class="form-label">Ingresa el ancho de la habitación (en metros cuadrados): </label>
                    <input type="text" class="form-control" id="ancho">
                </div>
                <div class="mb-3">
                    <label for="largo" class="form-label">Ingresa el largo de la habitación (metros cuadrados): </label>
                    <input type="text" class="form-control" id="largo">
                </div>
                <button type="submit" class="btn btn-primary" onclick="CalcularBTU()">Calcular</button>
            </form>
        </div>
        <div id="contenedor-form-capacidad" class="col-lg-6 col-md-12 product">
            <!-- CONTENEDOR PARA LA CARD CON RESULTADO -->
        </div>
    </div>
    </div>
</section>

<!-- CALCULO PRECIO EQUIPO + INSTALACIÓN MECÁNICA -->
<section class="container section-padding">
    <div class="row">
        <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
            <div class="section-title">
                <h1 class="display-6 fw-semibold">Haz una cotización aproximada</h1>
                <div class="line"></div>
                <p>
                    Utiliza nuestro formulario para calcular el precio estimado del suministro del equipo y la instalación mecánica. Ingresa los datos solicitados y obtén una cotización aproximada al instante. En Enfriatech, hacemos que mantener tu espacio frescso sea fácil y transparente.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <!--FORMULARIO DE CALCULO DE CAPACIDAD-->
            <form id="formulario-cotizacion">
                <div class="mb-3">
                    <label for="largo" class="form-label">
                        Selecciona el equipo:
                    </label>
                    <select id="equipo" class="form-select">
                        <option value="" disabled selected>Selecciona el equipo</option>
                        <option value="280">12,000 BTU CONVENCIONAL 220v (+$280)</option>
                        <option value="395">12,000 BTU INVERTER 220v (+$395)</option>
                        <option value="296">12,000 BTU CONVENCIONAL 110v (+$296) </option>
                        <option value="400">12,000 BTU INVERTER 110v (+$400) </option>
                        <option value="490">18,000 BTU CONVENCIONAL 220v (+$490)</option>
                        <option value="550">18,000 BTU INVERTER 220v (+$550)</option>
                        <option value="545">24,000 BTU CONVENCIONAL 220v (+$545)</option>
                        <option value="650">24,000 BTU 220v INVERTER (+$650)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="largo" class="form-label">
                        Selecciona la zona donde se instalará:
                    </label>
                    <select id="zona" class="form-select">
                        <option value="" disabled selected>Selecciona la zona</option>
                        <option value="15">Ahuachapán Norte</option>
                        <option value="15">Ahuachapán Centro</option>
                        <option value="15">Ahuachapán Sur</option>
                        <option value="15">Santa Ana Norte</option>
                        <option value="0">Santa Ana Centro</option>
                        <option value="10">Santa Ana Este</option>
                        <option value="10">Santa Ana Oeste</option>
                        <option value="15">Sonsonate Norte</option>
                        <option value="20">Sonsonate Centro</option>
                        <option value="20">Sonsonate Este</option>
                        <option value="20">Sonsonate Oeste</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" onclick="return CalcularPrecio()">Calcular</button>
            </form>
        </div>
        <div id="contenedor-form-cotizacion" class="col-lg-6 col-md-12">
            <!-- CONTENEDOR PARA LA CARD CON RESULTADO -->
        </div>
    </div>
    </div>
</section>

<!-- FOOTER -->
<x-minimal-footer />

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({});
</script>
</body>
</html>
