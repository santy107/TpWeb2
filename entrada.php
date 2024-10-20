<?php

$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "lista";


$conexion = new mysqli($servername, $username, $password, $dbname);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}else{
    echo "conexion exitosa";
}
//Agarramos los datos del formulario
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];




$sql = "SELECT * FROM login WHERE usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($contra, $row['contra'])) {
        echo "Login exitoso. ¡Bienvenido " . htmlspecialchars($usuario) . "!";
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}
