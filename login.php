<?php
/*if(session_id() == '') {
    session_start();
}*/

	
session_start();
//include("/assets/PHP/DB_connect.php");
//include("/assets/PHP/login.php");
//include("/assets/PHP/recupero_psw.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>MyOrto- Login</title>
   <link rel="shortcut icon" href="assets/img/iconaURL.ico" type="image/x-icon">
   <link href="assets/PHP/DB_connect.php">
   <link href="assets/PHP/login.php">
   <link href="assets/PHP/recupero_psw.php">
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

  <body>
<p>&nbsp;</p>
<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<div id="login-page">
<div class="container"><form class="form-login" action="./assets/PHP/login.php" method="POST">
<h2 class="form-login-heading" style="text-align: center;"><span style="font-family: 'arial black', sans-serif;"><strong>Log In</strong></span></h2>
<div class="login-wrap" style="text-align: center;"><input class="form-control" type="text" id="username" name='username' autofocus="" placeholder="User ID" /> <br /> <input class="form-control" name='password' id="password" type="password" placeholder="Password" />
<?php
if(isset($_GET['error']) && $_GET['error']==1 )  
{
echo '<br>';  
echo '<font color="red" size="3">Username o password errati!</font>';
}
if(isset($_GET['recpsw']) && $_GET['recpsw']==1)  //if(isset($_GET['recpsw']))
{
echo '<br>';  
echo '<font color="grey" size="2">Ti è stata inviata una mail per il recupero della password</font>';
}
if(isset($_GET['recpsw']) && $_GET['recpsw']==2)
{
echo '<br>';  
echo '<font color="red" size="2">Email inesistente nei nostri archivi!</font>';
}
?>
<label class="checkbox">
<span class="pull-right">
<a data-toggle="modal" href="login.php#myModal"> Password Dimenticata?</a>
</span>
</label>
</a> 
<button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> LOG IN</button>
</form>
<hr>
<div style="text-align: center"
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header"><button class="close" type="button" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Password Dimenticata?</h4>
</div>
<div class="modal-body">
<p>Inserisci la tua e-mail per recuperare la password</p>
<form action="./assets/PHP/recupero_psw.php" method ="POST">
<input class="form-control placeholder-no-fix"  name='email' id="email" type="text" placeholder="Email" /></div>
<div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button> <button class="btn btn-theme" type="submit">Invia</button></div>
</form>
</div>
</div>
</div>
<!-- modal -->
</div>
</div>
<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/facebooksdk.js"></script>

<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 100%; width: 100%; z-index: -999999; position: fixed;">
<img src="assets/img/immagineLogin.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-width: none; z-index: -999999; left: 0px; top: 0px;"></div>
 
</body>
</html>