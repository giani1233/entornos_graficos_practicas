<?php

if (isset($_POST["nombre"])) {
    $nombre = trim($_POST["nombre"]);

    if ($nombre !== "") {
        setcookie("usuario", $nombre, time() + (30 * 24 * 60 * 60), "/");
        header("Location: ejercicio_3_practica_7.php");
        exit();
    } else {
        $mensaje = "Por favor, ingresa un nombre válido.";
    }
}

$usuarioGuardado = isset($_COOKIE["usuario"]) ? $_COOKIE["usuario"] : "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>

    <?php if ($usuarioGuardado): ?>
        <p>¡Bienvenido de nuevo, <?php echo $usuarioGuardado; ?>!</p>
    <?php else: ?>
        <p>Bienvenido. Aún no has guardado un nombre de usuario.</p>
    <?php endif; ?>

    <?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>

    <form method="post">
        <label for="nombre">Nombre de usuario:</label><br><br>
        <input type="text" id="nombre" name="nombre" value="<?php echo $usuarioGuardado ?>">
        <br><br>
        <input type="submit" value="Guardar nombre">
    </form>

    <hr>
    <a href="ejercicio_3_practica_7.php">Recargar página</a> |
    <a href="ejercicio_3_practica_7.php?borrar=1">Borrar cookie</a>
</body>
</html>

<?php
if (isset($_GET["borrar"])) {
    setcookie("usuario", "", time() - 3600, "/");
}
?>
