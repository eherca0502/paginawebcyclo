
<?php include 'header.php'; ?>
<?php
session_start();
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang']; 
}

$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'es'; 
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Página Informativa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f4f4f4;
            color: #333;
        }
        .hero-section {
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

        .hero-content h1 {
            font-size: 3.0em;
            font-weight: bold;
        }
        .hero-content h2 {
            font-size: 2.0em;
            margin-top: 10px;
        }
        .scroll-down-button {
            position: absolute;
            bottom: 20px;
        }
        .scroll-down-button img {
            width: 50px;
        }
        .content {
            padding: 50px 10%;
        }

        /* Sección de Expertise */
        .expertise-section {
            background: #fff;
            padding: 50px 10%;
            text-align: center;
        }
        .expertise-section h2 {
            margin-bottom: 20px;
            
        }
        .expertise-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            text-align: center;
        }
        .expertise-item {
            padding: 20px;
            border-radius: 10px;
            color: black;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .expertise-item img {
            width: 60px;
            margin-bottom: 10px;
        }
        .expertise-item p {
            font-weight: bold;
        }

        /* Sección de Crecimiento */
        .growth-section {
    background: linear-gradient(135deg, #f0f0f0, #ffffff);
    padding: 60px 10%;
    text-align: center;
    font-family: 'Roboto', sans-serif;
}

.growth-content {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 30px;
}

.growth-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
    flex: 2;
}

.growth-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #f9f9f9;
    padding: 15px;
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    text-align: justify;
    overflow: hidden;
    max-width: 290px;
    margin: auto;
}



.growth-step img {
    width: 100%;
    height: 200px;  
    object-fit: cover;  
    border-radius: 12px;
    margin-bottom: 15px;
}

.step-text {
    padding: 20px;
    text-align: justify;
    color: #444;
}

.step-number {
    background-color: #fff200;
    color: #000000;
    font-weight: bold;
    padding: 10px 14px;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: 10px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.growth-step h3 {
    color: #333;
    font-size: 1.5em;
    margin-bottom: 10px;
    text-align: center;
    font-weight: 700;
}

.growth-step p {
    font-size: 1.1em;
    color: #555;
    text-align: justify;
    line-height: 1.6;
}


 

  
.certification-box {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top:500px;
        }
.certification-content {
            background: #f4f4f4;
            padding: 20px;
            text-align: left;
            border-radius: 10px;
        }
 .certification-content h3 {
            color: #0a1931;
            font-size: 1.3em;
        }
        .certification-content p {
            font-size: 1em;
            color: #333;
        }
        .help-box {
            background: #0a1931;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            color: white;
        }
        .help-box h3 {
            font-size: 1.3em;
        }
        .contact-button {
            display: inline-block;
            background: #fff200;
            color: black;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 10px;
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
        .provider-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px 10%;
            background: #fff;
        }
        .provider-text {
            width: 50%;
        }
        .provider-text h2 {
            color:black;
            border-left: 4 px solid black;
            padding-left: 10px;
            font-size: 2em;
        }
        .provider-text p {
            margin-top: 20px;
            font-size: 1.1em;
            text-align: justify;
        }
        .provider-text p strong {
            color: black;
        }
        .provider-images {
            width: 45%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .provider-images img {
            width: 100%;
            border-radius: 5px;
        }
        /* WhatsApp */
        .whatsapp-icon img {
            width: 50px;
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        .brand-logos {
    background-color: #f4f4f4;
    padding: 20px 0;
}


.container {
    width: 90%;
    margin: 0 auto;
}


.swiper-container {
    width: 100%;
    overflow: hidden; 
}

.swiper-wrapper {
    display: flex;
    justify-content: space-between; 
}

.swiper-slide {
    display: flex;
    justify-content: center; 
    align-items: center;
    width: 200px; 
    height: 100px; 
}

.swiper-slide img {
    max-width: 100%;
    height: 100%;
    object-fit: contain; 
}


.swiper-slide + .swiper-slide {
    margin-left: 20px;
}
       
@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 2em;
    }
    .hero-content h2 {
        font-size: 1.2em;
    }

    .expertise-grid {
        grid-template-columns: repeat(1, 1fr);
    }

    .growth-content {
        flex-direction: column;
        align-items: center;
    }

    .growth-step {
        max-width: 100%;
    }

    .provider-section {
        flex-direction: column;
        text-align: center;
    }

    .provider-text,
    .provider-images {
        width: 100%;
    }

    .certification-logos {
        flex-direction: column;
        gap: 20px;
    }

    .swiper-slide {
        width: 150px;
        height: auto;
    }

    .scroll-down-button img {
        width: 30px;
    }

    .certification-box {
        margin-top: 100px;
    }
    #hero-video {
        height: 60vh; 
    }
}

    </style>
