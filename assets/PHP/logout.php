<?php
session_start();// come sempre prima cosa, aprire la sessione
include("DB_connect.php"); // Include il file di connessione al database
$_SESSION["logged"] =false;  // Nella variabile SESSION associo TRUE al valore logge
session_destroy();
header('location: http://project0101.altervista.org/login.php'); // e mando per esempio ad una pagina esempio.php// in questo caso rimanderò ad una pagina prova.php
?>