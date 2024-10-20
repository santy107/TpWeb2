<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
    <title>Central de descuentos</title>
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
                    <li><a href="contacto.html">Contacto</a></li>
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
                <a href="index.html">
                    <img id="marca-contenido-img" src="imagenes/logo.png" alt="logo de la empresa">
                    <span>Central de descuentos</span>
                </a>
            </div>
        </div>
        
        <div>
        <div><a href="login.php"> Acceso administradores </a></div>
        </div>
        
        <div id="header-tema-contenido">
            <div class="header-tema-contenido-btn" id="header-tema-contenido-btn"></div> 
        </div>
    </header>
    <!-- CONTENIDO PRINCIPAL -->
    <div id="contenidoprincipal">
        <!-- DESTACADOS -->
        <article id="contenidoprincipal-img">
            <img 
            id="contenidoprincipal-img-descuentos" 
            src="imagenes/contenidoprincipal-destacados-img.jpg" 
            alt="Imagen de descuentos destacados">
        </article>
        <!-- SUPERMERCADOS -->
        <div id="contenidoprincipal-supermercados">
            <img  id="contenidoprincipal-supermercado-logos" src="imagenes/vea.jpeg" alt="">
            <img  id="contenidoprincipal-supermercado-logos" src="imagenes/diarco.jpeg" alt="">
            <img  id="contenidoprincipal-supermercado-logos" src="imagenes/carrefour.jpeg" alt="">
            <img  id="contenidoprincipal-supermercado-logos" src="imagenes/dia.jpeg" alt="">
            <img  id="contenidoprincipal-supermercado-logos" src="imagenes/monarca.png" alt="">
        </div>
        <!-- OFERTAS -->
        <div id="contenidoprincipal-ofertas">
            <div id="contenidoprincipal-ofertas-item1">
                <img 
                src="imagenes/contenidoprincipal-ofertas-item1-img.jpg" 
                id="contenidoprincipal-ofertas-items">
            </div>
            <div id="contenidoprincipal-ofertas-item2">
                <div>
                    <img 
                    src="imagenes/contenidoprincipal-ofertas-item2-img1.jpg" 
                    id="contenidoprincipal-ofertas-items">
                </div>
                <div>
                    <img 
                    src="imagenes/contenidoprincipal-ofertas-item2-img2.jpg" 
                    id="contenidoprincipal-ofertas-items">
                </div>
                <div>
                    <img 
                    src="imagenes/contenidoprincipal-ofertas-item2-img3.jpg" 
                    id="contenidoprincipal-ofertas-items">
                </div>
                <div>
                    <img 
                    src="imagenes/contenidoprincipal-ofertas-item2-img2.jpg" 
                    id="contenidoprincipal-ofertas-items">
                </div>
            </div>        
        </div>
    </div>
    <!-- PIE DE PAGINA -->
    <footer id="footer">
        <div> 
            <?php
            $autores = ["Santiago Zin", "Jose Otonello"];
            foreach ($autores as $autor) {
                echo "<p>$autor</p>";
            }
            ?>
        </div>
        <div>
            <a href="index.php">
                <img id="marca-contenido-img" src="imagenes/logo.png" alt="logo de la empresa">
                <span>Central de descuentos</span>
            </a>
        </div>
        <p>Tandil</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>