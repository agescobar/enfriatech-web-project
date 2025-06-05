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