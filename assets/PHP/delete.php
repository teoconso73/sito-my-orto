<?php
include ("/DB_connect.php");
$temp=session_start();

$utenteAttuale=$_SESSION['ID_utente'];
$id=$_GET[id];
$idOrto=$_GET[idOrto];
$query=$connessione_al_server->query("DELETE from piante_piantate WHERE ID_pianta='$id' AND  ID_orto in(select ID_orto from orto where ID_utente=$utenteAttuale AND ID_orto=$idOrto)");
header ("Location: /Progetto/paginaOrto.php?id=$idOrto");
?>