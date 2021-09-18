<?php
$mail="angiefunees@gmail.com";
$nombre = $_POST ["nombre"];
$pais = $_POST ["pais"];
$email = $_POST ["email"];
$mensaje = $_POST ["msj"];
$thank = "gracias.html";
$message = "
nombre:".$nombre."
pais:".$pais."
email:".$email."
mensaje:".$mensaje."";
if (mail ($email, "formulario", $message)) header ( "localition:$thank");
?>
