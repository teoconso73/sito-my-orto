<?php
session_start();
 include("DB_connect.php");


$IDuser = $_SESSION['ID_utente'];

    $file=$_FILES['image']['tmp_name'];
    if(!isset($file))
    {
     header('Location: /Progetto/profiloUtente.php?selectimg=1');
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
      header('Location: /Progetto/profiloUtente.php?big=1');				 //echo $file_size; // Echo file size
       }
       else{
		   $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);

$sql=$connessione_al_server->query("UPDATE users SET avatar='$image' WHERE ID_utente='$IDuser'");
 
 if(!$sql){
header('location: /Progetto/profiloUtente.php?imgerror=1');
exit();
}
else
{
header('location: /Progetto/profiloUtente.php?img=1');
}

		   
		   
	   }
		
		
	}

?>