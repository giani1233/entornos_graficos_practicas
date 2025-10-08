<?php

if (isset($_POST["titular"])) {
    $titular = $_POST["titular"];
    setcookie("preferenciaTitular", $titular, time() + (7 * 24 * 60 * 60), "/");
    header("Location: periodico.php");
    exit();
}

if (isset($_COOKIE["preferenciaTitular"])) {
    $titularSeleccionado = $_COOKIE["preferenciaTitular"];
} else {
    $titularSeleccionado = "todos"; 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>📰Periódico</h1>

    <form method="post">
        <p>Seleccione qué tipo de titulares desea ver:</p>
        <label><input type="radio" name="titular" value="politica" <?php if($titularSeleccionado=="politica") echo "checked"; ?>> Noticia política</label><br>
        <label><input type="radio" name="titular" value="economia" <?php if($titularSeleccionado=="economia") echo "checked"; ?>> Noticia económica</label><br>
        <label><input type="radio" name="titular" value="deportes" <?php if($titularSeleccionado=="deportes") echo "checked"; ?>> Noticia deportiva</label><br>
        <label><input type="radio" name="titular" value="todos" <?php if($titularSeleccionado=="todos") echo "checked"; ?>> Mostrar todos</label><br><br>
        <input type="submit" value="Guardar preferencia">
    </form>

    <hr>

    <?php

    if ($titularSeleccionado == "politica" || $titularSeleccionado == "todos") {
        echo "<div class='noticia'><h2>🏛️ Política:</h2><p>El Congreso debate una nueva reforma electoral.</p></div>";
    }

    if ($titularSeleccionado == "economia" || $titularSeleccionado == "todos") {
        echo "<div class='noticia'><h2>💰 Economía:</h2><p>El dólar sufre otro aumento.</p></div>";
    }

    if ($titularSeleccionado == "deportes" || $titularSeleccionado == "todos") {
        echo "<div class='noticia'><h2>⚽ Deportes:</h2><p>La selección Argentina se prepara para una nueva fecha fifa.</p></div>";
    }
    ?>

    <hr>
    <p style="text-align:center;">
        <a href="borrar_cookie.php">Borrar preferencia guardada</a>
    </p>
</body>
</html>
