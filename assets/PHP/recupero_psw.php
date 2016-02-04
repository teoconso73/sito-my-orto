 <?php 
session_start();// come sempre prima cosa, aprire la sessione
include("DB_connect.php");
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
mysql_select_db("my_project0101",$connessione_al_server);
$indirizzo=$_POST["email"];
// Comando SQL
$query=mysql_query("SELECT ID_utente,password FROM users WHERE email='$indirizzo'") or DIE('Query non riuscita'.mysql_error());
if(mysql_num_rows($query)==1)
{
$datiuser = mysql_fetch_array($query);  //ysql_fetch_assoc($query);
$passw=randomPassword();
$pwd=sha1($passw);
$id=$datiuser["ID_utente"];
$query2=mysql_query("UPDATE users SET password = '$pwd' WHERE ID_utente = '$id'")or DIE('Query non riuscita'.mysql_error()); 
//$pwd=$row["password"];   
$destinatario=$indirizzo;
$soggetto="Recupero password";
$messaggio="La tua password e':$passw";
$intestazione="From:MyOrto Admininstrator\n";
mail($destinatario,$soggetto,$messaggio,$intestazione);
header('location: http://project0101.altervista.org/login.php?recpsw=1');
}
else
{
header('location: http://project0101.altervista.org/login.php?recpsw=2');
}
?>