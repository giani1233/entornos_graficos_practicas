<html>
    <head>
        <title>Alta Usuario</title>
    </head>
    <body>
        <?php
            include("conexion.php");
            $vCiudad = $_POST['ciudad'];
            $vPais = $_POST['pais'];
            $vHabitantes = $_POST['habitantes'];
            $vSuperficie = $_POST['superficie'];
            $vTieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;
            $vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tiene_metro)
            values ('$vCiudad','$vPais', '$vHabitantes', '$vSuperficie', '$vTieneMetro')";
            mysqli_query($link, $vSql) or die (mysqli_error($link));
            echo("La ciudad fue Registrada con Exito<br>");
            echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
            mysqli_close($link);
        ?>
    </body>
</html>