<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Recuperación de variables de sesión</h1>

    <?php
    if (isset($_SESSION["usuario"]) && isset($_SESSION["clave"])) {
        echo "<p>Usuario almacenado: <strong>" . $_SESSION["usuario"] . "</strong></p>";
        echo "<p>Clave almacenada: <strong>" . $_SESSION["clave"] . "</strong></p>";
    } else {
        echo "<p>No hay variables de sesión activas.</p>";
    }
    ?>

    <hr>
    <a href="login.php">Volver al inicio</a><br>
</body>
</html>
