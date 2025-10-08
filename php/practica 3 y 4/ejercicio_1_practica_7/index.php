<?php
if (isset($_POST['estilo'])) {
    $estilo = $_POST['estilo'];
    setcookie('estiloSeleccionado', $estilo, time() + (7 * 24 * 60 * 60), "/");
    header("Location: index.php");
    exit();
}

if (isset($_COOKIE['estiloSeleccionado'])) {
    $estilo = $_COOKIE['estiloSeleccionado'];
} else {
    $estilo = "claro"; 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="estilos/<?php echo $estilo; ?>.css">
</head>
<body>

    <p>El estilo actual es: <strong><?php echo ucfirst($estilo); ?></strong></p>

    <form method="post">
        <label>Selecciona un estilo:</label><br><br>
        <input type="radio" name="estilo" value="claro" <?php if($estilo=="claro") echo "checked"; ?>> Claro<br>
        <input type="radio" name="estilo" value="oscuro" <?php if($estilo=="oscuro") echo "checked"; ?>> Oscuro<br>
        <input type="radio" name="estilo" value="colorido" <?php if($estilo=="colorido") echo "checked"; ?>> Colorido<br><br>
        <input type="submit" value="Guardar estilo" id="submit">
    </form>

    <hr>
    <p><a href="index.php">Recargar página</a></p>
</body>
</html>
