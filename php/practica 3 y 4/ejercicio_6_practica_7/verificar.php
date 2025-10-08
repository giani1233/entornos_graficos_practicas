<?php
session_start();
include("conexion.php");

$mail = $_POST['mail'];

$nombres = mysqli_query($conexion, 
    "SELECT nombre FROM alumnos WHERE mail='$mail'")
    or die("Problemas en el select:".mysqli_error($conexion));

if ($nombre = mysqli_fetch_array($nombres)) {
    $_SESSION['nombre'] = $nombre['nombre'];
    echo "<h3>Bienvenido, ".$_SESSION['nombre']."</h3>";
    echo "<a href='bienvenida.php'>Ir a la página de bienvenida</a>";
} else {
    echo "<h3>No se encontró un alumno con ese mail.</h3>";
}

mysqli_close($conexion);
?>
