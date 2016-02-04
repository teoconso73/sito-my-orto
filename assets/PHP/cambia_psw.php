<?php
session_start();
include("DB_connect.php");
mysql_select_db("my_project0101",$connessione_al_server); 

$IDuser = $_SESSION['ID_utente'];
$quer=mysql_query("SELECT * FROM users WHERE ID_utente='$IDuser'")or DIE('query non riuscita'.mysql_error());
$result=mysql_fetch_assoc($quer);
$oldpassw=$result['password'];

if($_SESSION['logged']==true && sha1($_POST['password'])==$oldpassw)
{
$newpassw=$_POST["newpassword"];
$confirmpassw=$_POST["confirmpassword"];

$ps=sha1($newpassw);
$query=mysql_query("UPDATE users SET password='$ps' WHERE ID_utente='$IDuser'") or DIE('query non riuscita'.mysql_error());
header('location: http://project0101.altervista.org/profiloUtente.php?psw=1');

}
else
{
header('location: http://project0101.altervista.org/profiloUtente.php?error=1');
}
?>