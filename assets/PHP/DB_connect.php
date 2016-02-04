<?php     //connessione al nostro database
$connessione_al_server=mysql_connect("localhost","project0101","admin");  // ip locale, login e password  PASSWORD FORSE DA METTERE VUOTA(SE NON VA)
if(!$connessione_al_server){
die ('Non riesco a connettermi: errore '.mysql_error()); // questo apparirà solo se ci sarà un errore
}

//$db_selected=mysql_select_db("my_project0101",$connessione_al_server); //
/*if(!$db_selected){
die ('Errore nella selezione del database: errore '.mysql_error()); // se la connessione non andrà a buon fine apparirà questo messaggio
}*/
?>
