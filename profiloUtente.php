<?php
session_start();
//include("/assets/PHP/login.php"); 
include("/assets/PHP/DB_connect.php");
if(!isset($_SESSION['logged']) || $_SESSION['logged']==false)
	header('Location:login.php');
include ("/assets/PHP/popupNewOrto.php");
;
?>
<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>MyOrto-Utente</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>MyOrto</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                <li><a class="logout"  href="lock_screen.php"><i class="fa fa-lock"></i></a></li>
                    <li><a class="logout" href="assets/PHP/logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
			  <?php
             include("assets/PHP/DB_connect.php");
              $iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
              $sql=$connessione_al_server->query("SELECT * FROM users WHERE ID_utente='$iduser'");
			  if(!$sql){
				printf("Connect failed: %s\n",$sql->connect_error);
				exit();
				}
			  $result= $sql->fetch_assoc();
              $username=$result['username'];
				//echo '<p="centered"><a href="profile.html"><img src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'"class="img-circle" width="60"</a></p>/>';
			echo '<div style=margin-left:25%; text-align:center"><a href="profiloUtente.php"><img src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'" class="img-circle" width="100"/> </div>';
            echo '<h3 class="centered">'; 
            echo '<i class="fa fa-user"></i>';
            echo  $username;
            echo '</h3></a>';
             ?>
             	  	
              <li class="mt">
                      <a href="index.php"> 
                          <i class="fa fa-home"></i>                         
                         <span>Home</span>
                     </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-pagelines"></i>
                          <span>I miei orti</span>
                      </a>
                      <ul class="sub"> 
                           <?php //STAMPO IL NOME DEI MIEI ORTI
                           $query = $connessione_al_server->query("select * from orto where ID_utente=$iduser");
                           while($cicle=$query->fetch_array(MYSQLI_ASSOC)){
                           $idOrto=$cicle['ID_orto'];
                           echo "<li><a  href='paginaOrto.php?id=$idOrto'>".$cicle['nome']."</a></li>";
                           }
                           ?>
                          
                          <li><a  data-toggle="modal" href="#popupNewOrto">Nuovo Orto <i class="fa fa-plus" style="font-size: 8px;"></i></a></li>
                      </ul>
                  </li>

                  <!--<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="resetpassw.php">Cambia Password</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu dcjq-parent-li">
                      <a href="CHI SIAMO.html"> 
                          <i class="fa fa-info-circle"></i>                         
                         <span>Info</span>
                     </a>
                  </li>-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Guide</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="Irrigazione.php">Irrigazione</a></li>
                          <li><a  href="Fertilizzazione.php">Fertlizzazione</a></li>
                          <li><a  href="Proprieta_ortaggi.php">Propietà ortaggi</a></li>
                          
                          <li><a  href="attrezzi.php">Accessori utili</a></li>
                      </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="contenitori-utente">
            
			<?php
             // $connessione_al_server=mysql_connect("localhost","root","");
			  //mysql_select_db("my_project0101",$connessione_al_server);
              $iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
              $sql=$connessione_al_server->query("SELECT * FROM users WHERE ID_utente='$iduser'");
			  if(!$sql){
				printf("Connect failed: %s\n",$sql->connect_error);
				exit();
				}
			  $result=$sql->fetch_assoc();
              $username=$result['username'];
				//echo '<p="centered"><a href="profile.html"><img src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'"class="img-circle" width="60"</a></p>/>';
			  echo '<img class="imgProfilo" src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'" width="30"/>';
             
             ?>
			
         
 
 <button type="button" class="btn btn-default" style="float: right;" data-toggle="modal" href="login.php#popupUtente2">cambia password</button>
 <button type="button" class="btn btn-default" style="float: right;" data-toggle="modal" href="login.php#popupUtente3">cambia foto</button>

 			<?php

