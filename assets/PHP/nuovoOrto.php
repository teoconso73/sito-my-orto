<?php
session_start();
$db_connection= mysql_connect("localhost","project0101","admin"); 
$db_selection = mysql_select_db("my_project0101",$db_connection);
$utenteAttuale=$_SESSION['ID_utente'];

$nome=$_GET["nomeOrto"];
$tipo=$_GET["tipoOrto"];
$tipo1=mysql_query("SELECT ID_tipo from tipo where Tipo='$tipo'");
while ($row=mysql_fetch_array($tipo1))
{
   $tipo2=$row['ID_tipo'];
}
echo $utenteAttuale;
echo $tipo2;
echo $nome;

mysql_query("INSERT INTO `my_project0101`.`orto` (`nome`,`ID_utente`,`ID_tipo`) VALUES ('$nome', '$utenteAttuale',$tipo2);");
$idOrto=mysql_query("SELECT ID_orto from orto where ID_tipo=$tipo2 and nome='$nome'");
while ($row=mysql_fetch_array($idOrto))
{
   $idOrto1=$row['ID_orto'];
}
echo $idOrto1;
header ("Location: /paginaOrto.php?id=$idOrto1");
?>