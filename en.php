<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $mensaje = $_POST['comentario'];
    $headers = "From: " . $correo . "\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    mail('cesar.astorga@ymail.com', 'contacto desde mi formulario',$mensaje, $headers);

    echo '<p>El mensaje se a enviado correctamente</p>'

?>