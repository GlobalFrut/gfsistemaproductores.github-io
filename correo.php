<?php 
$destinatario = "armandom@globalfrut.com.mx"; 
$asunto = "Este mensaje es de prueba"; 
$cuerpo = " nueva carpeta completa"; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Sistema de productores <armando_biebs97@hotmail.com>\r\n"; 






mail($destinatario,$asunto,$cuerpo);
?>