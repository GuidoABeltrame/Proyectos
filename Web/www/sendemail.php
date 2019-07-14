<?php
$name       = @trim(stripslashes($_GET['name'])); 
$from       = @trim(stripslashes($_GET['email']));
$phone       = @trim(stripslashes($_GET['phone'])); 
$subject    = @trim(stripslashes($_GET['subject'])); 
$message    = @trim(stripslashes($_GET['message'])); 
$to   		= 'mauro.arnoni@gmail.com';//replace with your email

$headers = "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers.= "From: ".$name."<".$from.">\r\n";
$headers.= "Reply-To: <".$from.">\r\n";

$message = "Telefono : ".$phone."\r\n"."Mensaje : ".$message;

if(mail($to,$subject,$message,$headers)) {
	echo 'Enviado :)';
} else {
	print_r(error_get_last());	
}
	
?>