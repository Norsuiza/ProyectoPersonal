<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Portfolio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Estilos personalizados -->
    <style>
        .bg-indigo-gradient {
            background: linear-gradient(to right, #7608f4, #4e0606);
        }
        .skill-item {
            padding: 0.5rem;
            margin: 0.5rem 0;
        }
        .project-card {
            transition: transform 0.3s;
        }
        .project-card:hover {
            transform: translateY(-5px);
        }

        .imp{
            color: #63077d;
        }

        .nimp{
            color: #4e0606;
        }

        .mimp{
            color: #63077DFF;
        }
    </style>
</head>
<body>
<!-- Navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold imp" href="#">Mi Portafolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link nimp" href="#inicio">Inicio</a></li>
                <li class="nav-item"><a class="nav-link nimp" href="#conoceme">Conóceme</a></li>
                <li class="nav-item"><a class="nav-link nimp" href="#proyectos">Proyectos</a></li>
                <li class="nav-item"><a class="nav-link nimp" href="#contacto">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sección Hero -->
<section id="inicio" class="py-5 bg-indigo-gradient text-white">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold mb-4">Hola, soy Norberto Arredondo Vizcarra</h1>
        <p class="lead">Desarrollador web front & back</p>
    </div>
</section>

<!-- Sección Conóceme -->
<section id="conoceme" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 mt-4 mt-lg-0">
                <h2 class="mb-4 imp text-center">Sobre mí</h2>
                <p class="lead text-center">
                    Soy Norberto Arredondo Vizcarra, desarrollador web con experiencia en la creación de aplicaciones dinámicas y eficientes.
                    Me especializo en PHP, Laravel, JavaScript y AJAX, diseñando soluciones intuitivas y escalables para la gestión de datos
                    y la optimización de procesos.
                </p>

                <div class="row mt-4 text-center">
                    <div class="col-3 skill-item mimp">
                        <i class="fas fa-code imp me-2"></i>Desarrollo Web
                    </div>
                    <div class="col-3 skill-item mimp">
                        <i class="fas fa-mobile-alt imp me-2"></i>Diseño Responsivo
                    </div>
                    <div class="col-3 skill-item mimp">
                        <i class="fab fa-react imp me-2"></i>React & Laravel
                    </div>
                    <div class="col-3 skill-item mimp">
                        <i class="fas fa-database imp me-2"></i>Bases de Datos
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sección Proyectos -->
<section id="proyectos" class="py-5 text-center">
    <div class="container">
        <h2 class="text-center mb-5 mimp">Mis Proyectos</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card project-card h-100 shadow">
                    <img src="{{ asset('images/cap1.png') }}" class="card-img-top" alt="Proyecto 1">

                    <div class="card-body">
                        <h5 class="card-title">Plataforma de administracion Agricola</h5>
                        <p class="card-text">Utilizades en formatos CRUD para la correcta administracion de informacion de las empresas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card project-card h-100 shadow">
                    <img src="{{ asset('images/cap2.png') }}" class="card-img-top" alt="Proyecto 2">
                    <div class="card-body">
                        <h5 class="card-title">Administrador de Nómina</h5>
                        <p class="card-text">Gestiones de Archivos y peticiones bajo demandas de clientes en cualquier tipo de empresa.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card project-card h-100 shadow">
                    <img src="{{ asset('images/cap3.png') }}" class="card-img-top" alt="Proyecto 3">
                    <div class="card-body">
                        <h5 class="card-title">Personalizacion y Seguridad</h5>
                        <p class="card-text">Sistemas seguros y autentificados con inicio de sesion para su correcta administracion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Contacto -->
<section id="contacto" class="py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6">
                <h2 class="mb-4">Contáctame</h2>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Mensaje"></textarea>
                    </div>
                    <button class="btn btn-primary w-100">Enviar Mensaje</button>
                </form>
            </div>

            <div class="col-md-6">
                <div class="mb-4">
                    <h3 class="mb-3">Información de Contacto</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>Culiacán,Sin. México
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone text-primary me-2"></i>+52 6673186588
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope text-primary me-2"></i>lintoriginal@hotmail.com
                        </li>
                    </ul>
                </div>


                <div class="ratio ratio-16x9 shadow">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231806.981468458!2d-107.7343048796533!3d24.795998470767852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd6c77747f98f%3A0x8dd9ebf0eb2d23cc!2sCuliac%C3%A1n%20Rosales%2C%20Sin.!5e0!3m2!1ses-419!2smx!4v1740354419012!5m2!1ses-419!2smx"
                            style="border:0;" allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <div class="d-flex justify-content-center gap-3 mb-3">
            <a href="#" class="text-white"><i class="fab fa-github fa-lg"></i></a>
            <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
            <a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
        </div>
        <p class="mb-0">&copy; 2023 Norberto Arredondo Vizcarra. Todos los derechos reservados.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
