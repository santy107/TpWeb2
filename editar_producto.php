<?php

include 'config.php';


$id_producto = $_POST['id_producto']; 
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$mercado = $_POST['mercado'];
$categoria = $_POST['categoria'];


$sql = "UPDATE descuentos SET producto = ?, precio = ?, mercado = ?, categoria = ? WHERE id_producto = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sdssi", $producto, $precio, $mercado, $categoria, $id_producto);

// ejecutamos la consulta y verificamos si la actualización fue exitosa
if ($stmt->execute()) {
    echo "Producto actualizado exitosamente.";
} else {
    echo "Error al actualizar el producto: " . $conexion->error;
}