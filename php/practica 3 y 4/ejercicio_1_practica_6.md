Para inicializar esta conexión, PHP ofrece la función: mysqli_connect()

Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios: host, nombre de usuario, contraseña

Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función: mysqli_select_db()

Esta función debe pasar como parámetro: el nombre de la conexión, el nombre de la base de datos

La función mysqli_query () se utiliza para: Realizar una consulta SQL

y requiere como parámetros: nombre de la conexión, texto de la consulta

La cláusula or die() se utiliza para: Capturar un error en la base

y la función mysqli_error () se puede usar para: Devolver el último mensaje de error

Código explicado:
    $vResultado tiene asignado los valores retornados de una consulta
    El código trae filas de $vResultado y las asigna a la variable $fila hasta que no haya mas filas
    Arma una tabla html y a cada fila le asigna las posiciones 1, 2 y 3 de la variable $fila
    Luego al terminar el bucle libera la memoria ocupada por la variable $vResultado y cierra la conexión con la base de datos