<?php
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $correo = $_POST['email'];
 $mensaje = $_POST['comentario'];
 $acuerdo = $_POST['deacuerdo'];
 $headers = "From:" .$correo ."\r\n";
 $headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";

//  mail('peter.rabinowitsch@gmail.com', 'contacto desde mi formulario', $mensaje, $headers);

 echo ' $nombre <p> El mensaje se a enviado correctamente</p>'
?>

