<?php

$para = '2.0adrh@gmail.com';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

/*$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";*/

$contenido = "Este mensaje fue enviado por: " . $nombre " \r\n";
$contenido .= "Su e-mail es: " $correo . " \r\n";
$contenido .= "telefono :" $telefono . "\r\n";
$contenido .= "Mensaje: " $mensaje . " \r\n";
$contenido .= "Enviado el " . date('d/m/Y', time());


$asunto = 'Contacto';

mail($para, $asunto, utf8_decode($contenido));
/*, $header*/
echo 'Mensaje enviado correctamente';
header('Location: contact.html');
?>