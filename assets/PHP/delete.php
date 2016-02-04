<?
$temp=session_start();
$db_connection= mysql_connect("localhost","project0101","admin"); 
$db_selection = mysql_select_db("my_project0101",$db_connection);
$utenteAttuale=$_SESSION['ID_utente'];
$id=$_GET[id];
$idOrto=$_GET[idOrto];
echo "il tuo ID: "; echo $id;
mysql_query("DELETE from piante_piantate WHERE ID_pianta='$id' AND  ID_orto in(select ID_orto from orto where ID_utente=$utenteAttuale AND ID_orto=$idOrto)");
header ("Location: /paginaOrto.php?id=$idOrto");
?>