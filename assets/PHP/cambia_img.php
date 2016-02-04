<?php
session_start();
include("DB_connect.php");
mysql_select_db("my_project0101",$connessione_al_server); 

$IDuser = $_SESSION['ID_utente'];

    $file=$_FILES['image']['tmp_name'];
    if(!isset($file))
    {
     header('Location: http://www.project0101.altervista.org/profiloUtente.php?selectimg=1');
	exit;
    }
	else{
		       $image_check = getimagesize($_FILES['image']['tmp_name']);
               $image_width = $image_check[0];
			$image_height = $image_check[1];
            $file_size = filesize($_FILES['image']['tmp_name']);
            $file_size = $file_size / 1024; // Get file size in KB
       if($image_check==false)
       {
        echo 'Not a Valid Image';
       }
       else if($image_width > 1000 || $image_height > 1000 || $file_size > 64)   
	   {										
      header('Location: http://www.project0101.altervista.org/profiloUtente.php?big=1');				 //echo $file_size; // Echo file size
       }
       else{
		   $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);

$sql=mysql_query("UPDATE users SET avatar='$image' WHERE ID_utente='$IDuser'") or DIE('query non riuscita'.mysql_error());

if (!mysql_query($sql)) { // Error handling
   header('location: http://project0101.altervista.org/profiloUtente.php'); 
}
else
{
header('location: http://project0101.altervista.org/profiloUtente.php?imgerror=1');
}

		   
		   
	   }
		
		
	}

?>