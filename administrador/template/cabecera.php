<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/sitioweb" ?>

    <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">
        <div class="nav navbar-nav">
                <a class="nav-item nav-link" href="#">Administrador del sitio web</a>
                <a class="nav-item nav-link" href="<?php $url;?>/administrador/inicio.php">Inicio</a>

                <a class="nav-item nav-link" href="<?php $url;?>/administrador/seccion/productos.php">Libros</a>
                <a class="nav-item nav-link" href="<?php $url;?>/administrador/seccion/cerrar.php">Cerrar</a>
                
                <a class="nav-item nav-link" href="<?php echo $url;?>"> Ver sitio web </a>
        </div>
    </nav>

    <div class="container">
    </br>
        <div class="row"></div>