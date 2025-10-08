<?php

if (isset($_COOKIE["contador_visitas"])) {
    $contador = $_COOKIE["contador_visitas"] + 1;
    $mensaje = "Has visitado esta página <strong>$contador</strong> veces.";
} else {
    $contador = 1;
    $mensaje = "Esta es tu primera visita a esta página.";
}

setcookie("contador_visitas", $contador, time() + (30 * 24 * 60 * 60), "/");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
    <p><?php echo $mensaje; ?></p>

    <hr>
    <a href="ejercicio_2_practica_7.php">Actualizar / Volver a visitar</a>
    <br><br>
    <a href="ejercicio_2_practica_7.php?borrar=1">Borrar cookie</a>
</body>
</html>

<?php
if (isset($_GET['borrar'])) {
    setcookie("contador_visitas", '', time() - 3600, '/');
}
?>
