<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    $op = $_GET["op"];
    switch($op){
        case "alta":
            $contenido = "php/alta-contacto.php";
            $titulo = "Alta de contacto";
        break;
        case "baja":
            $contenido = "php/baja-contacto.php";
            $titulo = "Baja de contacto";
        break;
        case "cambios":
            $contenido = "php/cambios-contacto.php";
            $titulo = "Cambios a contacto";
        break;
        case "consultas":
            $contenido = "php/consultas-contacto.php";
            $titulo = "consulta de contactos";
        break;
        default:
            $contenido = "php/home.php";
            $titulo = "Mis contactos v1";
        break;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo;?></title>
    <link rel="stylesheet" href="css/mis-contactos.css" />
    <script src="js/mis-contactos.js"></script>
</head>
<body>
    <section id="contenido">
        <nav>
            <ul>
                <li> <a class="cambio" href="index.php">Home</a></li>
                <li> <a class="cambio" href="?op=alta">Alta de Contacto</a></li>
                <li> <a class="cambio" href="?op=baja">Baja de contacto</a></li>
                <li> <a class="cambio" href="?op=cambios">Cambios de contacto</a></li>
                <li> <a class="cambio" href="?op=consultas">Consultas de contacto</a></li>
            </ul>
        </nav>
        <section id="principal">
            <?php
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
             include($contenido);?>
        </section>
    </section>
</body>
</html>