if(isset($_GET['psw'])&& $_GET['psw']==1)
{
echo '<br>';  
echo '<br>';
echo '<div style="text-align: center" ><font color="green" size="3">&nbsp &nbsp &nbsp Password cambiata correttamente</font></div>';
}
if(isset($_GET['error'])&& $_GET['error']==1)
{
  
echo '<div id="popupUtente2" class="modal fade in" tabindex="-1" aria-hidden="false" style="display: block;" >
<div class="modal-dialog">
<div class="modal-content">
<form name="myForm" action="./assets/PHP/cambia_psw.php"  method="POST">
<div class="modal-header"><button class="close" type="button" data-dismiss="modal" onclick="document.getElementById(\'popupUtente2\').style.display=\'none\'">×</button>
<h4 class="modal-title">Modifica password</h4>
</div>
<div class="panel-body">
<div class="task-content">
<div style="text-align:center"><font color="red" size="3">Password errata!</font></div>
  <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Password </label>
                <input type="password" name="password" class="modificaDatiUtente form-control" required>
                </div>
     </li>
    </ul>
    
    <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Nuova password </label>
                <input type="password" name="newpassword" class="modificaDatiUtente form-control" required>
                </div>
     </li>
    </ul>
    
    <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Conferma password </label>
                <input type="password" name="confirmpassword" required oninvalid="InvalidMsg(this);"  oninput="InvalidMsg(this);" class="modificaDatiUtente  form-control">
                </div>
     </li>
    </ul>
 </div>
 </div>
 <div class="modal-footer">
 <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
 <button class="btn btn-theme" type="submit">Salva</button>
 </div>
 </form>
 </div>
 </div>
 </div>';
}
	if(isset($_GET['selectimg'])&& $_GET['selectimg']==1)
{
echo '<div id="popupUtente3" class="modal fade in" tabindex="-1" aria-hidden="false" style="display: block;">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header"><button class="close" type="button" data-dismiss="modal" onclick="document.getElementById(\'popupUtente3\').style.display=\'none\'">×</button>
<h4 class="modal-title">Modifica foto</h4>
</div>
<div style="text-align:center"><font color="red" size="3">nessuna immagine scelta! Clicca su scegli file!</font></div>


<form action="./assets/PHP/cambia_img.php" method="POST" enctype="multipart/form-data">;';

//$connessione_al_server=mysql_connect("localhost","root","");
//mysql_select_db("my_project0101",$connessione_al_server);
$iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
$sql=$connessione_al_server->query("SELECT * FROM users WHERE ID_utente='$iduser");
if($sql->connect_errno){
printf("query non riuscita: %s\n",$sql->connect_error);
exit();
}
$result=$sql->fetch_assoc();
$username=$result['username'];
echo '<div style="margin-left:-85px;margin-bottom:5%;"><img class="imgProfilo" src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'" width="30"/></div>';

 echo '<br>
 <div style="margin-left:200px"><input type="file" name="image"/></div>
<div class="modal-footer">
 <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
 <button class="btn btn-theme" type="submit">Salva</button>
 </div>
 </form>
 </div>
 </div>
 </div>';
}
if(isset($_GET['big'])&& $_GET['big']==1)
{
echo '<div id="popupUtente3" class="modal fade in" tabindex="-1" aria-hidden="false" style="display: block;">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header"><button class="close" type="button" data-dismiss="modal" onclick="document.getElementById(\'popupUtente3\').style.display=\'none\'">×</button>
<h4 class="modal-title">Modifica foto</h4>
</div>
<div style="text-align:center"><font color="red" size="3">Immagine troppo grande!</font></div>


<form action="./assets/PHP/cambia_img.php" method="POST" enctype="multipart/form-data">;';

//$connessione_al_server=mysql_connect("localhost","root","");
//mysql_select_db("my_project0101",$connessione_al_server);
$iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
$sql=$connessione_al_server->query("SELECT * FROM users WHERE ID_utente='$iduser'");
if($sql->connect_errno){
printf("query non riuscita: %s\n",$sql->connect_error);
exit();
}
$result=$sql->fetch_assoc();
$username=$result['username'];
echo '<div style="margin-left:-85px;margin-bottom:5%;"><img class="imgProfilo" src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'" width="30"/></div>';

 echo '<br>
 <div style="margin-left:200px"><input type="file" name="image"/></div>
<div class="modal-footer">
 <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
 <button class="btn btn-theme" type="submit">Salva</button>
 </div>
 </form>
 </div>
 </div>
 </div>';
}

            
            ?>
 <div class="contenitoreDatiUtente">
  <ul class="datiUtente">
  
  <li>
  <label>Nome:</label>
  </li>
  <li>
  <label>Cognome:</label>
  </li>
    <li>
  <label>Nome utente:</label>
  </li>
  <li>
   <label>Email:</label>
    </li></ul>
<ul class="datiUtente">
  			  <?php
              //$connessione_al_server=mysql_connect("localhost","root","");
			  //mysql_select_db("my_project0101",$connessione_al_server);
              $iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
              $sql=$connessione_al_server->query("SELECT username,email,nome,cognome FROM users WHERE ID_utente='$iduser'");
			  if(!$sql){
printf("Connect failed: %s\n",$sql->connect_error);
exit();
}
			  $result=$sql->fetch_assoc();
              $username=$result['username'];
			  $email=$result['email'];
			  $nome=$result['nome'];
			  $cognome=$result['cognome'];
				
			echo "<li><label>";
            echo $nome;
            echo "</label></li><li><label>";
            echo $cognome;
            echo "</label></li><li><label>";
            echo $username;
            echo "</label></li><li><label>";
            echo $email;
            echo "</label></li>";
            ?>
 </ul>
 <div style="border-top: 1px dashed #eaeaea ; height:25px">
 <button class="btn btn-primary btn-xs" style="float: right; margin-top:4px;" data-toggle="modal" href="login.php#popupUtente1"> 
 <i class="fa fa-pencil"></i>
 </button>
 </div> 
</div>
 </div> 
 
 <!--INIZIO PUPUP CAMBIO DATI UTENTE-->
