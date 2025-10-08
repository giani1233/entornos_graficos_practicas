<?php
include("conexion.php");

$busqueda = $_POST['cancion'];

$registros = mysqli_query($conexion, 
    "SELECT canciones FROM buscador WHERE canciones LIKE '%$busqueda%'")
    or die("Problemas en el select:".mysqli_error($conexion));

if (mysqli_num_rows($registros) > 0) {
    echo "<h2>Resultados de la búsqueda:</h2>";
    echo "<ul>";
    while ($fila = mysqli_fetch_array($registros)) {
        echo "<li>{$fila['canciones']}</li>";
    }
    echo "</ul>";
} else {
    echo "<h3>No se encontraron canciones que coincidan con '$busqueda'.</h3>";
}

echo "<br><a href='index.php'>🔙 Volver al buscador</a>";

mysqli_close($conexion);
?>
