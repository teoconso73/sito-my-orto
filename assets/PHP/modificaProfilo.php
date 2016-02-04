<?php
session_start();
include("DB_connect.php");
mysql_select_db("my_project0101",$connessione_al_server); 

$IDuser = $_SESSION['ID_utente'];
$quer=mysql_query("SELECT * FROM users WHERE ID_utente='$IDuser'")or DIE('query non riuscita'.mysql_error());
$result=mysql_fetch_assoc($quer);
$oldpassw=$result['password'];

if($_SESSION['logged']==true && sha1($_SESSION['password'])==$oldpassw)
{
$nome=$_POST["nome"];
$cognome=$_POST["cognome"];
$username=$_POST["username"];
$email=$_POST["email"];
$controlutente=mysql_query("SELECT ID_utente FROM users WHERE username='$username' ")or DIE('query non riuscita'.mysql_error());
if(mysql_num_rows($controlutente)==1)
{
header('location: http://project0101.altervista.org/profiloUtente.php?utente_er=1');
}
else
{
$query=mysql_query("UPDATE users SET nome='$nome' WHERE ID_utente='$IDuser'") or DIE('query non riuscita'.mysql_error());
$query=mysql_query("UPDATE users SET cognome='$cognome' WHERE ID_utente='$IDuser'") or DIE('query non riuscita'.mysql_error());
$query=mysql_query("UPDATE users SET username='$username' WHERE ID_utente='$IDuser'") or DIE('query non riuscita'.mysql_error());
$query=mysql_query("UPDATE users SET email='$email' WHERE ID_utente='$IDuser'") or DIE('query non riuscita'.mysql_error());
header('location: http://project0101.altervista.org/profiloUtente.php');
exit();
}

}


?>