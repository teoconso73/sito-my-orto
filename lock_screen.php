<?php
session_start();
//include("/assets/PHP/DB_connect.php");
//include("/assets/PHP/login.php");
//include("/assets/PHP/login_lockscreen.php");
if($_SESSION['logged']==false)
header('Location: login.php');


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>MyOrto-Sblocca</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 


  </head>
<!---->
  <body onload="getTime()">
  

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  	<div class="container">
	  	
	  		<div id="showtime"></div>
	  			<div class="col-lg-4 col-lg-offset-4">
	  				<div class="lock-screen">
		  				<h2><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>
		  				<p>UNLOCK</p>
						<?php
		  				if(isset($_GET['error']))
{				
echo '<br>';  
echo '<font color="red" size="5">Password errata!</font>';
}
?>
				          <!-- Modal -->
				          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
				              <div class="modal-dialog">
				                  <div class="modal-content">
								  <form action="./assets/PHP/login_lockscreen.php" method="POST">
				                      <div class="modal-header">
				                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                          <h4 class="modal-title">BENTORNATO</h4>
				                      </div>
				                      <div class="modal-body">
				                          <?php
			  include("assets/PHP/DB_connect.php");
              $iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
              $sql=$connessione_al_server->query("SELECT * FROM users WHERE ID_utente='$iduser'");
			  if(!$sql){
				printf("Connect failed: %s\n",$sql->connect_error);
				exit();
				}
			  $result=$sql->fetch_assoc();
              $username=$result['username'];
				
			echo '<div style=margin-bottom:4%;text-align:center"><img src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'" class="img-circle" width="80"/></div>';
        	echo '<h4 class="centered">'; 
   			echo  $username;
            echo '</h4>';
                                          ?>
				                          <input type="password" name="password" id="password" placeholder="password" autocomplete="off" class="form-control placeholder-no-fix">
				
				                      </div>
				                      <div class="modal-footer centered">
				                        <button class="btn btn-theme03" type="submit">Login</button>
				                      </div>
									  </form>
				                  </div>
				              </div>
				          </div>
				          <!-- modal -->
		  				
		  				
	  				</div><!--/lock-screen -->
	  			</div><!-- /col-lg-4 -->
	  	
	  	</div><!-- /container -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/immagineLogin.jpg", {speed: 500});
    </script>
    
    <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 100%; width: 100%; z-index: -999999; position: fixed;"><img src="assets/img/immagineLogin.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-width: none; z-index: -999999; left: 0px; top: 0px;"></div>

    <script>
        function getTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('showtime').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){getTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
        
            </script>

 
  </body>
</html>
