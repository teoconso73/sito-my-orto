<?php
include ("/DB_connect.php");
session_start();

$utenteAttuale=$_SESSION['ID_utente'];

$scelta=$_GET["scelta"]; //RICEVO LA SCELTA FATTA NEL SELECT
$idOrto=$_GET["idOrto"];

$trova=$connessione_al_server->query("select ID_piante from tabpiante where frutto='$scelta'");
while($temp1=$trova->fetch_array()){ 
    $temp2=$temp1['ID_piante'];
  
  }
$inserisco=$connessione_al_server->query("INSERT INTO `my_project0101`.`piante_piantate` (`ID_pianta_piantata`, `ID_orto`, `ID_pianta`) VALUES (NULL, '$idOrto', '$temp2');");
header ("Location: /Progetto/paginaOrto.php?id=$idOrto"); //ricarica la pagina di origine (evita di visualizzare la pagina inserirePianta.php)
?>