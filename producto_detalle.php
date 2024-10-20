<?php

include 'config.php';

if (isset($_GET['id_producto'])) {
    $id_producto = intval($_GET['id_producto']);

    // Consultamos para obtener los detalles del producto con ese id,
    $sql = "SELECT producto, precio, imagen, mercado, categoria FROM descuentos WHERE id_producto = ?";
    
   
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_producto);  // "i" indica que el parámetro es un número entero
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Mostramos los detaalles del producto
        while ($row = $result->fetch_assoc()) {
            echo '<h1>' . htmlspecialchars($row['producto']) . '</h1>';
            echo '<img src="imagenes/' . htmlspecialchars($row['imagen']) . '" alt="' . htmlspecialchars($row['producto']) . '">';
            echo '<p>Precio: $' . htmlspecialchars($row['precio']) . '</p>';
            echo '<p>Mercado: ' . htmlspecialchars($row['mercado']) . '</p>';
            echo '<p>Categoría: ' . htmlspecialchars($row['categoria']) . '</p>';
        }
    } else {
        echo "Producto no encontrado.";
    }

    $stmt->close();
} else {
    echo "ID de producto no proporcionado.";
}