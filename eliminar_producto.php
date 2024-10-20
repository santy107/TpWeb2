<?php

include 'config.php';
include 'listadeprecios.php';

$id_producto = $_POST['id_producto'];

// Preparar y ejecutar la consulta para eliminar el producto
$sql = "DELETE FROM descuentos WHERE id_producto = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id_producto);

// Ejecutar la consulta y verificar si se eliminó correctamente
if ($stmt->execute()) {
    echo "Producto eliminado exitosamente.";
} else {
    echo "Error al eliminar el producto: " . $conn->error;
}