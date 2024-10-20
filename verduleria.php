<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
    <title>Central de descuentos / Verduleria</title>
</head>
<body>
    <!-- ENCABEZADO -->
    <header id="header">
        <div>
            <img id="header-btn-menudesplegable" src="imagenes/menudesplegable-img.png"> 
            <nav id="header-side-menudesplegable">
                <ul>
                    <li>
                        <h1>Categorías</h1>
                        <ul>
                            <li><a href="panaderia.php">Panaderia</a></li>
                            <li><a href="carniceria.php">Carniceria</a></li>
                            <li><a href="verduleria.php">Verduleria</a></li>
                        </ul>
                    </li>
                    <li><a href="listadeprecios.php">Lista de precios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
            <nav id="header-desktop">
                <div>
                    <h1>Categorias</h1>
                </div>
                <ul>
                    <li><a href="panaderia.php">Panaderia</a></li>
                    <li><a href="carniceria.php">Carniceria</a></li>
                    <li><a href="verduleria.php">Verduleria</a></li>
                    
                </ul>
                <ul>
                    <li><a href="listadeprecios.php">Lista de precios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
                </ul>
            </nav>
        </div>
        <div id="header-marca">
            <div id="header-marca-contenido">
                <a href="index.php">
                    <img id="marca-contenido-img" src="imagenes/logo.png" alt="logo de la empresa">
                    <span>Central de descuentos</span>
                </a>
            </div>
        </div>
        <div><a href="login.php"> Acceso administradores </a></div>
        <div id="header-tema-contenido">
            <div class="header-tema-contenido-btn" id="header-tema-contenido-btn"></div> 
        </div>
    </header>

    <h1>Productos de Verduleria</h1>
<?php

    include 'config.php';

    $sql = "SELECT id_producto, producto, precio, imagen FROM descuentos WHERE categoria = 'verduleria'";
    $result = $conexion->query($sql);
    
    if ($result->num_rows > 0) {
        // Generar HTML dinámicamente con los productos
        while ($row = $result->fetch_assoc()) {
            echo '<div class="producto">';
            echo '<a href="producto_detalle.php?id_producto=' . htmlspecialchars($row['id_producto']) . '">';
            echo '<img src="imagenes/' . htmlspecialchars($row['imagen']) . '" alt="' . htmlspecialchars($row['producto']) . '">';
            echo '</a>';
            echo '<div class="info">';
            echo '<span>' . htmlspecialchars($row['producto']) . ' - $' . htmlspecialchars($row['precio']) . '</span>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No hay productos disponibles en la categoría Carnicería.";
    }

?> 


    <!-- PIE DE PAGINA -->
    <?php
    include 'template/footer.php';