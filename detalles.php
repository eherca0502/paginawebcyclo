<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Servicio</title>
    <style>
        .service-details {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service-details img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
        }

        .service-details h1 {
            font-size: 2em;
            margin-top: 20px;
            text-align: center;
        }

        .service-details p {
            font-size: 1.1em;
            color: #555;
            margin-top: 10px;
            text-align: justify;
            line-height: 1.6;
        }

        .buttons-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .back-btn, .whatsapp-btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .back-btn {
            background: #007BFF;
        }

        .back-btn:hover {
            background: #0056b3;
        }

        .whatsapp-btn {
            background: #25D366;
        }

        .whatsapp-btn:hover {
            background: #1ebe57;
        }

        .whatsapp-btn img {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }
    </style>
</head>
<body>

<?php

$servicios = [
    "Limpieza de muros y estructuras" => ["limpiezae.jpg", "Nuestro equipo de expertos en limpieza industrial se especializa en devolverle vida a tus muros y estructuras. Con técnicas avanzadas y productos especializados, eliminamos eficientemente polvos, cochambre, óxidos, telarañas y químicos que se acumulan con el tiempo. Tu infraestructura lucirá impecable, mejorando la apariencia estética y promoviendo un ambiente más seguro y saludable para tu personal. Confía en nosotros para brindarte resultados de calidad y atención a los detalles inigualables."],
    "Limpieza de ventanas y alturas" => ["limpiezav.jpg", "En nuestra empresa, comprendemos la importancia de mantener tus ventanas y espacios en altura impecables. Nuestro equipo de limpieza está equipado con equipos de ascensos y descensos, y utiliza plataformas articuladas para llegar a los espacios de difícil acceso. Realizamos limpiezas eficientes y meticulosas, garantizando resultados impecables y una mejora en la apariencia y luminosidad de tus instalaciones. Confía en nosotros para brindarte servicios de limpieza en altura de primera calidad."],
    "Limpieza de ductos y chimeneas" => ["limpieza d.png", "Nuestro equipo de expertos en limpieza de ductos y chimeneas está preparado para resolver cualquier desafío. Ingresamos a los ductos con equipos de ascensos y descensos, permitiéndonos realizar reparaciones y eliminar eficientemente cualquier acumulación de materias provenientes de los procesos. Con nuestra experiencia y atención meticulosa a los detalles, te aseguramos un funcionamiento óptimo y una mejora en la eficiencia de tus sistemas de ventilación."],
    "Limpieza de naves industriales" => ["limpiezani.png", "Nuestro equipo especializado en limpieza de naves industriales está listo para devolverle a tus instalaciones un aspecto impecable. Realizamos el retiro de polvos, telarañas, cochambre y cualquier contaminación presente en las superficies de tus naves. Con técnicas y productos específicos para cada tipo de superficie, garantizamos una limpieza exhaustiva y una mejora en la higiene y seguridad de tu entorno de trabajo. Confía en nuestra experiencia para mantener tus naves en condiciones óptimas."],
    "Pintura para superficies, fachadas, naves, preparación de superficies" => ["pintura.png", "En nuestra empresa, nos especializamos en pintura para diversas superficies, fachadas y naves industriales. Nuestro enfoque se basa en la preparación meticulosa de las superficies para garantizar una aplicación de pintura o recubrimiento correcta y duradera. Utilizamos medios manuales y herramientas adecuadas, y contamos con maquinaria, como pistolas de pintura, que nos permite ofrecerte resultados eficientes y de alta calidad en tiempo récord. Confía en nosotros para transformar tus superficies con una capa de pintura impecable y duradera."],
    "Impermeabilización" => ["im.jpg", "En nuestra empresa, te ofrecemos servicios especializados de impermeabilización para proteger tus estructuras de filtraciones de agua o químicos. Utilizamos productos y membranas de las mejores marcas del mercado y nos aseguramos de preparar adecuadamente las superficies para una correcta aplicación. Nuestro objetivo es brindarte soluciones duraderas y efectivas que eviten daños y mantengan sus estructuras seguras. Confía en nuestra experiencia y conocimientos para solucionar tus problemas de impermeabilización."],
    "Trabajos en alturas" => ["Imagen2.png", "En nuestra empresa, contamos con un equipo de personal certificado y capacitado para realizar trabajos en alturas. Atendemos solicitudes especiales que requieren conocimientos y técnicas específicas, como limpieza, mantenimiento y aplicaciones de pintura en lugares de difícil acceso. Nuestro enfoque se basa en garantizar la seguridad de nuestro personal y cumplir con los más altos estándares de calidad en cada tarea. Confía en nosotros para realizar trabajos en alturas de manera eficiente y segura, brindándote resultados excepcionales."],
    "Jardinería y Paisajismo" => ["j.jpg", "En nuestra empresa, comprendemos el impacto que la naturaleza puede tener en el entorno y la imagen de tu espacio. Ofrecemos servicios de jardinería y paisajismo para embellecer tus instalaciones y crear ambientes agradables y acogedores. Nuestro equipo de expertos en diseño y cuidado de jardines se encarga de la planificación, selección de plantas y elementos decorativos, y mantenimiento adecuado. Confía en nosotros para crear un entorno verde que proyecte la imagen deseada y proporcione un ambiente agradable a tus clientes y empleados."],
    "Limpieza y sanitación de tanques y silos" => ["limpiezas.jpg", "En nuestra empresa, brindamos servicios profesionales de limpieza y sanitización de tanques y silos industriales. Nuestro personal altamente capacitado ingresa a estos espacios utilizando técnicas de ingreso como el rapel y equipos de respiración autónoma. Realizamos limpieza exhaustiva y mantenimiento en base a los más altos estándares de calidad y seguridad. Nos adaptamos a las necesidades de cada cliente y garantizamos resultados óptimos en la limpieza y sanitización de tanques y silos. Confía en nuestra experiencia y enfoque especializado para mantener tus instalaciones en óptimas condiciones."],
    "Mantenimiento Eléctrico" => ["electrico.jpg", "Diagnóstico, reparación y optimización de instalaciones eléctricas de baja y media tensión. Cumplimiento con normativas (NOM, STPS) y reducción de riesgos.

Inspección termográfica
Balanceo de cargas y corrección de factor de potencia
Mantenimiento a plantas de emergencia y UPS
Revisión y ajuste de tableros de distribución
Detección de fallas y cortocircuitos
"],
    "Mantenimiento Mécanico" => ["mecanico.jpg", "Mantenimiento integral de maquinaria para prolongar su vida útil y evitar fallas críticas.

Motores, bombas, compresores y sistemas de transmisión
Diagnóstico de vibraciones y alineación de ejes
Reemplazo de partes y componentes
Planes preventivos y predictivos
Lubricación industrial de precisión
"],
    "Mantenimiento Automatización" => ["automatizacion.jpg", "Sistemas inteligentes para monitorear y controlar procesos industriales en tiempo real.

Programación de PLCs y configuración de sensores
Desarrollo de interfaces HMI y SCADA
Integración de sistemas y mejora de procesos
Soporte técnico y actualizaciones
"],
    "Mantenimiento Hidrosanitario" => ["hidrosanitario.jpg", "Evita fugas, obstrucciones y daños estructurales con un sistema hidrosanitario en óptimas condiciones.

Redes de agua potable, pluviales y sanitarias
Detección de fugas y reparación
Limpieza y desazolve de tuberías
Mantenimiento a sistemas de bombeo y cisternas
Reemplazo de válvulas y conexiones
"],
    "Iluminación" => ["iluminacion.jpg", "Diseño, instalación y mantenimiento de sistemas de iluminación eficientes y seguros.

Iluminación interior y exterior
Reemplazo de lámparas, luminarias y balastros
Iluminación de emergencia y señalización
Diseños para ahorro energético
Sistemas automatizados de control lumínico
"],
    "Aire Acondicionado y Refrigeración" => ["aire.jpg", "En CYCLONOVA Construction, ofrecemos soluciones avanzadas en aire acondicionado para entornos empresariales e industriales, combinando tecnología de punta con eficiencia energética y compromiso ambiental. Nos especializamos en sistemas centrales de gran capacidad, así como en mini splits frío/calor inverter, ideales para espacios que requieren climatización precisa y sustentable.
Brindamos un servicio integral de mantenimiento predictivo, preventivo, proactivo y correctivo, además de pólizas personalizadas y seguros contra fallas, asegurando el funcionamiento continuo y eficiente de tus sistemas.
"],
"Suministro e Instalación de Multimuro, Multipanel y Tablaroca" => ["multi.jpg", "Somos especialistas en la construcción de espacios eficientes y funcionales mediante la instalación profesional de paneles tipo multimuro, multipanel y sistemas de tablaroca.

Multimuro y Multipanel: Utilizamos paneles de alta calidad con aislamiento térmico y acústico, ideales para dividir áreas, controlar temperatura y mejorar la eficiencia energética de tus instalaciones. Son resistentes, duraderos y cumplen con las normas industriales más exigentes.

Tablaroca: Ofrecemos soluciones ligeras y versátiles para la creación de muros interiores, plafones y detalles arquitectónicos, con acabados limpios y profesionales, adaptados a oficinas, plantas industriales y comercios.

Cada proyecto se entrega con garantía de calidad, supervisión técnica especializada y materiales certificados. Nos encargamos de todo el proceso: desde el suministro hasta la instalación, asegurando un trabajo puntual, limpio y con resultados estéticos y funcionales.
"],
];


$servicioSeleccionado = isset($_GET['servicio']) ? urldecode($_GET['servicio']) : null;

if ($servicioSeleccionado && isset($servicios[$servicioSeleccionado])) {
    $imagen = $servicios[$servicioSeleccionado][0];
    $descripcion = $servicios[$servicioSeleccionado][1];
} else {
    $servicioSeleccionado = "Servicio no encontrado";
    $imagen = "placeholder.jpg"; 
    $descripcion = "El servicio seleccionado no está disponible en nuestro catálogo.";
}
?>

<div class="service-details">
    <img src="imagenes/<?php echo $imagen; ?>" alt="<?php echo $servicioSeleccionado; ?>">
    <h1><?php echo $servicioSeleccionado; ?></h1>
    <p><?php echo $descripcion; ?></p>

    <div class="buttons-container">
        <a href="catalogo.php" class="back-btn">Volver al Catálogo</a>
        <a href="https://wa.me/+528661372721?text=Hola,%20estoy%20interesado%20en%20el%20servicio%20de%20<?php echo urlencode($servicioSeleccionado); ?>" class="whatsapp-btn" target="_blank">
            <img src="imagenes/wapp.png.ico" alt="WhatsApp"> WhatsApp
        </a>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
