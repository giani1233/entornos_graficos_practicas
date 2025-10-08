<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso de alumno</title>
</head>
<body>
    <h2>Ingresar mail del alumno</h2>
    <form action="verificar.php" method="post">
        <label for="mail">Mail:</label>
        <input type="email" name="mail" id="mail" required>
        <br><br>
        <input type="submit" value="Verificar alumno">
    </form>
</body>
</html>
