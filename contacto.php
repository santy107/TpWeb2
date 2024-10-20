<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
    <title>Central de descuentos / Contacto</title>
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
    <div>
        <div id="contenedor-tituloContacto"> 
            <h1 id="titulo-contacto">Contacto para ofertas</h1>
        </div>

        <form id="formulario-contacto">
            <div>
                <label for="nombre">nombre</label>
                <input id="nombre" type="text" required> 
            </div>
            <div>
                <label for="numero-telefono">telefono</label>
                <input id="numero-telefono" type="number" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" required>
            </div>
            <div id="captcha"></div>
            <div id="mensaje" class="mensajes"></div>
            <div>
                <input id="usuario-input" type="text" placeholder="Ingrese los números" required />
                <button id="btn-submit">Verificar</button>
            </div>
            <input id="enviar" type="submit">
        </form>
    </div>
    
    <!-- PIE DE PAGINA -->
    <?php
    include 'template/footer.php';