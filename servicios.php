<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .banner {
    position: relative;
    height: 70vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    padding: 20px;
    background: url('imagenes/hero1.jpg') center/cover no-repeat;
    z-index: 1;
}

.banner::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
   
}
.hero-content h1 {
    font-size: 3.0em;
    font-weight: bold;
}

.hero-content h2 {
    font-size: 2.0em;
    margin-top: 10px;
}


.banner * {
    position: relative;
    z-index: 1;
}

        .container {
            padding: 20px;
            text-align: center;
        }
        .service-section {
            max-width: 900px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: left;
            padding: 20px 0;
        }
        .service-text {
            flex: 1;
            padding-right: 20px;
            position: relative;
            display: flex;
            flex-direction: column;
        }
        .service-text h2 {
            margin-bottom: 10px;
            position: relative;
        }
      
        .service-text p {
            text-align: justify;
            margin: 0;
            padding: 15px 0;
            position: relative;
        }
        .service-text p::before,
        .service-text p::after {
            content: "";
            display: block;
            width: 80%;
            height: 2px;
            background-color: blue;
            margin: 10px auto;
        }
        .service-image {
            flex: 1;
            text-align: center;
        }
        .service-image img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            display: block;
        }
        .cta-container {
            background: yellow;
            padding:  0;
            text-align: center;
            border-radius: 0 0 5px 5px;
            width:100%;
        }
        .cta-button {
            display: block;
    width: 100%;
    padding: 15px 0;
    background: none;
    color: black;
    text-decoration: none;
    font-weight: bold;
    border: none;
    font-size: 16px;
    transition: background 0.3s ease;
        }
        .cta-button:hover {
    background: #ffeb3b;
} 
.service-section {
    align-items: stretch;
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

        @media (max-width: 768px) {
    .service-section {
        flex-direction: column;
        text-align: center;
    }

    .service-text {
        padding-right: 0;
    }

    .service-image {
        margin-top: 20px;
    }
}

    </style>
</head>
<body>
<div class="banner">
    <div class="hero-content">
        <h1>SERVICIOS ESPECIALIZADOS</h1>
        <h2>SOLUCIONES A MEDIDA PARA TUS NECESIDADES</h2>
    </div>
    
</div>

    <div class="container">
        <div class="service-section">
            <div class="service-text">
                <h2>Limpieza de muros y estructuras</h2>
                <p>Nuestro equipo de expertos en limpieza industrial se especializa en devolverle vida a tus muros y estructuras. Con técnicas avanzadas y productos especializados, eliminamos eficientemente polvos, cochambre, óxidos, telarañas y químicos que se acumulan con el tiempo. Tu infraestructura lucirá impecable, mejorando la apariencia estética y promoviendo un ambiente más seguro y saludable para tu personal. Confía en nosotros para brindarte resultados de calidad y atención a los detalles inigualables.</p>
            </div>
            <div class="service-image">
                <img src="imagenes/limp.png" alt="Limpieza de muros y estructuras">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
            </div>
        </div>

        <div class="service-section">
            <div class="service-text">
                <h2>Limpieza de ductos y chimeneas</h2>
                <p>Nuestro equipo de expertos en limpieza de ductos y chimeneas está preparado para resolver cualquier desafío. Ingresamos a los ductos con equipos de ascensos y descensos, permitiéndonos realizar reparaciones y eliminar eficientemente cualquier acumulación de materias provenientes de los procesos. Con nuestra experiencia y atención meticulosa a los detalles, te aseguramos un funcionamiento óptimo y una mejora en la eficiencia de tus sistemas de ventilación.</p>
            </div>
            <div class="service-image">
                <img src="imagenes/limpieza d.png" alt="Limpieza de Ductos y Chimeneas">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
            </div>
        </div>
        <div class="service-section">
            <div class="service-text">
                <h2>Limpieza de ventanas y trabajos en alturas</h2>
                <p>En nuestra empresa, comprendemos la importancia de mantener tus ventanas y espacios en altura impecables. Nuestro equipo de limpieza está equipado con equipos de ascensos y descensos, y utiliza plataformas articuladas para llegar a los espacios de difícil acceso. Realizamos limpiezas eficientes y meticulosas, garantizando resultados impecables y una mejora en la apariencia y luminosidad de tus instalaciones. Confía en nosotros para brindarte servicios de limpieza en altura de primera calidad.</p>
            </div>
            <div class="service-image">
                <img src="imagenes/limpiezav.jpg" alt="Limpieza de Ventanas y Alturas">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Limpieza de naves industriales</h2>
                <p>Nuestro equipo especializado en limpieza de naves industriales está listo para devolverle a tus instalaciones un aspecto impecable. Realizamos el retiro de polvos, telarañas, cochambre y cualquier contaminación presente en las superficies de tus naves. Con técnicas y productos específicos para cada tipo de superficie, garantizamos una limpieza exhaustiva y una mejora en la higiene y seguridad de tu entorno de trabajo. Confía en nuestra experiencia para mantener tus naves en condiciones óptimas.                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/limpiezani.png" alt="Limpieza de naves">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Pintura para superficies, fachadas, naves, preparación de superficies</h2>
                <p>En nuestra empresa, nos especializamos en pintura para diversas superficies, fachadas y naves industriales. Nuestro enfoque se basa en la preparación meticulosa de las superficies para garantizar una aplicación de pintura o recubrimiento correcta y duradera. Utilizamos medios manuales y herramientas adecuadas, y contamos con maquinaria, como pistolas de pintura, que nos permite ofrecerte resultados eficientes y de alta calidad en tiempo récord. Confía en nosotros para transformar tus superficies con una capa de pintura impecable y duradera.
                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/pintura.png" alt="Pintura para superficies">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Impermeabilización</h2>
                <p>En nuestra empresa, te ofrecemos servicios especializados de impermeabilización para proteger tus estructuras de filtraciones de agua o químicos. Utilizamos productos y membranas de las mejores marcas del mercado y nos aseguramos de preparar adecuadamente las superficies para una correcta aplicación. Nuestro objetivo es brindarte soluciones duraderas y efectivas que eviten daños y mantengan sus estructuras seguras. Confía en nuestra experiencia y conocimientos para solucionar tus problemas de impermeabilización.
                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/im.jpg" alt="Pintura para superficies">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Trabajo en Alturas</h2>
                <p>
En nuestra empresa, contamos con un equipo de personal certificado y capacitado para realizar trabajos en alturas. Atendemos solicitudes especiales que requieren conocimientos y técnicas específicas, como limpieza, mantenimiento y aplicaciones de pintura en lugares de difícil acceso. Nuestro enfoque se basa en garantizar la seguridad de nuestro personal y cumplir con los más altos estándares de calidad en cada tarea. Confía en nosotros para realizar trabajos en alturas de manera eficiente y segura, brindándote resultados excepcionales.
                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/Imagen2.png" alt="Trabajo en Alturas">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Jardinería y Paisajismo</h2>
                <p>
                En nuestra empresa, comprendemos el impacto que la naturaleza puede tener en el entorno y la imagen de tu espacio. Ofrecemos servicios de jardinería y paisajismo para embellecer tus instalaciones y crear ambientes agradables y acogedores. Nuestro equipo de expertos en diseño y cuidado de jardines se encarga de la planificación, selección de plantas y elementos decorativos, y mantenimiento adecuado. Confía en nosotros para crear un entorno verde que proyecte la imagen deseada y proporcione un ambiente agradable a tus clientes y empleados.
                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/12.jpg" alt="Jardinería y Paisajismo">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Limpieza y sanitación de tanques y silos</h2>
                <p>
                En nuestra empresa, brindamos servicios profesionales de limpieza y sanitización de tanques y silos industriales. Nuestro personal altamente capacitado ingresa a estos espacios utilizando técnicas de ingreso como el rapel y equipos de respiración autónoma. Realizamos limpieza exhaustiva y mantenimiento en base a los más altos estándares de calidad y seguridad. Nos adaptamos a las necesidades de cada cliente y garantizamos resultados óptimos en la limpieza y sanitización de tanques y silos. Confía en nuestra experiencia y enfoque especializado para mantener tus instalaciones en óptimas condiciones.

                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/limpiezas.jpg" alt="Limpieza y sanitación de tanques y silos">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
                </div>
                </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Mantenimiento Eléctrico</h2>
                <p>
                Diagnóstico, reparación y optimización de instalaciones eléctricas de baja y media tensión. Cumplimiento con normativas (NOM, STPS) y reducción de riesgos.

Inspección termográfica
Balanceo de cargas y corrección de factor de potencia
Mantenimiento a plantas de emergencia y UPS
Revisión y ajuste de tableros de distribución
Detección de fallas y cortocircuitos

                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/electrico.jpg" alt="Mantenimiento Eléctrico">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Mantenimiento Mécanico</h2>
                <p>
                Mantenimiento integral de maquinaria para prolongar su vida útil y evitar fallas críticas.

Motores, bombas, compresores y sistemas de transmisión
Diagnóstico de vibraciones y alineación de ejes
Reemplazo de partes y componentes
Planes preventivos y predictivos
Lubricación industrial de precisión


                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/mecanico.jpg" alt="Mantenimiento Mecanico">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Mantenimiento Automatización</h2>
                <p>
                Sistemas inteligentes para monitorear y controlar procesos industriales en tiempo real.

Programación de PLCs y configuración de sensores
Desarrollo de interfaces HMI y SCADA
Integración de sistemas y mejora de procesos
Soporte técnico y actualizaciones


                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/automatizacion.jpg" alt="Mantenimiento Automatización">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Mantenimiento Hidrosanitario</h2>
                <p>
                Evita fugas, obstrucciones y daños estructurales con un sistema hidrosanitario en óptimas condiciones.

Redes de agua potable, pluviales y sanitarias
Detección de fugas y reparación
Limpieza y desazolve de tuberías
Mantenimiento a sistemas de bombeo y cisternas
Reemplazo de válvulas y conexiones


                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/hidrosanitario.jpg" alt="Mantenimiento Hidrosanitario">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Iluminación</h2>
                <p>
                Diseño, instalación y mantenimiento de sistemas de iluminación eficientes y seguros.

Iluminación interior y exterior
Reemplazo de lámparas, luminarias y balastros
Iluminación de emergencia y señalización
Diseños para ahorro energético
Sistemas automatizados de control lumínico


                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/iluminacion.jpg" alt="Iluminación">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Aire Acondicionado y Refrigeración</h2>
                <p>
                En CYCLONOVA Construction, ofrecemos soluciones avanzadas en aire acondicionado para entornos empresariales e industriales, combinando tecnología de punta con eficiencia energética y compromiso ambiental. 

                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/aire.jpg" alt="Aire Acondicionado y Refrigeracion">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    <div class="service-section">
            <div class="service-text">
                <h2>Suministro e Instalación de Multimuro,Multipanel y Tablaroca</h2>
                <p>
                Somos especialistas en la construcción de espacios eficientes y funcionales mediante la instalación profesional de paneles tipo multimuro, multipanel y sistemas de tablaroca.

                </p>
            </div>
            <div class="service-image">
                <img src="imagenes/multi.jpg" alt="Suministro e Instalación de Multimuro,Multipanel y Tablaroca">
                <div class="cta-container">
                    <a href="catalogo.php" class="cta-button">Ver catálogo</a>
                </div>
    </div>
    </div>
    
    <div class="certification-logos">
        <img src="imagenes/repse.png" alt="REPSE">
        <img src="imagenes/stps.png" alt="STPS">
        <img src="imagenes/gnp.png" alt="GNP">
    </div>
</body>
</html>

<?php include 'footer.php'; ?>
