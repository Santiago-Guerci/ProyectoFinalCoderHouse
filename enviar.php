<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];
$codigoPostal = $_POST['codigoPostal'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre $apellido . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Es de: " . $ciudad $provincia . " \r\n";
$mensaje .= "Su codigo postal: " . $codigoPostal . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'santiago.3861@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:index.html');

?>