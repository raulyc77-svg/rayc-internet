<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RayC Internet</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">

        <div class="container">

            <a class="navbar-brand fw-bold" href="/">
                RayC Internet
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#menu"
                    aria-controls="menu"
                    aria-expanded="false"
                    aria-label="Mostrar menú">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <!-- INICIO -->
                    <li class="nav-item">
                        <a class="nav-link active" href="/">
                            Inicio
                        </a>
                    </li>

                    <!-- PLANES -->
                    <li class="nav-item">
                        <a class="nav-link" href="#planes">
                            Planes
                        </a>
                    </li>

                    <!-- NOSOTROS -->
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">
                            Nosotros
                        </a>
                    </li>

                    <!-- INICIAR SESIÓN -->
                    <li class="nav-item mt-2 mt-lg-0">
                        <a class="btn btn-light text-primary ms-lg-3"
                           href="/login">
                            Iniciar sesión
                        </a>
                    </li>

                    <!-- REGISTRARSE -->
                    <li class="nav-item mt-2 mt-lg-0">
                        <a class="btn btn-outline-light ms-lg-2"
                           href="/register">
                            Registrarse
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- PORTADA -->
    <section class="bg-light py-5">

        <div class="container py-5">

            <div class="row align-items-center">

                <!-- TEXTO -->
                <div class="col-lg-7">

                    <span class="badge bg-primary px-3 py-2 mb-3">
                        INTERNET PARA TU HOGAR
                    </span>

                    <h1 class="display-4 fw-bold text-primary">
                        Internet para tu hogar
                    </h1>

                    <p class="lead mt-3">
                        Disfruta de una conexión estable para navegar,
                        estudiar, trabajar y disfrutar de tus contenidos
                        favoritos.
                    </p>

                    <div class="mt-4">

                        <a href="#planes"
                           class="btn btn-primary btn-lg me-2">
                            Ver planes
                        </a>

                        <a href="/login"
                           class="btn btn-outline-primary btn-lg">
                            Iniciar sesión
                        </a>

                    </div>

                </div>


                <!-- PANEL -->
                <div class="col-lg-5 text-center mt-5 mt-lg-0">

                    <div class="bg-primary text-white rounded-4 p-5 shadow-lg">

                        <div style="font-size: 70px;">
                            📡
                        </div>

                        <h2 class="mt-3 fw-bold">
                            RayC Internet
                        </h2>

                        <p class="mb-0">
                            Conectando hogares y personas.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- NOSOTROS -->
    <section id="nosotros" class="py-5 bg-white">

        <div class="container">

            <!-- TÍTULO -->
            <div class="text-center mb-5">

                <span class="badge bg-primary px-3 py-2 mb-3">
                    CONECTAMOS CONTIGO
                </span>

                <h2 class="fw-bold display-6">
                    ¿Qué es RayC Internet?
                </h2>

                <p class="text-muted fs-5">
                    Internet estable para tu hogar, trabajo y entretenimiento.
                </p>

            </div>


            <!-- DESCRIPCIÓN -->
            <div class="row justify-content-center mb-5">

                <div class="col-lg-10">

                    <div class="card border-0 shadow-sm">

                        <div class="card-body p-5">

                            <div class="row align-items-center">

                                <div class="col-md-3 text-center mb-4 mb-md-0">

                                    <div class="bg-primary text-white rounded-circle
                                                d-inline-flex align-items-center
                                                justify-content-center"
                                         style="width: 110px; height: 110px;">

                                        <span style="font-size: 50px;">
                                            🌐
                                        </span>

                                    </div>

                                </div>


                                <div class="col-md-9">

                                    <h3 class="fw-bold text-primary mb-3">
                                        RayC Internet
                                    </h3>

                                    <p class="lead mb-0">
                                        En RayC Internet ofrecemos soluciones de
                                        conectividad para hogares y familias que
                                        necesitan una conexión estable para navegar,
                                        estudiar, trabajar, comunicarse y disfrutar
                                        de sus contenidos favoritos.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- CARACTERÍSTICAS -->
            <div class="row g-4">

                <!-- CONEXIÓN -->
                <div class="col-md-4">

                    <div class="card h-100 border-0 shadow-sm text-center">

                        <div class="card-body p-4">

                            <div class="fs-1 mb-3">
                                📶
                            </div>

                            <h4 class="fw-bold">
                                Conexión estable
                            </h4>

                            <p class="text-muted">
                                Disfruta de Internet para tus actividades
                                diarias con una conexión pensada para tu hogar.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- PLANES -->
                <div class="col-md-4">

                    <div class="card h-100 border-0 shadow-sm text-center">

                        <div class="card-body p-4">

                            <div class="fs-1 mb-3">
                                🏠
                            </div>

                            <h4 class="fw-bold">
                                Planes para tu hogar
                            </h4>

                            <p class="text-muted">
                                Elige entre diferentes velocidades según las
                                necesidades de tu familia y tus dispositivos.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- DISPOSITIVOS -->
                <div class="col-md-4">

                    <div class="card h-100 border-0 shadow-sm text-center">

                        <div class="card-body p-4">

                            <div class="fs-1 mb-3">
                                💻
                            </div>

                            <h4 class="fw-bold">
                                Para todos tus dispositivos
                            </h4>

                            <p class="text-muted">
                                Conecta celulares, computadoras, televisores y
                                otros equipos de tu hogar.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- MENSAJE -->
            <div class="row justify-content-center mt-5">

                <div class="col-lg-10">

                    <div class="alert alert-primary border-0 shadow-sm p-4 text-center">

                        <h4 class="fw-bold">
                            Tu conexión, siempre contigo
                        </h4>

                        <p class="mb-0">
                            Encuentra el plan que mejor se adapte a tu hogar
                            y disfruta de una conexión pensada para ti.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- PLANES -->
    <section id="planes" class="py-5 bg-light">

        <div class="container">

            <!-- TÍTULO -->
            <div class="text-center mb-5">

                <span class="badge bg-primary px-3 py-2 mb-3">
                    NUESTROS SERVICIOS
                </span>

                <h2 class="fw-bold display-6">
                    Nuestros planes
                </h2>

                <p class="text-muted fs-5">
                    Opciones de conexión para diferentes necesidades.
                </p>

            </div>


            <div class="row g-4">

                <!-- PLAN 50 -->
                <div class="col-md-4">

                    <div class="card h-100 border-0 shadow-sm">

                        <div class="card-body text-center p-4">

                            <span class="badge bg-primary mb-3">
                                PLAN HOGAR
                            </span>

                            <h3 class="fw-bold">
                                50 Mbps
                            </h3>

                            <div class="my-4">

                                <span class="display-5 fw-bold text-primary">
                                    S/ 35
                                </span>

                                <span class="text-muted">
                                    / mes
                                </span>

                            </div>

                            <p class="text-muted">
                                Conexión para navegación y uso diario.
                            </p>

                            <a href="/planes/50-mbps"
                               class="btn btn-primary mt-3">
                                Ver información
                            </a>

                        </div>

                    </div>

                </div>


                <!-- PLAN 100 -->
                <div class="col-md-4">

                    <div class="card h-100 border-0 shadow-sm">

                        <div class="card-body text-center p-4">

                            <span class="badge bg-primary mb-3">
                                PLAN HOGAR
                            </span>

                            <h3 class="fw-bold">
                                100 Mbps
                            </h3>

                            <div class="my-4">

                                <span class="display-5 fw-bold text-primary">
                                    S/ 45
                                </span>

                                <span class="text-muted">
                                    / mes
                                </span>

                            </div>

                            <p class="text-muted">
                                Mayor velocidad para hogares conectados.
                            </p>

                            <a href="/planes/100-mbps"
                               class="btn btn-primary mt-3">
                                Ver información
                            </a>

                        </div>

                    </div>

                </div>


                <!-- PLAN 150 -->
                <div class="col-md-4">

                    <div class="card h-100 border-0 shadow-sm">

                        <div class="card-body text-center p-4">

                            <span class="badge bg-primary mb-3">
                                PLAN HOGAR
                            </span>

                            <h3 class="fw-bold">
                                150 Mbps
                            </h3>

                            <div class="my-4">

                                <span class="display-5 fw-bold text-primary">
                                    S/ 50
                                </span>

                                <span class="text-muted">
                                    / mes
                                </span>

                            </div>

                            <p class="text-muted">
                                Una opción para disfrutar de mayor velocidad.
                            </p>

                            <a href="/planes/150-mbps"
                               class="btn btn-primary mt-3">
                                Ver información
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- LLAMADO A LA ACCIÓN -->
    <section class="py-5 bg-primary text-white">

        <div class="container text-center">

            <h2 class="fw-bold">
                Conéctate con RayC Internet
            </h2>

            <p class="lead">
                Crea tu cuenta o accede para continuar.
            </p>

            <a href="/register"
               class="btn btn-light btn-lg text-primary me-2">
                Registrarse
            </a>

            <a href="/login"
               class="btn btn-outline-light btn-lg">
                Iniciar sesión
            </a>

        </div>

    </section>


    <!-- FOOTER -->
    <footer class="bg-dark text-white py-4">

        <div class="container text-center">

            <p class="mb-1 fw-bold">
                RayC Internet
            </p>

            <p class="mb-0 text-white-50">
                Internet para tu hogar, trabajo y entretenimiento.
            </p>

        </div>

    </footer>


</body>

</html>