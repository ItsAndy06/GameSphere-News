<?php
$mail = $_POST['email'];

$header = 'From: ' . $mail . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .=  "Content-Type: text/plain";

$mensaje = "Este correo quiere recibir noticias " . $mail . " \r\n";
$mensaje = "Enviado el " . date('d/m/Y', time());

$para = 'acajamarca01@gmail.com';
$asunto = 'Mail de mi sitio web!';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index_main.html");
?>