<?php
session_start();
unset($_SESSION['carrito']);
echo "<h3>Carrito vaciado correctamente.</h3>";
echo "<a href='catalogo.php'>Volver al catálogo</a>";
?>
