<?php
session_start();
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Productos</title>
</head>
<body>
    <h2>Catálogo de Productos</h2>
    <table border="1" cellpadding="10">
        <tr><th>Producto</th><th>Precio</th><th>Acción</th></tr>
        <?php
        $registros = mysqli_query($conexion, "SELECT * FROM catalogo");
        while ($fila = mysqli_fetch_array($registros)) {
            echo "<tr>";
            echo "<td>{$fila['producto']}</td>";
            echo "<td>$ {$fila['precio']}</td>";
            echo "<td><a href='agregar.php?id={$fila['id']}'>Agregar al carrito</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br>
    <a href="carrito.php">Ver carrito</a>
</body>
</html>
