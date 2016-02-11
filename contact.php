<?php

$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];
$receiver="infomyorto@yahoo.it";
if(mail($receiver,$subject,$message,"From: $email \r\n" ."Reply-To: $email\r\n" ))
header("location: http://project0101.altervista.org/paginaPrincipale/contatti.php?mailtrue=1");
else
header("location: http://project0101.altervista.org/paginaPrincipale/contatti.php?mailfalse=1");
?>