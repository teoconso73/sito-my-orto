<?php
session_start();// come sempre prima cosa, aprire la sessione
include("DB_connect.php"); // Include il file di connessione al database


$_SESSION["password"]=$_POST["password"]; // con questo associo il parametro username che mi è stato passato dal form alla variabile SESSION password
$pass=$connessione_al_server->real_escape_string($_POST["password"]);

$p=sha1($pass);

$query=$connessione_al_server->query("SELECT * FROM users WHERE password='$p'"); //per selezionare nel db l'utente e pw che abbiamo appena scritto nel log
if(!$query){
printf("Connect failed: %s\n",$query->connect_error);
exit();
}
// Con il SELECT qua sopra selezione dalla tabella users l utente registrato (se lo è) con i parametri che mi ha passato il form di login, quindi
// Quelli dentro la variabile POST. username e password.
if($query->num_rows==1)//se c'è una persona con quel nome nel db allora loggati
{        

header('location: /Progetto/index.php');
}
else     
{
header('location: /Progetto/lock_screen.php?error=1');
}
?>