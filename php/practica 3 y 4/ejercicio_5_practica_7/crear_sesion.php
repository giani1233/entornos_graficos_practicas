<?php
session_start(); 

if (isset($_POST["usuario"]) && isset($_POST["clave"])) {

    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["clave"] = $_POST["clave"];

    echo "<h1>Variables de sesión creadas</h1>";
    echo "<p>La sesión se ha iniciado correctamente.</p>";
    echo "<a href='mostrar_sesion.php'>Ir a la tercera página</a>";
} else {
    echo "<p>No se recibieron datos del formulario.</p>";
    echo "<a href='login.php'>Volver al formulario</a>";
}
?>
