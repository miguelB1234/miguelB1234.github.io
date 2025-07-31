<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'estudiante') {
    header("Location: login.php");
    exit();
}
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página del Estudiante</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS e íconos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    
    <style>
        :root {
            --primary-green: #2E7D32;
            --light-green: #4CAF50;
            --yellow: #FFD700;
            --white: #FFFFFF;
            --dark-green: #1B5E20;
        }

        body {
            scroll-behavior: smooth;
        }

        /* Navbar mejorado */
        .navbar {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--dark-green) 100%) !important;
            box-shadow: 0 4px 15px rgba(46, 125, 50, 0.3);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: var(--yellow) !important;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .nav-link {
            color: var(--white) !important;
            font-weight: 500;
            margin: 0 10px;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--yellow) !important;
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background-color: var(--yellow);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Carrusel mejorado */
        .carousel {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(46, 125, 50, 0.2);
        }

        .carousel-item img {
            height: 500px;
            object-fit: cover;
            filter: brightness(0.8);
            transition: all 0.5s ease;
        }

        .carousel-item.active img {
            filter: brightness(1);
        }

        .carousel-control-prev,
        .carousel-control-next {
            background: linear-gradient(to right, rgba(46, 125, 50, 0.8), transparent);
        }

        .carousel-control-next {
            background: linear-gradient(to left, rgba(46, 125, 50, 0.8), transparent);
        }

        /* Secciones con colores temáticos */
        .bg-light {
            background: linear-gradient(135deg, #f8f9fa 0%, #e8f5e8 100%) !important;
        }

        .bg-green {
            background: linear-gradient(135deg, var(--light-green) 0%, var(--primary-green) 100%);
            color: white;
        }

        .bg-yellow {
            background: linear-gradient(135deg, var(--yellow) 0%, #FFC107 100%);
            color: var(--dark-green);
        }

        /* Bienvenida mejorada */
        .welcome-section {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--light-green) 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .welcome-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="rgba(255,215,0,0.1)"/></svg>') repeat;
            animation: float 20s linear infinite;
        }

        @keyframes float {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        .welcome-section h2 {
            position: relative;
            z-index: 2;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: pulse 2s ease-in-out infinite alternate;
        }

        @keyframes pulse {
            from { transform: scale(1); }
            to { transform: scale(1.05); }
        }

        /* Tarjetas de materias con animaciones */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.1);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            overflow: hidden;
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 215, 0, 0.1), transparent);
            transition: left 0.5s;
        }

        .card:hover::before {
            left: 100%;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 15px 35px rgba(46, 125, 50, 0.3);
        }

        .card .bi {
            transition: all 0.3s ease;
        }

        .card:hover .bi {
            transform: rotate(360deg) scale(1.2);
        }

        /* Símbolo institucional */
        .simbolo-container {
            position: relative;
            display: inline-block;
        }

        .simbolo-container img {
            border-radius: 50%;
            border: 5px solid var(--yellow);
            box-shadow: 0 10px 30px rgba(46, 125, 50, 0.3);
            transition: all 0.3s ease;
            animation: rotate 10s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .simbolo-container:hover img {
            transform: scale(1.1);
            animation-play-state: paused;
        }

        /* Noticias mejoradas */
        .news-card {
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .news-card:hover {
            border-color: var(--yellow);
            transform: translateY(-5px);
        }

        .news-card img {
            height: 200px;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .news-card:hover img {
            transform: scale(1.1);
        }

        /* Footer mejorado */
        footer {
            background: linear-gradient(135deg, var(--dark-green) 0%, var(--primary-green) 100%) !important;
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--yellow) 0%, var(--white) 50%, var(--yellow) 100%);
        }

        .footer-form .form-control {
            border-radius: 25px;
            border: 2px solid var(--yellow);
            background: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
        }

        .footer-form .form-control:focus {
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
            transform: scale(1.02);
        }

        .footer-form .btn {
            border-radius: 25px;
            background: var(--yellow);
            border: none;
            color: var(--dark-green);
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .footer-form .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
        }

        /* Enlaces de redes sociales */
        .social-links a {
            display: inline-block;
            margin: 5px 0;
            padding: 10px 15px;
            background: rgba(255, 215, 0, 0.1);
            border-radius: 25px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-links a:hover {
            background: var(--yellow);
            color: var(--dark-green) !important;
            transform: translateX(10px);
        }

        /* Mapa mejorado */
        iframe {
            border-radius: 10px;
            border: 2px solid var(--yellow);
            transition: all 0.3s ease;
        }

        iframe:hover {
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.3);
        }

        /* Títulos animados */
        h2, h3 {
            position: relative;
            display: inline-block;
        }

        h2::after, h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: var(--yellow);
            border-radius: 2px;
        }

        /* Animación de entrada */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .carousel-item img {
                height: 300px;
            }
            
            .card:hover {
                transform: translateY(-5px) scale(1.02);
            }
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70">

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="bi bi-mortarboard-fill me-2"></i>PROMOCION SOCIAL
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#carrusel"><i class="bi bi-house-fill me-1"></i>Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#historia"><i class="bi bi-clock-history me-1"></i>Historia</a></li>
                <li class="nav-item"><a class="nav-link" href="#simbolo"><i class="bi bi-award-fill me-1"></i>Símbolo</a></li>
                <li class="nav-item"><a class="nav-link" href="#noticias"><i class="bi bi-newspaper me-1"></i>Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="#materias"><i class="bi bi-book-fill me-1"></i>Materias</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto"><i class="bi bi-envelope-fill me-1"></i>Contacto</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right me-1"></i>Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Carrusel -->
