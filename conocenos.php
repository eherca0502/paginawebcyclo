<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conócenos</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

     
        .menu {
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s;
        }

        .menu a:hover {
            color: #FFD700;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        
        .hero {
            position: relative;
    height: 70vh; 
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    padding: 20px;
    
        }
        #hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1; 
}

        .hero h1 {
            font-size: 4rem;
            margin: 0;
        }

        .arrow {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            cursor: pointer;
            width: 50px;
            height: 50px;
            background: orange;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        .arrow img {
            width: 25px;
            height: 25px;
        }

        /* Sección Conócenos */
        .about-section {
            display: flex;
    align-items: center;
    justify-content: center; 
    gap: 40px;
    padding: 40px;
    background-color: #F8F8F8;
    flex-wrap: wrap; 
        }

        .about-section img {
            width: 40%;
            border-radius: 10px;
        }

        .about-text {
            width: 50%;
            padding: 20px;
        }

        .highlight {
    background-color: #00204a; 
    color: white;
    padding: 20px;
    border-radius: 5px;
    font-size: 2.5rem;
    margin-top: 20px;
    text-align: center;
    width: 100%;
        }

        /* Estadísticas */
        .stats {
            background-color: #0A1633;
            color: white;
            display: flex;
            justify-content: space-around;
            padding: 40px 0;
        }

        .stats .stat h3 {
            font-size: 3rem;
            color: #fff200;
            margin: 0;
        }

        
        .specialist-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 0;
            background-color: white;
        }

        .specialist-section img {
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
        }

        .specialist-section button {
            margin-top: 20px;
            background-color: #fff200;
            color: black;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .specialist-section button:hover {
            background-color: #fff200;
        }
        .mission-vision {
            padding: 40px;
            text-align: center;
        }

        .mission-vision h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .mission-vision .cards {
            display: flex;
            justify-content: center;
            gap: 40px;
        }

        .mission-vision .card {
            max-width: 400px;
        }

        .mission-vision img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .values {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .value-item h3 {
    color: black; 
    font-weight: bold;
}

        .value-item {
            text-align: center;
        }

        .value-item img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }
        .client-service {
            display: flex;
            justify-content: space-between;
            padding: 40px;
            align-items: center;
        }

        .client-service img {
            width: 300px;
            border-radius: 10px;
        }

        .client-service h2 {
            color:black;
            font-size: 1.8rem;
        }

        .client-service p {
            margin-bottom: 15px;
            font-size: 1rem;
            line-height: 1.5;
        }

        .client-service a {
            display: inline-block;
            background-color: #fff200;
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .client-service a:hover {
            background-color: #fff200;
        }
        .training {
            padding: 40px;
            text-align: center;
        }

        .training h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .training-content {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .training-content img {
            width: 500px;
            border-radius: 10px;
        }

        .training-content ul {
            text-align: left;
            list-style: none;
            padding-left: 0;
        }

        .training-content li {
            padding: 5px 0;
        }

        .training-content ul::before, .training-content ul::after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: blue;
            margin: 5px 0;
        }
        .certification-logos {
            background: #fff;
            padding: 30px 10%;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
        }
        .certification-logos img {
            width: 150px;
        }
        .value-item img {
    background-color: #fff200; 
    padding: 10px;               
    border-radius: 10px;        
}

@media (max-width: 768px) {
    .menu {
        flex-direction: column;
        text-align: center;
    }

    .about-section {
        flex-direction: column;
    }

    .about-section img,
    .about-text {
        width: 100%;
    }

    .mission-vision .cards {
        flex-direction: column;
        align-items: center;
    }

    .values {
        grid-template-columns: 1fr;
    }

    .client-service {
        flex-direction: column;
        text-align: center;
    }

    .client-service img {
        width: 100%;
        margin-bottom: 20px;
    }

    .training-content {
        flex-direction: column;
    }

    .training-content img {
        width: 100%;
    }
}


    </style>
</head>
<body>

<?php include 'header.php'; ?>


<div class="hero">
    <h1>Conócenos</h1>
    <video autoplay muted loop id="hero-video">
            <source src="videos/heroconoce.mp4" type="video/mp4">
            Tu navegador no soporta el video.
        </video>
    <div class="arrow" onclick="scrollToContent()">
        <img src="imagenes/flecha.png" alt="Flecha hacia abajo">
    </div>
</div>

<div class="about-section" id="about">
    <img src="imagenes/tr12.png" alt="Nuestra Historia">
    <div class="about-text">
        <h2>Sé parte de nuestra historia de éxito</h2>
        <div class="highlight">
            Nos enorgullece ser líderes en el sector del mantenimiento industrial y estamos listos para enfrentar cualquier desafío con dedicación, experiencia y un enfoque orientado a resultados.
        </div>
    </div>
</div>

<!-- Estadísticas -->
<div class="stats" id="stats">
    <div class="stat"><h3 class="count" data-target="11">0</h3><p>Años de experiencia</p></div>
    <div class="stat"><h3 class="count" data-target="480">0</h3><p>Servicios ofrecidos</p></div>
    <div class="stat"><h3 class="count" data-target="17">0</h3><p>Industrias atendidas</p></div>
    <div class="stat"><h3 class="count" data-target="9">0</h3><p>Alianzas líderes</p></div>
</div>


<div class="specialist-section">
    <img src="imagenes/image.PNG" alt="Especialista en acción">
    <button onclick="location.href='contacto.php'">Habla con un especialista</button>
</div>

<div class="mission-vision">
    <h2>IMPULSANDO TU CRECIMIENTO CON INNOVACIÓN INDUSTRIAL</h2>
    <div class="cards">
        <div class="card">
            <img src="imagenes/mision.jpg" alt="Misión">
            <h3> MISIÓN </h3>
            <p>Ser líderes en el sector del mantenimiento industrial, brindando soluciones integrales y de alta calidad a nuestros clientes. Mantenemos y mejoramos la infraestructura y equipos de las empresas, garantizando su funcionamiento óptimo y contribuyendo al desarrollo de la industria.
            </p>
        </div>
        <div class="card">
            <img src="imagenes/vision.jpg" alt="Visión">
            <h3> VISIÓN </h3>
            <p>Ser reconocidos como la empresa referente en servicios de mantenimiento industrial a nivel nacional. Buscamos constantemente innovar y mejorar nuestros procesos y tecnologías para ofrecer soluciones eficientes y sostenibles a nuestros clientes, estableciendo alianzas estratégicas.</p>
        </div>
    </div>
</div>
<div class="values">
        <div class="value-item"><img src="imagenes/casco.png" alt="Profesionalismo"><h3>PROFESIONALISMO</h3><p>Realizamos nuestro trabajo con altos estándares de calidad, ética y responsabilidad.</p></div>
        <div class="value-item"><img src="imagenes/saludo.png" alt="Compromiso"><h3>COMPROMISO</h3><p>Nos comprometemos plenamente con las necesidades y metas de nuestros clientes.</p></div>
        <div class="value-item"><img src="imagenes/estrella.png" alt="Excelencia"><h3>EXCELENCIA</h3><p>Buscamos constantemente la excelencia en todo lo que hacemos, superando las expectativas de todos.</p></div>
        <div class="value-item"><img src="imagenes/foco.png" alt="Innovación"><h3>INNOVACIÓN</h3><p>Promovemos la adopción de nuevas tecnologías en el campo del mantenimiento industrial.</p></div>
        <div class="value-item"><img src="imagenes/trabajo.png" alt="Trabajo en Equipo"><h3>TRABAJO EN EQUIPO</h3><p>Trabajamos en conjunto para alcanzar los mejores resultados en cada proyecto.</p></div>
        <div class="value-item"><img src="imagenes/cliente.png" alt="Orientación al Cliente"><h3>ORIENTACIÓN AL CLIENTE</h3><p>Brindamos un servicio cercano, manteniendo una comunicación clara en todas las etapas del proyecto.</p></div>
    </div>
</div>

<div class="client-service">
    <div>
        <h2>OPERAR CON EFICIENCIA SE TRATA DE ATENDER A TIEMPO TU MANTENIMIENTO</h2>
        <p>Estamos listos para acompañarte en cada paso de tu camino hacia el éxito. Nuestra dedicación a brindar servicios de calidad y nuestra amplia experiencia en el sector nos convierten en el socio ideal para tu empresa.</p>
        <p>Te ofrecemos soluciones personalizadas, atención excepcional y resultados sobresalientes. ¡Estamos aquí para ayudarte a alcanzar tus metas y superar tus expectativas!</p>
    </div>
    <div>
        <img src="imagenes/limpiezae.jpg" alt="Atención al Cliente">
        <br>
        <a href="catalogo.php" class="catalog-button">Ver catálogo</a>
    </div>
</div>

<div class="training">
    <h2>NUESTRO PERSONAL CUENTA CON CAPACITACIONES DC-3 ANTE SECRETARÍA DE TRABAJO:</h2>
    <div class="training-content">
        <img src="imagenes/tr1.png" alt="Capacitación">
        <ul>
            <li>Espacios confinados</li>
            <li>Trabajos en alturas</li>
            <li>Manejo de plataformas articuladas</li>
            <li>Ascensos y descensos</li>
            <li>Primeros auxilios</li>
            <li>Manejo de químicos</li>
            <li>Seguridad y medio ambiente</li>
        </ul>
    </div>
</div>

</div>
    <div class="certification-logos">
        <img src="imagenes/repse.png" alt="REPSE">
        <img src="imagenes/stps.png" alt="STPS">
        <img src="imagenes/gnp.png" alt="GNP">
    </div>

    
<?php include 'footer.php'; ?>

<script>
    function scrollToContent() {
        document.getElementById('about').scrollIntoView({ behavior: 'smooth' });
    }

    
    const counters = document.querySelectorAll('.count');
    const speed = 200; 

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    }

    window.addEventListener('scroll', () => {
        const statsSection = document.getElementById('stats');
        const sectionPosition = statsSection.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;

        if (sectionPosition < screenPosition) {
            animateCounters();
        }
    });
</script>

</body>
</html>


