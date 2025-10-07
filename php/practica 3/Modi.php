    <head>
        <title>Modificacion</title>
    </head>
    <body>
        <?php
            include ("conexion.php");
            $vCiudad = $_POST['ciudad'];
                        $vPais = $_POST['pais'];
                        $vHabitantes = $_POST['habitantes'];
                        $vSuperficie = $_POST['superficie'];
                        $vTieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;
            $vSql = "UPDATE ciudades set pais='$vPais', habitantes='$vHabitantes', superficie='$vSuperficie', tieneMetro='$vTieneMetro' where ciudad='$vCiudad'";
            mysqli_query($link,$vSql) or die (mysqli_error($link));
            echo("La Ciudad fue Modificada<br>");
            echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
            mysqli_close($link);
        ?>
    </body>
</html>