<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <a href="index.php">
                <img src="imagenes/cyclo.png" alt="Logo">
            </a>
            <p class="text-white">
                Somos una empresa líder en el sector del mantenimiento industrial, dedicada a brindar soluciones integrales de alta calidad.
            </p>
        </div>
        <div class="footer-info">
            <div class="icon-circle">
                <img src="imagenes/telefono.png" alt="Teléfono">
            </div>
            <h3>TELÉFONO</h3>
            <p class="text-white">+52 866 137 2721</p>
        </div>
        <div class="footer-info">
            <div class="icon-circle">
                <img src="imagenes/u.png" alt="Ubicación">
            </div>
            <h3>UBICACIÓN</h3>
            <p class="text-white">Buenos Aires 102, Col. Guadalupe, Monclova, Coahuila.</p>
        </div>
        <div class="footer-info">
            <div class="icon-circle">
                <img src="imagenes/email.png" alt="Correo">
            </div>
            <h3>CORREO</h3>
            <p class="text-white">administracion@cyclonova.mx</p>
        </div>
    </div>
    <hr>
    <div class="footer-nav">
        <nav>
            <a href="index.php">Inicio</a>
            <a href="conocenos.php">Conócenos</a>
            <a href="servicios.php">Servicios</a>
                <a href="maquinaria.php">Maquinaria</a>
            <a href="catalogo.php">Catálogo</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </div>
    
    <div class="footer-bottom">
        <p>CYCLONOVA © 2025 | Derechos Reservados | Powered by <span>Eduardo</span></p>
    </div>
</footer>

<style>
.footer {
    background-color: #333333 ;
    color: white;
    padding: 40px 0;
    font-family: Arial, sans-serif;
    text-align: center;
}
.footer-container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    max-width: 1200px;
    margin: auto;
}
.footer-logo a {
    display: inline-block;
}
.footer-logo img {
    max-width: 150px;
    cursor: pointer; 
}
.footer-logo p {
    font-size: 14px;
    max-width: 250px;
    margin-top: 10px;
}
.footer-info {
    text-align: center;
}
.icon-circle {
    width: 50px;
    height: 50px;
    background-color: #fff200;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
}
.icon-circle img {
    width: 60%;
    height: auto;
    object-fit: contain;
}
.footer-info h3 {
    color: #fff200;
    margin-top: 10px;
}
.footer-nav nav a {
    color: white;
    margin: 0 10px;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}
.footer-nav nav a:hover {
    color: #fff200; 
}
.footer-button {
    margin-top: 20px;
}
.footer-button a {
    background-color: #FF6600;
    padding: 10px 20px;
    border-radius: 5px;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.footer-bottom {
    margin-top: 20px;
    font-size: 12px;
}
.footer-bottom span {
    color: #FF6600;
}

.text-white {
    color: white;
}

@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 0 20px;
    }

    .footer-logo p {
        max-width: 100%;
    }

    .footer-info {
        margin-top: 20px;
        width: 100%;
    }

    .footer-nav nav {
        flex-direction: column;
        margin-top: 20px;
    }

    .footer-nav nav a {
        display: block;
        margin: 10px 0;
        font-size: 16px;
    }

    .footer-bottom {
        padding: 0 10px;
    }

    .icon-circle {
        width: 45px;
        height: 45px;
    }

    .icon-circle img {
        width: 50%;
    }
}

</style>


