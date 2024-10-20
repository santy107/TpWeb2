<?php

include 'config.php';

$categoria = $_POST['categoria'];

// Consulta SQL para obtener productos por categoría
$sql = "SELECT id_producto, producto, precio, mercado FROM descuentos WHERE categoria = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $categoria); // la s significa un string 
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<h2>Productos en la categoría: " . htmlspecialchars($categoria) . "</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Producto</th><th>Precio</th><th>Mercado</th></tr>";

    // Mostramos los productos en una tabla
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id_producto'] . "</td>";
        echo "<td>" . $row['producto'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "<td>" . $row['mercado'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron productos para la categoría seleccionada.";
}
?>

