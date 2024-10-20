<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
    <title>Central de descuentos / Lista de precios</title>
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
                    <li><a href="listadeprecios.html">Lista de precios</a></li>
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
                    <li><a href="listadeprecios.html">Lista de precios</a></li>
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
    <div id="listadeprecios">
        <div id="listadeprecios-btn">
            <button id="listadeprecios-btn-exportar">Exportar como pdf</button>
        </div>
        
        <?php

        include "config.php";

$sql = "SELECT id_producto, producto, precio, mercado, categoria FROM descuentos";
$result = mysqli_query($conexion, $sql);


if (mysqli_num_rows($result) > 0) {
    echo "<table>
            <tr>
                <th>ID Producto</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Mercado</th>
                <th>Categoria</th>
            </tr>";

    // muestro los datos en filas
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['id_producto'] . "</td>
                <td>" . $row['producto'] . "</td>
                <td>" . $row['precio'] . "</td>
                <td>" . $row['mercado'] . "</td>
                <td>" . $row['categoria'] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron registros.";
}
?>
        <h2>Agregar un Producto</h2>

        <form action="agregar_producto.php" method="POST">
            <label for="producto">Nombre del Producto:</label>
            <input type="text" id="producto" name="producto" required>
    
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" required>
    
            <label for="mercado">Mercado:</label>
            <input type="text" id="mercado" name="mercado" required>

            <label for="categoria">categoria:</label>
            <input type="text" id="categoria" name="categoria" required>

            <input type="submit" value="Agregar Producto">
        </form>
        

        <h1>Eliminar Producto</h1>
        <form action="eliminar_producto.php" method="POST">
            <label for="id_producto">ID del Producto a eliminar:</label>
            <input type="number" name="id_producto" id="id_producto" required>
            <button type="submit">Eliminar</button>
        </form>

        <h1>Editar Producto</h1>
    <form action="editar_producto.php" method="POST">
        <label for="id_producto">ID del Producto a editar:</label>
        <input type="number" name="id_producto" id="id_producto" required><br>

        <label for="producto">Nombre del Producto:</label>
        <input type="text" name="producto" id="producto" required><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" id="precio" required><br>

        <label for="mercado">Mercado:</label>
        <input type="text" name="mercado" id="mercado" required><br>

        <label for="categoria">Categoría:</label>
        <input type="text" name="categoria" id="categoria" required><br>

        <button type="submit">Editar Producto</button>
    </form>

    <form action="mostrarXcategoria.php" method="POST">
        <label for="categoria">Seleccionar Categoría:</label>
        <select name="categoria" id="categoria" required>
            <option value="">Selecciona una categoría</option>
            <option value="carnicería">carniceria</option>
            <option value="verduleria">verduleria</option>
            <option value="panaderia">panaderia</option>
        </select>
        <br>
        <button type="submit">Mostrar Productos</button>
    </form>
    
    </div>
    <!-- PIE DE PAGINA -->
    <?php
    include 'template/footer.php';