</head>
<body>
    <div id="inicio" class="hero-section">
    <video autoplay muted loop id="hero-video">
            <source src="videos/videohero.mp4" type="video/mp4">
            Tu navegador no soporta el video.
        </video>

        <div class="hero-content">
            <h1>NUESTRA PASIÓN, TU ÉXITO</h1>
            <h2>PROFESIONALES EN MANTENIMIENTO INDUSTRIAL</h2>
        </div>
        <a href="#expertise" class="scroll-down-button">
            <img src="imagenes/flecha.png" alt="Flecha abajo">
        </a>
    </div>

    <div id="expertise" class="expertise-section">
        <h2>LO QUE NOS HACE EXPERTOS</h2>
        <div class="expertise-grid">
            <div class="expertise-item" style="background-color: #fff200;">
                <img src="imagenes/icon1.png.ico" alt="Resolución de Problemas">
                <p>RESOLUCIÓN DE PROBLEMAS</p>
            </div>
            <div class="expertise-item" style="background-color: #fff200;">
                <img src="imagenes/engra.png" alt="Seguimiento de Servicio">
                <p>SEGUIMIENTO DE SERVICIO</p>
            </div>
            <div class="expertise-item" style="background-color: #fff200;">
                <img src="imagenes/edificio1.png" alt="Distinción en Cada Sector">
                <p>DISTINCIÓN EN CADA SECTOR</p>
            </div>
            <div class="expertise-item" style="background-color: #fff200;">
                <img src="imagenes/innovacion.png" alt="Innovación y Tecnología">
                <p>INNOVACIÓN Y TECNOLOGÍA</p>
            </div>
            <div class="expertise-item" style="background-color: #fff200;">
                <img src="imagenes/flex.png" alt="Flexibilidad y Adaptabilidad">
                <p>FLEXIBILIDAD Y ADAPTABILIDAD</p>
            </div>
            <div class="expertise-item" style="background-color: #fff200;">
                <img src="imagenes/calidad.png" alt="Compromiso con la Calidad">
                <p>COMPROMISO CON LA CALIDAD</p>
            </div>
        </div>
    </div>

    <div class="growth-section">
        <h2>IMPULSANDO TU CRECIMIENTO CON INNOVACIÓN INDUSTRIAL</h2>
        <div class="growth-content">
            <div class="growth-container">
                <div class="growth-step">
                    <img src="imagenes/saber.png" alt="Saber tus necesidades">
                    <div class="step-text">
                        <div class="step-number">1</div>
                        <h3>SABER TUS NECESIDADES</h3>
                        <p>Realizamos entrevistas para obtener información sobre los servicios requeridos.</p>
                    </div>
                </div>
                <div class="growth-step">
                    <img src="imagenes/tr.jpeg" alt="Agendar una visita">
                    <div class="step-text">
                        <div class="step-number">2</div>
                        <h3>AGENDAR UNA VISITA</h3>
                        <p>Programamos una visita para atender el proyecto y presentar nuestros servicios.</p>
                    </div>
                </div>
                <div class="growth-step">
                    <img src="imagenes/cot.jpg" alt="Realización de una cotización">
                    <div class="step-text">
                        <div class="step-number">3</div>
                        <h3>REALIZACIÓN DE UNA COTIZACIÓN</h3>
                        <p>Preparamos una cotización detallada basada en tus requerimientos.</p>
                    </div>
                </div>
                <div class="growth-step">
                    <img src="imagenes/reg.png" alt="Registro de contactos">
                    <div class="step-text">
                        <div class="step-number">4</div>
                        <h3>REGISTRO DE CONTACTOS</h3>
                        <p>Registramos la información de los contactos clave dentro de tu organización.</p>
                    </div>
                </div>
                <div class="growth-step">
                    <img src="imagenes/se.jpeg" alt="Emisión de presupuesto">
                    <div class="step-text">
                        <div class="step-number">5</div>
                        <h3>EMISIÓN DE PRESUPUESTO</h3>
                        <p>Presentamos el presupuesto proyectado basado en la cotización realizada.</p>
                    </div>
                </div>
                <div class="growth-step">
                    <img src="imagenes/seee.png" alt="Seguimiento y atención">
                    <div class="step-text">
                        <div class="step-number">6</div>
                        <h3>SEGUIMIENTO Y ATENCIÓN</h3>
                        <p>Brindamos atención y seguimiento continuo durante la ejecución del proyecto o servicio.</p>
                    </div>
                </div>
            </div>

            <div class="certification-box">
                <div class="certification-content">
                    <h3>CERTIFICACIÓN REPSE</h3>
                    <p>Cumplimos con los estándares legales y de seguridad laboral establecidos en la legislación mexicana.</p>
                </div>
                <div class="help-box">
                    <h3>Descubre cómo te podemos ayudar</h3>
                    <a href="contacto.php" class="contact-button">Contacto</a>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="certification-logos">
        <img src="imagenes/repse.png" alt="REPSE">
        <img src="imagenes/stps.png" alt="STPS">
        <img src="imagenes/gnp.png" alt="GNP">
    </div>
    <div class="provider-section">
        <div class="provider-images">
            <img src="imagenes/trabajador1.png" alt="Trabajador">
           
        </div>
        <div class="provider-text">
            <h2>TU PROVEEDOR ALIADO Y CONFIABLE</h2>
            <p>
                Estamos listos para acompañarte en cada paso de tu camino hacia el éxito. Nuestra dedicación a brindar servicios de calidad y nuestra amplia experiencia en el sector nos convierten en el socio ideal para tu empresa.
            </p>
            <p>
                Te ofrecemos soluciones personalizadas, atención excepcional y resultados sobresalientes. No esperes más, da el primer paso hacia el crecimiento y la eficiencia. 
                <strong>¡Estamos aquí para ayudarte a alcanzar tus metas y superar tus expectativas!</strong>
            </p>
        </div>
    </div>
 <section class="brand-logos">
    <div class="container text-center">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="imagenes/frisa.png" alt="Frisa" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/teksid.png" alt="Teksid" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/cemex.png" alt="CEMEX" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/nanosteel.png" alt="Nanosteel" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/primmetals.png" alt="Prime Metals" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/femsa.png" alt="FEMSA" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/ahmsa.png" alt="AHMSA" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/gimsa.png" alt="GIMSA" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/herdez.png" alt="HERDEZ" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/peñoles.png" alt="Peñoles" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/bimbo.png" alt="BIMBO" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/vitro.png" alt="VITRO" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/grupomx.png" alt="Grupo Mexico" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/gap.png" alt="Grupo Aeroportario del Pacifico" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/mopar.png" alt="MOPAR" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/cfe.png" alt="CFE" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/pemex.png" alt="PEMEX" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/imss.png" alt="IMSS" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/nipon.png" alt="NIPPON STEEL" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/bosch.png" alt="BOSCH" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/ge.png" alt="GE" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/exxon.png" alt="EXXON" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/bp.png" alt="BP" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/arcelor.png" alt="ARCELOR" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/oma.png" alt="OMA" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/volks.png" alt="Volkswagen" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/barrick.png" alt="Barrick Gold" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/nutrien.png" alt="Nutrien" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/audi.png" alt="AUDI" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/tata.png" alt="TATA STEEL" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/bao.png" alt="BAOSTEEL" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/FCA.png" alt="FCA" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/posco.png" alt="POSCO" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/kia.png" alt="KIA" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/mazda.png" alt="MAZDA" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/honda.png" alt="HONDA" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/hilton.png" alt="HILTON" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/hyatt.png" alt="HYATT" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/marriott.png" alt="MARRIOTT" class="img-fluid"></div>
                <div class="swiper-slide"><img src="imagenes/ternium.png" alt="TERNIUM" class="img-fluid"></div>
                

            </div>
        </div>
    </div>
</section>

    <a href="https://wa.me/528661372721" class="whatsapp-icon" target="_blank">
        <img src="imagenes/wapp.png.ico" alt="WhatsApp">
    </a>
     <script>
    document.querySelector('.scroll-down-button').addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector('#expertise');
        target.scrollIntoView({ behavior: 'smooth' });
    });
</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 30, 
        loop: true,
        autoplay: {
            delay: 2000, 
            disableOnInteraction: false, 
        },
        breakpoints: {
            768: {
                slidesPerView: 4, 
            },
            480: {
                slidesPerView: 2, 
            }
        }
    });
});
</script>




<?php include 'footer.php'; ?>

</body>
</html>