<div id="popupUtente1" class="modal fade in" tabindex="-1" aria-hidden="false" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<form action="./assets/PHP/modificaProfilo.php" method="POST">
<div class="modal-header"><button class="close" type="button" data-dismiss="modal" onclick = "document.getElementById('popupUtente1').style.display='none'">×</button>
<h4 class="modal-title">Modifica profilo</h4>
</div>
<div class="panel-body">
<div class="task-content">
  <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Nome </label>
                <input type="text" id="nome" name="nome" class="modificaDatiUtente form-control" required>
                </div>
     </li>
    </ul>
    
    <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Cognome </label>
                <input type="text" id="cognome" name="cognome" class="modificaDatiUtente form-control" required>
                </div>
     </li>
    </ul>
    
    <ul class="task-list">
     <li>
          <div> <label class="labelUtente">Nome utente</label>
                <input type="text" id="username" name="username" class="modificaDatiUtente  form-control" required>
                </div>
     </li>
    </ul>
    
    <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Email </label>
                <input type="email" id="email" name="email" class="modificaDatiUtente  form-control" required>
                </div>
     </li>
    </ul>
 </div>
 </div>
 <div class="modal-footer">
 <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
 <button class="btn btn-theme" type="submit" >Salva</button>
 </form>
 </div>
 </div>
 </div>
 </div>
<!--FINE POPUP CAMBIO DATI UTENTE-->

<!--INIZIO POPUP CAMBIA PASSWORD-->
<div id="popupUtente2" class="modal fade in" tabindex="-1" aria-hidden="false" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
<form name="myForm" action="./assets/PHP/cambia_psw.php"  method="POST">
<div class="modal-header"><button class="close" type="button" data-dismiss="modal" onclick="document.getElementById('popupUtente2').style.display='none'">×</button>
<h4 class="modal-title">Modifica password</h4>
</div>
<div class="panel-body">
<div class="task-content">
  <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Password </label>
                <input type="password" name="password" class="modificaDatiUtente form-control" required>
                </div>
     </li>
    </ul>
    
    <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Nuova password </label>
                <input type="password" name="newpassword" class="modificaDatiUtente form-control" required>
                </div>
     </li>
    </ul>
    
    <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Conferma password </label>
                <input type="password" name="confirmpassword" required oninvalid="InvalidMsg(this);"  oninput="InvalidMsg(this);" class="modificaDatiUtente  form-control">
                </div>
     </li>
    </ul>
 </div>
 </div>
 <div class="modal-footer">
 <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
 <button class="btn btn-theme" type="submit">Salva</button>
 </div>
 </form>
 </div>
 </div>
 </div>
<!--FINE POPUP CAMBIA PASSWORD-->
<!--INIZIO POPUP CAMBIA FOTO-->
<div id="popupUtente3" class="modal fade in" tabindex="-1" aria-hidden="false" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header"><button class="close" type="button" data-dismiss="modal" onclick="document.getElementById('popupUtente3').style.display='none'">×</button>
<h4 class="modal-title">Modifica foto</h4>
</div>


<form action="./assets/PHP/cambia_img.php" method="POST" enctype="multipart/form-data">;
<?php
//$connessione_al_server=mysql_connect("localhost","root","");
//mysql_select_db("my_project0101",$connessione_al_server);
$iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
$sql=$connessione_al_server->query("SELECT * FROM users WHERE ID_utente='$iduser'");
if(!$sql){
printf("Connect failed: %s\n",$sql->connect_error);
exit();
}
$result=$sql->fetch_assoc();
$username=$result['username'];
echo '<div style="margin-left:-85px;margin-bottom:5%;"><img class="imgProfilo" src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'" width="30"/></div>';
 ?> 
 <br>
 <div style="margin-left:200px"><input type="file" name="image"/></div>
<div class="modal-footer">
 <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
 <button class="btn btn-theme" type="submit">Salva</button>
 </div>
 </form>
 </div>
 </div>
 </div>;
 
<!--FINE POPUP CAMBIA FOTO-->

</section> <!--/wrapper -->
</section><!-- /MAIN CONTENT -->

      <!--main content end-->

      
      

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>
	<script src="assets/js/validateForm.js"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
	
	      <script>
        
var redirectTimer = (function() {
    var my = {
        debug: false,
        secondsBeforeRedirect: 1000000,
        init: function () {
            var that = this;
            
            that.startTimer();

            that.events();
        },

        events: function () {
            var that = this;
            $(document).on('mousemove', function(e) {    //per evento rotellina mouse document.onmousedown
                that.resetTimer(e);
            });
        },

        redirect: function () {
            window.location.href = 'lock_screen.php';
        },
        
        startTimer: function() {
            var that = this;

            if (that.debug) {
                console.log("Timer is starting!");
            }

            that.timer = window.setTimeout(function () {
                that.redirect();
            }, that.secondsBeforeRedirect);
        },

        resetTimer: function (e) {
            var that = this;

            if (that.debug) {
                console.log("Reset timer!");
            }
            window.clearTimeout(that.timer)
            that.startTimer();
        }

    }

    $(function () {
        my.init();
    });
    
    return ;
})();
    </script>
  

  </body>
</html>
