<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <h2>Formulario de ingreso</h2>

    <form method="post" action="crear_sesion.php">
        <label for="usuario">Nombre de usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="clave">Clave:</label><br>
        <input type="password" id="clave" name="clave" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