<section id="carrusel" class="mt-5 pt-5">
    <div class="container">
        <div id="carouselInst" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselInst" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselInst" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselInst" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active"><img src= "img1.jpg" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src= "img2.jpg" class="d-block w-100" alt="..."></div>
                <div class="carousel-item"><img src= "img3.jpg" class="d-block w-100" alt="..."></div>
            </div>
            <button class="carousel-control-prev" data-bs-target="#carouselInst" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" data-bs-target="#carouselInst" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>

<!-- Bienvenida -->
<section class="p-5 welcome-section">
    <div class="container text-center">
        <h2><i class="bi bi-person-check-fill me-3"></i>Bienvenido, <?php echo $_SESSION['usuario']; ?></h2>
    </div>
</section>

<!-- Misión y Visión -->
<section class="p-5 fade-in">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="p-4 bg-light rounded-4">
                    <i class="bi bi-target display-4 text-success mb-3"></i>
                    <h3>Misión</h3>
                    <h4></h4>
                    <p>


                    </p>   
    
                    

                    <p>"Formar estudiantes íntegros, con valores humanos sólidos y conocimientos académicos de calidad, capaces de enfrentar con éxito los retos del futuro. Buscamos cultivar en ellos el pensamiento crítico, la creatividad, la responsabilidad social y el compromiso con su comunidad, para que se conviertan en agentes de cambio positivo en la sociedad, preparados no solo para destacar profesionalmente, sino también para construir un mundo más justo, equitativo y sostenible."</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="p-4 bg-green rounded-4">
                    <i class="text-warning mb-3"></i>
                    <p>
                         



                    </p>
                    <p>

                    </p>
                    <p>

                    </p>
                   <h3>Visión</h3>
                   <h4></h4>
                    <p>



                    </p>
                       
                    

                    <p>"Ser una institución reconocida a nivel regional y nacional por su excelencia educativa, basada en una formación integral que promueve el pensamiento crítico, los valores humanos y el compromiso social, formando ciudadanos capaces de transformar positivamente su entorno y enfrentar los desafíos del mundo actual con responsabilidad, liderazgo y pasión por el aprendizaje."</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Historia -->
<section id="historia" class="p-5 bg-light fade-in">
    <div class="container">
        <div class="text-center mb-5">
            <i class="bi bi-book-half display-4 text-success mb-3"></i>
            <h2>Nuestra Historia</h2>
        </div>
        <p class="lead text-center">La institución prom fue fundada hace mucho tiempo sin embargo actualmente es la principal fuente de educacion de palermo huila y circundantes cuenta con 7 sedes y a demostrado una educacion tradicional adaptativa para que los jovenes busquen el conocimiento y ademas es organizadora de diferentes actividades academicas,culturales y deportivas por eso es una institucion que se recomienda</p>
    </div>
