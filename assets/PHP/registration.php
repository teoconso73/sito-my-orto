<?php
session_start();
include("DB_connect.php");


$file=$_FILES['avatar']['tmp_name'];
if(!isset($file))
{
    header('Location: home.php?selectimg=1');
	exit;
}
else
{
		$image_check = getimagesize($_FILES['avatar']['tmp_name']);
        $image_width = $image_check[0];
		$image_height = $image_check[1];
        $file_size = filesize($_FILES['avatar']['tmp_name']);
        $file_size = $file_size / 1024; // Get file size in KB
       if($image_check==false)
       {
        echo 'Not a Valid Image';
       }
       else if($image_width > 1000 || $image_height > 1000 || $file_size > 64)   
	   {										
      header('Location: home.php?big=1');				 //echo $file_size; // Echo file size
       }
	   else
	   {
		    $image = addslashes(file_get_contents($_FILES['avatar']['tmp_name'])); //SQL Injection defence!
			$image_name = addslashes($_FILES['avatar']['name']);
			
 $nome = $connessione_al_server->real_escape_string($_POST["firstname"]); 
 $cognome =$connessione_al_server->real_escape_string($_POST["lastname"]); 
 $username = $connessione_al_server->real_escape_string($_POST["username"]);
 $email = $connessione_al_server->real_escape_string($_POST["email"]);
 $passw =$connessione_al_server->real_escape_string($_POST["password"]);
 $password= sha1($passw);
 


 $userquery=$connessione_al_server->query("SELECT * FROM users WHERE username='$u'");
 if($userquery->connect_errno){
printf("query utente insert non riuscita: %s\n",$query->connect_error);
}
 $mailquery=$connessione_al_server->query("SELECT ID_utente FROM users WHERE email='$email'");
 if($query->connect_errno){
printf("query estrai mail non riuscita: %s\n",$query->connect_error);
}
 if($userquery->num_rows==1)
{
header('location: home.php?utente_er=1');  //se esiste un nome utente già presente da errore
exit();
}
if($mailquery->num_rows==1)
{
 		header('location: home.php?mail_er=1');  //se esiste una mail già presente da errore
		exit();
 
}

	 if($queryins=$connessione_al_server->query("INSERT INTO users(username,password,email,avatar,nome,cognome) VALUES('$username','$password','$email','$image','$nome','$cognome')"))
 {
 $nome_mittente = "myOrto Administrators";
$mail_destinatario = $email;

// definisco il subject ed il body della mail
$mail_oggetto = "Registrazione effetuata!";
$mail_corpo = "Benvenuto su myOrto! La tua registrazione è stata effettuata con successo.\r\n Questi sono i tuoi dati:\r\nome utente:$username  \r\n password:$_POST['password']";


$intestazione="From:MyOrto Administrator\n";

mail($mail_destinatario, $mail_oggetto, $mail_corpo, $intestazione);
 header('location: home.php?register=1');
exit();
 }
 else
 {
 header('location: home.php?notregister=1');
exit();
 }
	   }
}
?>


