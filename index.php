<?php
if(!isset($_SESSION))
session_start();

//include("/assets/PHP/login.php"); 
include("/assets/PHP/DB_connect.php");

if(!isset($_SESSION['logged']) || $_SESSION['logged']==false)
	header('Location:login.php');




?>
<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    
    

    <title>MyOrto-Home</title>
    

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

	<!--prova-->

        
        
 
 <script src="assets/js/chart-master/Chart.js"></script>
	
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
    <script src="assets/js/notify.js"></script>

    
 
 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  </head>

  <body>
  <?PHP 
  include ("/assets/PHP/popupNewOrto.php"); 

  
  ?>
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
              
			  
              $iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
              $sql=$connessione_al_server->query("SELECT * FROM users WHERE ID_utente='$iduser'")or DIE('query non riuscita'.mysql_error());
			   if(!$sql){
				printf("Connect failed: %s\n",$sql->connect_error);
				exit();
				}
			  $result=$sql->fetch_assoc();
              $username=$result['username'];
				//echo '<p="centered"><a href="profile.html"><img src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'"class="img-circle" width="60"</a></p>/>';
			echo '<div style=margin-left:25%; text-align:center"><a href="profiloUtente.php"><img src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'" class="img-circle" width="100"/></div>';
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
          <section class="wrapper">

              <div class="row"></div>  
             <!--  <form action="index.php" method="GET">
INSERISCI temperatura arduino<input name="tem">
<button type="submit">invia</button>

</form> -->
<br>
<div class="col-lg-4 col-md-4 col-sm-4 mb">
<div id="num-orti" class="numero-orti pn">
<i class="fa fa-leaf" style="font-size:50px;"></i><br>
<span>NUMERO DI ORTI </span><br>

<?php //STAMPA NUMERO DI ORTI
$numOrti=$connessione_al_server->query("SELECT 	count(*) as 'numero' from orto where ID_utente=$iduser ");
while($cicle=$numOrti->fetch_assoc())
	echo "<div style='margin-top:30px'>
<span style='font-size:60px;color:red; font-weight:bold'>".$cicle['numero']."</span>
</div>";
?>
</div>
</div>
<?php
$apiURL="http://api.openweathermap.org/data/2.5/weather?q=MARIANOCOMENSE&lang=it&appid=65cedfc44104eebe213e05ec9b3f8c9f";
$weather_data=file_get_contents($apiURL) or die("errore meteo");
$json=json_decode($weather_data,TRUE);
$temperatura=intval($json['main']['temp']-273); //converto in celsius e trasformo in intero
$_SESSION["temperatura"]=$temperatura;
$descrizione=$json['weather'][0]['description'];
$_SESSION["descrizione"]=$descrizione;
$nome=$json['name'];
$umidita=$json['main']['humidity'];
echo '<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="weather-3 pn centered">';
							
								echo '<i class="fa fa-sun-o"></i></i>';
							
								echo '<h1>'.$temperatura.'° C</h1>
								<div style="height:91px;" class="info">
									<div class="row">
											<h3 class="centered">'.$nome.'</h3>
										<div class="col-sm-6 col-xs-6 pull-left">
											<p class="goleft"><i class="fa fa-tint"></i> '.$umidita.'%</p>
										</div>
										<div class="col-sm-6 col-xs-6 pull-right">
											<p class="goright"><i class="fa fa-flag"></i> 15 MPH</p>
										</div>
									</div>
								</div>
							</div>
						</div>';

?>   

       		<div class="contenitore-guide">
			<div class="casella">
			<div class="titoli-guide">
			<span>Irrigazione</span>
			</div>
			<img src="assets2/images/irrigatori.jpg" width="190" height="170" >
			<div class="link-guide">
               <a href="#" onclick="location.href='Irrigazione.php'" style="color:white" >Vai alla pagina</a>
			   </div>
            </div>
			
			<div class="casella">
			<div class="titoli-guide">
			<span>fertilizzazione</span>
			</div>
			<img src="assets2/images/concime.jpg" width="190" height="170" >
			<div class="link-guide">
               <a href="#" onclick="location.href='fertilizzazione.php'" style="color:white" >Vai alla pagina</a>
			   </div>
            </div>
			
			<div class="casella">
			<div class="titoli-guide">
			<span>proprietà ortaggi</span>
			</div>
			<img src="assets2/images/ortaggi.jpg" width="190" height="170" >
			<div class="link-guide">
               <a href="#" onclick="location.href='proprieta_ortaggi.php'" style="color:white" >Vai alla pagina</a>
			   </div>
            </div>
			
			<div class="casella">
			<div class="titoli-guide">
			<span>attrezzi</span>
			</div>
			<img src="assets2/images/AttrezziGiardino.jpg" width="190" height="170" >
			<div class="link-guide">
               <a href="#" onclick="location.href='attrezzi.php'" style="color:white" >Vai alla pagina</a>
			   </div>
            </div>
			
			</div>
					
                 
                  
                  
   
          </section>
      </section>
</section>
      <!--main content end-->
      



   
	
	
	
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
        
        function myDateFunction(id) {
    var date = $("#" + id).data("date");
    var hasEvent = $("#" + id).data("hasEvent");
}
        /*function myDateFunction(id, fromModal) {
        $("#date-popover").hide();
        if (fromModal) {
            $("#" + id + "_modal").modal("hide");
        }
        var date = $("#" + id).data("date");
        var hasEvent = $("#" + id).data("hasEvent");
        if (hasEvent && !fromModal) {
            return false;
        }
        $("#date-popover-content").html('You clicked on date ' + date);
        $("#date-popover").show();
        return true;
    }*/
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
            window.location.href = 'http://www.project0101.altervista.org/lock_screen.php';
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
