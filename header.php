<?php

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';


if ($lang !== 'es' && $lang !== 'en') {
    $lang = 'es';
}

include("lang/$lang/header.php"); 
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: white; 
            color: black; 
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            background: #333333;
            border-bottom: 2px solid yellow;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo a {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo img {
            height: 170px;
            margin-right: 15px;
            width: 200px;
        }

        .brand {
            color: yellow;
            font-size: 20px;
            font-weight: bold;
        }

        nav {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 12px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease-in-out;
        }

        nav ul li a.active,
        nav ul li a:hover {
            color: yellow;
        }

        .language-selector {
            margin-left: 20px;
        }

        .language-selector select {
            background-color: #333333;
            color: white;
            font-size: 16px;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px 15px;
            }

            .logo {
                justify-content: center;
                width: 100%;
            }

            .logo img {
                height: auto;
                width: 150px;
            }

            nav {
                width: 100%;
                margin-top: 10px;
            }

            nav ul {
                flex-direction: column;
                width: 100%;
            }

            nav ul li {
                margin: 8px 0;
                text-align: center;
            }

            nav ul li a {
                font-size: 20px;
                display: block;
                padding: 10px 0;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php?lang=<?php echo $lang; ?>">
                <img src="imagenes/cyclo.png" alt="Cyclonova Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php?lang=<?php echo $lang; ?>"><?php echo $lang_header['inicio']; ?></a></li>
                <li><a href="conocenos.php?lang=<?php echo $lang; ?>"><?php echo $lang_header['conocenos']; ?></a></li>
                <li><a href="servicios.php?lang=<?php echo $lang; ?>"><?php echo $lang_header['servicios']; ?></a></li>
                   <li><a href="maquinaria.php?lang=<?php echo $lang; ?>"><?php echo $lang_header['maquinaria']; ?></a></li>
                <li><a href="catalogo.php?lang=<?php echo $lang; ?>"><?php echo $lang_header['catalogo']; ?></a></li>
                <li><a href="contacto.php?lang=<?php echo $lang; ?>"><?php echo $lang_header['contacto']; ?></a></li>
            </ul>
        </nav>

        <!-- Selector de idioma -->
        <div class="language-selector">
            <form action="" method="GET">
                <select name="lang" onchange="this.form.submit()">
                    <option value="es" <?php if ($lang == 'es') echo 'selected'; ?>>Español</option>
                    <option value="en" <?php if ($lang == 'en') echo 'selected'; ?>>English</option>
                </select>
            </form>
        </div>
    </header>
</body>
</html>

