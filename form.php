<?php
$name     =  $_POST['name'];
$email    =  $_POST['email'];
$phone    =  $_POST['phone'];
$message  =  $_POST['message'];

$header .= 'From: ' . $email  . " \r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$to = "territory2509@gmail.com";
$subjet = "Enviado desde rutabuenosaires.com";
$body = "Nombre: ".$name."\nE-mail: ".$email."\nWhatsApp: ".$phone."\nComentario: ".$message;

if ($name != "") {
mail($to,$subjet,$body,$header);
header("Location: https://rutabuenosaires.com/");    
} else
header("Location: https://rutabuenosaires.com/");

?>