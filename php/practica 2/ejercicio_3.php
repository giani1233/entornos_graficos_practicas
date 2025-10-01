<?php
    $fecha = date("d-m-Y");
    $hora = date("H :i:s");
    $destino = $_POST['email_amigo'];
    $asunto = "Recomendación ";
    $desde = 'From:' .$_POST['email'];
    $comentario =   "
                    Tu amigo $_POST[nombre] te recomienda este sitio.
                    ";
    mail($destino,$asunto,$comentario,$desde);
    echo "Su recomendación ha sido enviada, en breve recibirá nuestra
    respuesta.";
?>