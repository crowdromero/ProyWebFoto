<?php 

	$para= 'ntw.dromero@gmail.com';
	$asunto='Mensaje desde Prueba Web';
	$mailheader='From:'.$_POST["email"]."\r\n";
	$mailheader .='Reply:'.$_POST["email"]."\r\n";
	$mailheader .="Content-type: text/html; charset=utf-8\r\n";
	$MESSAGE_BODY="Nombre".$_POST["name"]."\r\n";
	$MESSAGE_BODY .="E-mail".$_POST["email"]."\r\n";
	$MESSAGE_BODY .="Mensaje".nl2br($_POST["message"])."\r\n";

	mail($para, $asunto, $MESSAGE_BODY,$mailheader) or die("Error al enviar email")
	header('Location: http://jotajotavm.com/sonia')

 ?>