</section>

<!-- Símbolo Institucional -->
<section id="simbolo" class="p-5 fade-in">
    <div class="container text-center">
        <h2><i class="bi bi-gem me-3"></i>Símbolo Institucional</h2>
        <div class="simbolo-container my-4">
            <img src="simbolo.jpg" alt="Símbolo" class="img-fluid" style="max-width: 50px;">
        </div>
        <p class="lead text-center">El símbolo representa mucho más que una imagen; encarna los valores fundamentales, la misión transformadora y la visión a futuro de nuestra institución. Es un reflejo del compromiso con la educación de calidad, el respeto, la inclusión, el crecimiento personal y colectivo. Cada elemento de este emblema comunica nuestra identidad, nuestros principios y el propósito de formar generaciones íntegras, capaces de construir una sociedad más justa, solidaria y consciente</p>
    </div>
</section>

<!-- Noticias -->
<section id="noticias" class="p-5 bg-light fade-in">
    <div class="container">
        <div class="text-center mb-5">
            <i class="bi bi-megaphone-fill display-4 text-primary mb-3"></i>
            <h2>Noticias</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card news-card">
                    <img src="voley.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PROXIMOS PARTIDOS DE VOLEYVOL ENTRE LOS EDUCADOS Y EDUCANTES</h5>
                        <p class="card-text">dentro de poco se hara la organizacion y salida de los grados para visualizar uno de los partidos mas esperados entre profesores y el grado 1102 las opiniones divididas dejan en juego ambas reputaciones</p>
                        <small class="text-muted"><i class="bi bi-calendar-event me-1"></i>26/07/2025</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Materias Estáticas -->
