<?php
session_start();// come sempre prima cosa, aprire la sessione
/*$_SESSION["logged"] =false;  // Nella variabile SESSION associo TRUE al valore logge
session_destroy();
header('location: login.php'); // e mando per esempio ad una pagina esempio.php// in questo caso rimanderò ad una pagina prova.php
*/

$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
header('location: /Progetto/login.php');

?>