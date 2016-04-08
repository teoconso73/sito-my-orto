<?php
session_start();
include("DB_connect.php");


$IDuser = $_SESSION['ID_utente'];
$quer=$connessione_al_server->query("SELECT * FROM users WHERE ID_utente='$IDuser'");
if($quer->connect_errno){
printf("query non riuscita: %s\n",$quer->connect_error);
}
$result=$quer->fetch_assoc();
$oldpassw=$result['password'];

if($_SESSION['logged']==true && sha1($_SESSION['password'])==$oldpassw)
{
$nome=$_POST["nome"];
$cognome=$_POST["cognome"];
$username=$_POST["username"];
$email=$_POST["email"];
$controlutente=$connessione_al_server->query("SELECT ID_utente FROM users WHERE username='$username' ");
if($query->connect_errno){
printf("query non riuscita: %s\n",$query->connect_error);
}
if($controlutente->num_rows==1)
{
header('location: /Progetto/profiloUtente.php?utente_er=1');
}
else
{
$query=$connessione_al_server->query("UPDATE users SET nome='$nome' WHERE ID_utente='$IDuser'");
if($query->connect_errno){
printf("query non riuscita: %s\n",$query->connect_error);
}
$query=$connessione_al_server->query("UPDATE users SET cognome='$cognome' WHERE ID_utente='$IDuser'");
if($query->connect_errno){
printf("query non riuscita: %s\n",$query->connect_error);
}
$query=$connessione_al_server->query("UPDATE users SET username='$username' WHERE ID_utente='$IDuser'");
if($query->connect_errno){
printf("query non riuscita: %s\n",$query->connect_error);
}
$query=$connessione_al_server->query("UPDATE users SET email='$email' WHERE ID_utente='$IDuser'") ;
if($query->connect_errno){
printf("query non riuscita: %s\n",$query->connect_error);
}
header('location: /Progetto/profiloUtente.php');
exit();
}

}


?>