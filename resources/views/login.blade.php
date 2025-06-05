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

    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-body-tertiary">
        <a href="{{ url('/') }}" class="position-absolute top-0 start-0 m-4 text-decoration-none d-flex align-items-center">
            <i class="bi bi-arrow-left fs-4 me-2"></i>
            <span class="fw-semibold">Inicio</span>
        </a>
        <main class="w-100" style="max-width: 430px;">
            <section class="py-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5 bg-light position-relative">
                        <div class="text-center mb-4">
                            <img src="{{ asset('assets/img/bearblue.svg') }}" alt="Logo Enfríatech" width="60" class="mb-2">
                            <h2 class="fw-bold mb-1">Iniciar sesión</h2>
                            <p class="text-muted small">Bienvenido de nuevo, ingresa tus datos</p>
                        </div>
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white"><i class="bi bi-lock"></i></span>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                                    @error('password')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Recuérdame</label>
                                </div>
                                <a href="#" class="small text-primary text-decoration-none">¿Olvidaste tu contraseña?</a>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold shadow-sm">Ingresar</button>
                        </form>
                        <div class="text-center mt-4">
                            <span class="text-muted small">¿No tienes cuenta?</span>
                            <a href="{{ route('registro') }}" class="text-decoration-none fw-semibold">Regístrate</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({});
    </script>
</body>
</html>
