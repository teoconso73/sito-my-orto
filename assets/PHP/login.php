<?php
session_start();// come sempre prima cosa, aprire la sessione
include("DB_connect.php"); // Include il file di connessione al database
mysql_select_db("my_project0101",$connessione_al_server); 
$_SESSION["username"]=$_POST["username"]; // con questo associo il parametro username che mi è stato passato dal form alla variabile SESSION username
$_SESSION["password"]=$_POST["password"]; // con questo associo il parametro username che mi è stato passato dal form alla variabile SESSION password
$pass=mysql_real_escape_string($_POST["password"]);
$u=mysql_real_escape_string($_POST['username']);
$p=sha1($pass);

$query = mysql_query("SELECT * FROM users WHERE username='$u' AND password ='$p'") //per selezionare nel db l'utente e pw che abbiamo appena scritto nel log
or DIE('query non riuscita'.mysql_error());
// Con il SELECT qua sopra selezione dalla tabella users l utente registrato (se lo è) con i parametri che mi ha passato il form di login, quindi
// Quelli dentro la variabile POST. username e password.
if(mysql_num_rows($query)==1)//se c'è una persona con quel nome nel db allora loggati
{        
$row = mysql_fetch_assoc($query); // metto i risultati dentro una variabile di nome $row
$_SESSION["logged"] =true;  // Nella variabile SESSION associo TRUE al valore logge
$utente=mysql_query("SELECT ID_utente FROM users WHERE username='$u' AND password ='$p'")or DIE('query non riuscita'.mysql_error());
if(mysql_num_rows($utente)==1)
$row1=mysql_fetch_assoc($utente);
$name=$row1['ID_utente'];
$_SESSION['ID_utente']=$name;
header('location: http://project0101.altervista.org/index.php'); // e mando per esempio ad una pagina esempio.php// in questo caso rimanderò ad una pagina prova.php
}
else     
{
header('location: http://project0101.altervista.org/login.php?error=1');
}
?>