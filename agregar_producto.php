<?php

include "config.php";
include "listadeprecios.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // Recibimos los valores del formulario
    $producto = mysqli_real_escape_string($conexion, $_POST['producto']);
    $precio = mysqli_real_escape_string($conexion, $_POST['precio']);
    $mercado = mysqli_real_escape_string($conexion, $_POST['mercado']);
    $categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);
   
    // consultr SQL para insertar los datos en la tabla 
    $sql = "INSERT INTO descuentos (producto, precio, mercado, categoria) VALUES ('$producto', '$precio', '$mercado', '$categoria')";

    // con if verificamos si fue agregado o no
    if (mysqli_query($conexion, $sql)) {
        echo "Producto agregado exitosamente.";
    } else {
        echo "Error al agregar el producto: " . mysqli_error($conexion);
    }}