<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            align-items: stretch;
            min-height: 60vh;
        }
        .left {
            display: flex;
            flex-direction: column;
            width: 50%;
        }
        .left img {
            width: 100%;
            height: auto;
            flex: 1;
        }
        .right {
            width: 50%;
            background-color: #fff200;
            color: black;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #00204a;
            color: white;
            padding: 20px;
        }
        .cta-button {
            background-color: #fff200;
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
        }
        .formulario {
            text-align: center;
            padding:40px 20px;
            background-color: #f4f4f4;
        }
        .formulario-container {
            display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: stretch; 
    gap: 20px;
    max-width: 1100px;
    margin: 0 auto;
        }
        .formulario-container img {
    flex: 1 1 45%;
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    object-fit: cover; 
    min-height: 100%;  
}
.formulario-container form {
    flex: 1 1 45%;
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
       
        .formulario form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 450px;
        }
        .formulario input, .formulario select, .formulario textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .btn-enviar {
            background-color: #fff200;
            color: black;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            border-radius: 5px;
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
    /* Container */
    .container {
        flex-direction: column;
    }
    .left, .right {
        width: 100%;
    }
    
    /* Formulario */
    .formulario-container {
        flex-direction: column;
        padding: 20px;
    }
    .formulario-container img {
        width: 100%;
        flex: none;
        height: auto;
    }
    .formulario-container form {
        width: 100%;
        margin-top: 20px;
    }

    .formulario input, .formulario select, .formulario textarea {
        flex: 1 1 100%;
    }

    
    .btn-enviar {
        width: 100%;
    }
    
    /* Bottom */
    .bottom {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }

    /* Logos de certificación */
    .certification-logos {
        flex-direction: column;
        gap: 20px;
    }
    .certification-logos img {
        width: 120px;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="imagenes/tr2.jpg" alt="Imagen 1">
        </div>
        <div class="right">
            <h3>Lunes a Viernes</h3>
            <p>9:00 am – 6:00 pm</p>
            <h3>Sábados</h3>
            <p>9:00 am – 2:00 pm</p>
            <h3>Ubicación</h3>
            <p>Buenos Aires 102 Col. Guadalupe, Monclova Coahuila</p>
        </div>
    </div>

    <div class="bottom">
        <span>ESPECIALISTAS EN RESULTADOS DURADEROS</span>
        <a href="tel:+528661372721" class="cta-button">Habla Ahora</a>
        <span>+52 8661372721</span>
    </div>

    <section class="formulario">
        <h2>IMPULSANDO TU CRECIMIENTO CON INNOVACIÓN INDUSTRIAL</h2>
        <div class="formulario-container">
            <img src="imagenes/tr12.png" alt="Trabajador en construcción">
            <form id="contactForm">
                <h3>CYCLONOVA Contacto</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 15px;">
                    <input type="text" name="nombre" placeholder="Tu Nombre" required style="flex: 1 1 48%;">
                    <input type="text" name="empresa" placeholder="Nombre de su empresa" required style="flex: 1 1 48%;">
                    
                    <input type="email" name="email" placeholder="Tu Correo Electrónico" required style="flex: 1 1 48%;">
                    <input type="tel" name="telefono" placeholder="Teléfono" required style="flex: 1 1 48%;">
                    
                    <select name="servicio" required style="flex: 1 1 100%;">
                        <option value="">¿Qué servicio te interesa?</option>
                        <option value="Servicio 1">Limpieza de Muros y Estructuras</option>
                        <option value="Servicio 2">Limpieza de ductos y chimeneas</option>
                        <option value="Servicio 3">Limpieza de ventanas y trabajos en alturas</option>
                        <option value="Servicio 4">Limpieza de naves industriales</option>
                        <option value="Servicio 5">Pintura para superficies, fachadas, naves, preparación de superficies</option>
                        <option value="Servicio 6">Impermeabilización</option>
                        <option value="Servicio 7">Trabajos en alturas</option>
                        <option value="Servicio 8">Jardinería y Paisajismo</option>
                        <option value="Servicio 9">Mantenimiento Eléctrico</option>
                        <option value="Servicio 10">Mantenimiento Mécanico</option>
                        <option value="Servicio 11">Mantenimiento Automatización</option>
                        <option value="Servicio 12">Mantenimiento Hidrosanitario</option>
                        <option value="Servicio 13">Illuminación</option>
                        <option value="Servicio 14">Aire Acondicionado y Refrigeración</option>
                        <option value="Servicio 15">Suministro e Instalación de Multimuro, Multipanel y Tablaroca</option>

                    </select>

                    <input type="number" name="colaboradores" placeholder="Número de Colaboradores" required style="flex: 1 1 48%;">
                    
                    <textarea name="mensaje" placeholder="Cuéntanos sobre tu proyecto" style="flex: 1 1 100%; height: 100px;"></textarea>
                </div>
                
                <button type="submit" class="btn-enviar">Enviar</button>
            </form>
        </div>
    </section>

    <div class="certification-logos">
        <img src="imagenes/repse.png" alt="REPSE">
        <img src="imagenes/stps.png" alt="STPS">
        <img src="imagenes/gnp.png" alt="GNP">
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>

