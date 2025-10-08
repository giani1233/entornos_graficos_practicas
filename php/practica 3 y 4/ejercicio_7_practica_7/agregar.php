<?php
session_start();
include("conexion.php");

$id = $_GET['id'];

$reg = mysqli_query($conexion, "SELECT * FROM catalogo WHERE id=$id");
if ($producto = mysqli_fetch_array($reg)) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }
    $_SESSION['carrito'][] = array(
        'producto' => $producto['producto'],
        'precio' => $producto['precio']
    );
    echo "<h3>Se agregó '{$producto['producto']}' al carrito.</h3>";
    echo "<a href='catalogo.php'>Volver al catálogo</a> | ";
    echo "<a href='carrito.php'>Ir al carrito</a>";
} else {
    echo "Producto no encontrado.";
}
?>
