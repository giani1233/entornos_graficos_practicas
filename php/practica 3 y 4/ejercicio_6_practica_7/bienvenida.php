<?php
session_start();

if (isset($_SESSION['nombre'])) {
    echo "<h2>Bienvenido nuevamente, ".$_SESSION['nombre']."</h2>";
    echo "<a href='cerrar_sesion.php'>Cerrar sesión</a>";
} else {
    echo "<h3>No puede acceder a esta página sin iniciar sesión.</h3>";
    echo "<a href='formulario.php'>Volver al formulario</a>";
}
?>
