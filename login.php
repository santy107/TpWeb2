<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="login-container">
        <h2>Iniciar sesión como Administrador</h2>
        
        <form action="entrada.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br>
        <label for="contra">Contraseña:</label>
        <input type="password" name="contra" id="contra" required><br>
        <button type="submit">Iniciar sesión</button>
    </form>
    </div>
</body>
</html>