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
    <nav class="navbar navbar-expand-md bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/bearblue.svg') }}" class="img-fluid" width="70px" alt="Logo de Enfríatech">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('cotizador') }}" class="nav-link">Cotizar</a>
                    </li>
                </ul>
                <a href="{{ url('login') }}" class="btn btn-outline-secondary ms-lg-3">Ingresar</a>
            </div>
        </div>
    </nav>

    <main>
        <h1>SERVICIOS</h1>
    </main>

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({});
    </script>
</body>
</html>
