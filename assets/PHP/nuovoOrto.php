<?php
if(!isset($_SESSION))
session_start();
$db_connection= mysql_connect("localhost","root",""); 
$db_selection = mysql_select_db("my_project0101",$db_connection);
$utenteAttuale=$_SESSION['ID_utente'];

$nome=$_GET["nomeOrto"];
$tipo=$_GET["tipoOrto"];
$localita=$_GET["localita"];
$tipo1=mysql_query("SELECT ID_tipo from tipo where Tipo='$tipo'");
while ($row=mysql_fetch_array($tipo1))
{
   $tipo2=$row['ID_tipo'];
}
echo $utenteAttuale;
echo $tipo2;
echo $nome;

$nomeuguale=mysql_query("SELECT nome from orto WHERE nome='$nome'")or DIE('query non riuscita'.mysql_error());
 if(mysql_num_rows($nomeuguale)==1)
{
header('location:  /paginaOrto.php?nomeuguale=1');
exit();
}
else
{
mysql_query("INSERT INTO `my_project0101`.`orto` (`nome`,`ID_utente`,`ID_tipo`,`comune`) VALUES ('$nome', '$utenteAttuale',$tipo2,'$localita');");
$idOrto=mysql_query("SELECT ID_orto from orto where ID_tipo=$tipo2 and nome='$nome'");
while ($row=mysql_fetch_array($idOrto))
{
   $idOrto1=$row['ID_orto'];
}
echo $idOrto1;
header ("Location: /Progetto/paginaOrto.php?id=$idOrto1");
}


?>