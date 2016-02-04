<?php
session_start();
$db_connection= mysql_connect("localhost","project0101","admin"); 
$db_selection = mysql_select_db("my_project0101",$db_connection);
$utenteAttuale=$_SESSION['ID_utente'];

$scelta=$_GET["scelta"]; //RICEVO LA SCELTA FATTA NEL SELECT
$idOrto=$_GET["idOrto"];

$trova=mysql_query("select ID_piante from tabpiante where frutto='$scelta'");
while($temp1=mysql_fetch_array($trova)){ 
    $temp2=$temp1['ID_piante'];
  
  }
$inserisco=mysql_query("INSERT INTO `my_project0101`.`piante_piantate` (`ID_pianta_piantata`, `ID_orto`, `ID_pianta`) VALUES (NULL, '$idOrto', '$temp2');");
header ("Location: /paginaOrto.php?id=$idOrto"); //ricarica la pagina di origine (evita di visualizzare la pagina inserirePianta.php)
?>