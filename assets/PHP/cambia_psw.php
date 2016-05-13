<?php
session_start();
 include("DB_connect.php");
//mysql_select_db("my_project0101",$connessione_al_server); 

$IDuser = $_SESSION['ID_utente'];
$quer=$connessione_al_server->query("SELECT * FROM users WHERE ID_utente='$IDuser'");
if(!$quer){
printf("Connect failed: %s\n",$quer->connect_error);
exit();
}
$result=$quer->fetch_assoc();
$oldpassw=$result['password'];

if($_SESSION['logged']==true && sha1($_POST['password'])==$oldpassw)
{
$newpassw=$_POST["newpassword"];
$confirmpassw=$_POST["confirmpassword"];

$ps=sha1($newpassw);
$query=$connessione_al_server->query("UPDATE users SET password='$ps' WHERE ID_utente='$IDuser'");
if(!$query){
printf("Connect failed: %s\n",$quer->connect_error);
exit();
}
header('location: /Progetto/profiloUtente.php?psw=1');

}
else
{
header('location: /Progetto/profiloUtente.php?error=1');
}
?>