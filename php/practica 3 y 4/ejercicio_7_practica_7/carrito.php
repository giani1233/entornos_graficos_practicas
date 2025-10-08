<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de compras</title>
</head>
<body>
    <h2>Carrito de compras</h2>

    <?php
    if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
        $total = 0;
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>Producto</th><th>Precio</th></tr>";

        foreach ($_SESSION['carrito'] as $item) {
            echo "<tr>";
            echo "<td>{$item['producto']}</td>";
            echo "<td>$ {$item['precio']}</td>";
            echo "</tr>";
            $total += $item['precio'];
        }

        echo "<tr><td><strong>Total</strong></td><td><strong>$ $total</strong></td></tr>";
        echo "</table>";
        echo "<br><a href='vaciar.php'>Vaciar carrito</a> | <a href='catalogo.php'>Seguir comprando</a>";
    } else {
        echo "<p>El carrito está vacío.</p>";
        echo "<a href='catalogo.php'>Ir al catálogo</a>";
    }
    ?>
</body>
</html>