<section id="materias" class="p-5 bg-light fade-in">
    <div class="container">
        <div class="text-center mb-5">
            <i class="bi bi-journals display-4 text-success mb-3"></i>
            <h2>Materias</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <!-- Matemáticas -->
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-calculator display-4 text-primary"></i>
                        <h5 class="card-title mt-3">Matemáticas</h5>
                        <p class="card-text">Desarrolla el pensamiento lógico y numérico a través del estudio de operaciones, álgebra y geometría.</p>
                        <p><strong>Profesor:</strong> Magnolia Hernandez</p>
                    </div>
                </div>
            </div>

            <!-- Castellano -->
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-journal-bookmark display-4 text-danger"></i>
                        <h5 class="card-title mt-3">Castellano</h5>
                        <p class="card-text">Fomenta el uso correcto del idioma, lectura crítica y habilidades de escritura.</p>
                        <p><strong>Profesora:</strong> Sandra Osorio</p>
                    </div>
                </div>
            </div>

            <!-- Ciencias Naturales -->
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-globe-americas display-4 text-success"></i>
                        <h5 class="card-title mt-3">Ciencias Naturales</h5>
                        <p class="card-text">Explora el mundo físico y biológico, el cuerpo humano, los ecosistemas y la energía.</p>
                        <p><strong>Profesora:</strong> Milton Cesar, Adriana Vergel y Camilo Aragon</p>
                    </div>
                </div>
            </div>

            <!-- Artes -->
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-palette display-4 text-warning"></i>
                        <h5 class="card-title mt-3">Artes</h5>
                        <p class="card-text">Fomenta la creatividad mediante la expresión visual, la pintura y las formas artísticas.</p>
                        <p><strong>Profesor:</strong> Wilton Rojas</p>
                    </div>
                </div>
            </div>

            <!-- Sociales -->
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-globe2 display-4 text-info"></i>
                        <h5 class="card-title mt-3">Ciencias Sociales</h5>
                        <p class="card-text">Analiza la historia, la geografía, la sociedad y la cultura para formar ciudadanos críticos.</p>
                        <p><strong>Profesora:</strong> Clema Yinneth</p>
                    </div>
                </div>
            </div>

            <!-- Educación Física -->
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi-bicycle display-4 text-success"></i>
                        <h5 class="card-title mt-3">Educación Física</h5>
                        <p class="card-text">Promueve la salud y el trabajo en equipo mediante la actividad física y el deporte.</p>
                        <p><strong>Profesor:</strong> Dora Perez</p>
                    </div>
                </div>
            </div>

            <!-- Filosofía -->
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-lightbulb display-4 text-secondary"></i>
                        <h5 class="card-title mt-3">Filosofía</h5>
                        <p class="card-text">Invita a la reflexión crítica sobre la vida, el conocimiento y la moral.</p>
                        <p><strong>Profesora:</strong> Daniel Chambon</p>
                    </div>
                </div>
            </div>

            <!-- Ética -->
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-heart-fill display-4 text-primary"></i>
                        <h5 class="card-title mt-3">Ética</h5>
                        <p class="card-text">Desarrolla valores morales y principios éticos para la formación integral del ciudadano.</p>
                        <p><strong>Profesor:</strong> Daniel Rodríguez</p>
                    </div>
                </div>
            </div>

            <!-- Música -->
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-music-note-beamed display-4 text-warning"></i>
                        <h5 class="card-title mt-3">Música</h5>
                        <p class="card-text">Estimula la sensibilidad artística y el desarrollo del ritmo, la melodía y la armonía.</p>
                        <p><strong>Profesora:</strong> Hernando</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<footer id="contacto" class="bg-dark text-white p-4">
    <div class="container">
        <div class="row">
            <!-- Contacto -->
            <div class="col-md-4 mb-4">
                <h5><i class="bi bi-chat-dots-fill me-2"></i>Contáctanos</h5>
                <form class="footer-form">
                    <input type="text" class="form-control mb-2" placeholder="Tu nombre">
                    <input type="email" class="form-control mb-2" placeholder="Tu correo">
                    <textarea class="form-control mb-2" placeholder="Mensaje" rows="3"></textarea>
                    <button class="btn btn-primary w-100">
                        <i class="bi bi-send-fill me-1"></i>Enviar
                    </button>
                </form>
            </div>

            <!-- Ubicación -->
            <div class="col-md-4 mb-4">
                <h5><i class="bi bi-geo-alt-fill me-2"></i>Ubicación</h5>
                <p><i class="bi bi-house-door-fill me-1"></i>Dirección:Cra. 6 #No. 11-24, Palermo, Huila</p>
                <iframe src="https://maps.google.com/maps?q=bogota&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="150" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <!-- Redes -->
            <div class="col-md-4 mb-4 social-links">
                <h5><i class="bi bi-share-fill me-2"></i>Síguenos</h5>
                <a href="#" class="text-white me-2">
                    <i class="bi bi-facebook me-1"></i>Facebook
                </a><br>
                <a href="#" class="text-white me-2">
                    <i class="bi bi-instagram me-1"></i>Instagram
                </a><br>
                <a href="#" class="text-white me-2">
                    <i class="bi bi-youtube me-1"></i>YouTube
                </a>
            </div>
        </div>
        <hr class="border-warning">
        <p class="text-center mb-0">
            <i class="bi bi-c-circle me-1"></i>2025 Institución Educativa. Todos los derechos reservados.
        </p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Animación de entrada al hacer scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animationDelay = '0.1s';
            entry.target.classList.add('fade-in');
        }
    });
}, observerOptions);

// Observar todas las secciones
document.querySelectorAll('section').forEach(section => {
    observer.observe(section);
});

// Efecto de typing en el navbar brand
const brand = document.querySelector('.navbar-brand');
let originalText = brand.innerHTML;
brand.addEventListener('mouseenter', () => {
    brand.style.animation = 'pulse 0.5s ease-in-out';
});

// Auto-ocultar navbar al hacer scroll hacia abajo
let lastScrollTop = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > lastScrollTop && scrollTop > 100) {
        navbar.style.transform = 'translateY(-100%)';
    } else {
        navbar.style.transform = 'translateY(0)';
    }
    lastScrollTop = scrollTop;
});
</script>
</body>
</html>