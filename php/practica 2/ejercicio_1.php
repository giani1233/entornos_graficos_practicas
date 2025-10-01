<?php 
    $destinatario = "example@gmail.com";
    $asunto = "Mail de prueba";
    $cuerpo =   '
                <html>
                    <head>
                        <title>
                            Mail de prueba
                        </title>
                    </head>
                    <body>
                        <h1>
                            Práctica número 5 - PHP
                        </h1>
                        <p>
                            Este es el mail de prueba para la práctica nro 5
                        </p>
                    </body>
                </html>
                ';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: NN <example@gmail.com>\r\n";

    mail($destinatario,$asunto,$cuerpo,$headers)
?>
