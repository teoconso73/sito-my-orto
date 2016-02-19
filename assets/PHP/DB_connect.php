<?php     //connessione al nostro database
$connessione_al_server= new mysqli("localhost","root","","my_project0101");  // ip locale, login e password  PASSWORD FORSE DA METTERE VUOTA(SE NON VA)
if($connessione_al_server->connect_errno){
printf("Connect failed: %s\n",$connessione_al_server->connect_error);
exit();
}


//$db_selected=mysql_select_db("my_project0101",$connessione_al_server); //
/*if(!$db_selected){
die ('Errore nella selezione del database: errore '.mysql_error()); // se la connessione non andrà a buon fine apparirà questo messaggio
}*/
?>
