<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Servicios</title>
    <style>
        /* Hero Section */
        .hero-section {
            position: relative;
            background: url('imagenes/hero1.jpg') center/cover no-repeat;
            height: 70vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-content h1 {
            font-size: 3em;
            font-weight: bold;
            margin: 0;
        }

        .hero-content h2 {
            font-size: 1.5em;
            margin-top: 10px;
        }

        .scroll-down-button {
            position: absolute;
            bottom: 20px;
            z-index: 1;
        }

        .scroll-down-button img {
            width: 50px;
            transition: transform 0.3s ease-in-out;
        }

        .scroll-down-button img:hover {
            transform: translateY(5px);
        }

     
        .services-section {
            padding: 50px 10%;
            text-align: center;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .service-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .service-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .service-card .service-info {
            padding: 15px;
            flex-grow: 1;
        }

        .service-card h3 {
            font-size: 1.2em;
            margin: 10px 0;
            text-align: center;
        }

        .service-card p {
            font-size: 0.9em;
            color: #555;
            text-align: justify; 
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            border-top: 1px solid #ddd;
            gap: 10px; 
        }

        .whatsapp-btn, .details-btn {
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 0.9em;
            text-align: center;
            width: 50%;
            display: inline-block;
        }

        .whatsapp-btn {
            background: #25D366;
            color: white;
        }

        .details-btn {
            background: #f8f9fa;
            color: black;
            border: 1px solid #ddd;
        }

        .whatsapp-btn:hover {
            background: #1ebc5c;
        }

        .details-btn:hover {
            background: #e2e6ea;
        }

        @media (max-width: 768px) {
    /* Hero Section */
    .hero-content h1 {
        font-size: 2em;
    }

    .hero-content h2 {
        font-size: 1.2em;
    }

    /* Servicios */
    .services-section {
        padding: 20px 5%;
    }

    .services-grid {
        grid-template-columns: 1fr; /* Una columna en móviles */
    }

    .service-card {
        margin: 10px 0;
    }

    .service-card img {
        height: 150px;
    }

    .service-card h3 {
        font-size: 1em;
    }

    .service-card p {
        font-size: 0.85em;
    }

    .buttons {
        flex-direction: column;
        gap: 15px;
    }

    .whatsapp-btn, .details-btn {
        width: 100%;
    }
    </style>
</head>
<body>
    
    <div id="catalogo" class="hero-section">
        <div class="hero-content">
            <h1>CATÁLOGO DE SERVICIOS</h1>
            <h2>DESCUBRE NUESTRAS SOLUCIONES ESPECIALIZADAS</h2>
        </div>
        <a href="#services" class="scroll-down-button">
            <img src="imagenes/flecha.png" alt="Flecha abajo">
        </a>
    </div>

    
    <section id="services" class="services-section">
        <h2>Nuestros Servicios</h2>
        <div class="services-grid">
            <?php
            $servicios = [
                ["Limpieza de muros y estructuras", "limpiezae.jpg", "Nuestro equipo de expertos en limpieza industrial se especializa en devolverle vida a tus muros y estructuras."],
                ["Limpieza de ventanas y alturas", "limpiezav.jpg", "En nuestra empresa, comprendemos la importancia de mantener tus ventanas y espacios en altura impecables."],
                ["Limpieza de ductos y chimeneas", "limpieza d.png", "Nuestro equipo de expertos en limpieza de ductos y chimeneas está preparado para resolver cualquier desafío."],
                ["Limpieza de naves industriales", "limpiezani.png", "Nuestro equipo especializado en limpieza de naves industriales está listo para devolverle a tus instalaciones un aspecto impecable."],
                ["Pintura para superficies, fachadas, naves, preparación de superficies", "pintura.png", "En nuestra empresa, nos especializamos en pintura para diversas superficies, fachadas y naves industriales."],
                ["Impermeabilización", "im.jpg", "En nuestra empresa, te ofrecemos servicios especializados de impermeabilización para proteger tus estructuras de filtraciones de agua o químicos."],
                ["Trabajos en alturas", "Imagen2.png", "En nuestra empresa, contamos con un equipo de personal certificado y capacitado para realizar trabajos en alturas."],
                ["Jardinería y Paisajismo", "12.jpg", "En nuestra empresa, comprendemos el impacto que la naturaleza puede tener en el entorno y la imagen de tu espacio."],
                ["Limpieza y sanitación de tanques y silos", "limpiezas.jpg", "En nuestra empresa, brindamos servicios profesionales de limpieza y sanitización de tanques y silos industriales."],
                ["Mantenimiento Eléctrico", "electrico.jpg", "Diagnóstico, reparación y optimización de instalaciones eléctricas de baja y media tensión. Cumplimiento con normativas (NOM, STPS) y reducción de riesgos."],
                ["Mantenimiento Mécanico", "mecanico.jpg", "Mantenimiento integral de maquinaria para prolongar su vida útil y evitar fallas críticas."],
                ["Mantenimiento Automatización", "automatizacion.jpg", "Sistemas inteligentes para monitorear y controlar procesos industriales en tiempo real."],
                ["Mantenimiento Hidrosanitario", "hidrosanitario.jpg", "Evita fugas, obstrucciones y daños estructurales con un sistema hidrosanitario en óptimas condiciones."],
                ["Iluminación", "iluminacion.jpg", "Diseño, instalación y mantenimiento de sistemas de iluminación eficientes y seguros."],
                ["Aire Acondicionado y Refrigeración", "aire.jpg", "En CYCLONOVA Construction, ofrecemos soluciones avanzadas en aire acondicionado para entornos empresariales e industriales, combinando tecnología de punta con eficiencia energética y compromiso ambiental. "],
                ["Suministro e Instalación de Multimuro, Multipanel y Tablaroca", "multi.jpg", "Somos especialistas en la construcción de espacios eficientes y funcionales mediante la instalación profesional de paneles tipo multimuro, multipanel y sistemas de tablaroca. "]
            ];

            foreach ($servicios as $servicio) {
                $nombreServicio = urlencode($servicio[0]); 
                echo '
                <div class="service-card">
                    <img src="imagenes/' . $servicio[1] . '" alt="' . $servicio[0] . '">
                    <div class="service-info">
                        <h3>' . $servicio[0] . '</h3>
                        <p>' . $servicio[2] . '</p>
                    </div>
                    <div class="buttons">
                        <a href="https://wa.me/+528661372721?text=Hola,%20estoy%20interesado%20en%20el%20servicio%20de%20' . $nombreServicio . '" class="whatsapp-btn" target="_blank">WhatsApp</a>
                        <a href="detalles.php?servicio=' . urlencode($servicio[0]) . '" class="details-btn">Más detalles</a>
                    </div>
                </div>';
            }
            ?>
        </div>
    </section>

<?php include 'footer.php'; ?>

</body>
</html>
