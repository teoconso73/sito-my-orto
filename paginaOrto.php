<?php
if(!isset($_SESSION))
session_start();
//include("/assets/PHP/login.php"); 
include("/assets/PHP/DB_connect.php");
if(!isset($_SESSION['logged']) || $_SESSION['logged']==false)
	header('Location:login.php');
include ("/assets/PHP/popupNewOrto.php");

?>
<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>MyOrto-Orti</title>

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
             //$connessione_al_server=mysql_connect("localhost","root","");
			  //mysql_select_db("my_project0101",$connessione_al_server);
             $iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
				$sql=$connessione_al_server->query("SELECT * FROM users WHERE ID_utente='$iduser'");
			  if(!$sql){
				printf("query non riuscita: %s\n",$sql->connect_error);
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
<?php
 $idOrto=$_GET["id"];
 //STAMPO NOME DELL'ORTO
 $nomeOrto=$connessione_al_server->query("SELECT nome from orto where ID_orto='$idOrto'");
 while($cicle=$nomeOrto->fetch_array(MYSQLI_ASSOC)){
 echo "<div>
       <div style='display:inline-block'>
      <label  class='nome-orto'>".$cicle['nome']."</label>
      </div>";	  
 }
	  //STAMPO METEO DELL'ORTO
	  $meteo=$connessione_al_server->query("SELECT comune from orto where ID_orto='$idOrto'");
	  while($cicle=$meteo->fetch_array(MYSQLI_ASSOC)){
		  $COMUNE=str_replace(' ','',$cicle['comune']);
	  $apiURL="http://api.openweathermap.org/data/2.5/weather?q=$COMUNE&lang=it&appid=65cedfc44104eebe213e05ec9b3f8c9f";
$weather_data=file_get_contents($apiURL);
$json=json_decode($weather_data,TRUE);
$temperatura=intval($json['main']['temp']-273); //converto in celsius e trasformo in intero
$tempMax=intval($json['main']['temp_max']-273);
$tempMin=intval($json['main']['temp_min']-273);
$descrizione=$json['weather'][0]['description'];
$nome=$json['name'];
$umidita=$json['main']['humidity'];
					echo '	<div class="weather-2 meteo-orto">
								<div class="weather-2-header">
									<div class="row">
										<div style="height:18px" class="col-sm-6 col-xs-6">
											<p>'.$nome.'</p>
										</div>
										
									</div>
								</div><!-- /weather-2 header -->
									<div class="row data">
									<div style="text-align:left" class="col-sm-6 col-xs-6 goright">
									<img style="width:35px;height:35px"src="http://openweathermap.org/img/w/'.$json['weather'][0]['icon'].'.png"</img><br>
                                      <p>'.$descrizione.'</p>
                                     									  
									</div>
									<div style="text-align:right">
										<h4><b>'.$temperatura.' ºC</b></h4>
										<h6>'.$tempMax.'º max</h6>
										<h6>'.$tempMin.'º min</h6>
									</div>
									</div>
							</div>';
						 
	  }
	  //STAMPO NUMERO DI PIANTE
$quantita=$connessione_al_server->query("SELECT count(*) as quantita from piante_piantate where ID_orto=$idOrto");
while($cicle=$quantita->fetch_array(MYSQLI_ASSOC))
echo "<div class='numero-piante alert alert-info'>numero di piante: ".$cicle['quantita']."</span></div></div>"; 
 ?>			  
 <div class="contenitore-tabella">
  
  
<table class="table table-bordered table-striped table-condensed tabellaON" id="tabella"> 
<thead>
<tr><th>NOME</th><th>FRUTTO</th><th>FIORI</th><th>FOGLIE</th><th>DIMENSIONE(cm)</th><th>TERRENO</th><th>IRRIGAZIONE</th><th><i style='margin-bottom:4px'class='fa fa-trash-o'></i></th></tr>
</thead>
<?php 

if(session_id() == '') {
    session_start();
}

$utenteAttuale=$_SESSION['ID_utente'];
$query = $connessione_al_server->query("select distinct frutto from tabpiante where ID_piante in(select ID_pianta from piante_piantate where ID_orto=$idOrto )"); //PRENDO SOLO I NOMI DEI FRUTTI 1 VOLTA SOLA
$cont=0;
$cont1=-1;
while($cicle=$query->fetch_array(MYSQLI_ASSOC)){ 

     echo "<tbody>
	 <tr><td><button class='bott-piante destra' id='$cont1' onclick='mostra($cont); gira($cont1); '><i style='font-size:18; margin-top:2px;' class='fa fa-chevron-circle-down'></i></button></td>
	 <td><b>".$cicle['frutto']." <b></td>
	  </tr> </tbody> 
	  
	 <tbody  class='pianta-off' id='$cont'>";
	  $frutto=$cicle['frutto'];
$query2 = $connessione_al_server->query("SELECT * FROM piante_piantate inner join tabpiante on piante_piantate.ID_pianta=tabpiante.ID_piante and piante_piantate.ID_orto='$idOrto' and tabpiante.frutto='$frutto'"); //seleziono solo le info di quel frutto
while($cicle2=$query2->fetch_array(MYSQLI_ASSOC)){ 
    $id=$cicle2['ID_piante']; 
	
	
echo " 
       <tr>
      <td class='caselleTabellaOrti'>" .$cicle2['nome']."</td>
    <td class='caselleTabellaOrti'>".$cicle2['frutto']."</td>
    <td class='caselleTabellaOrti'>".$cicle2['fiori']."</td>
    <td class='caselleTabellaOrti'>".$cicle2['foglie']."</td>
    <td class='caselleTabellaOrti'>".$cicle2['dimensione']."</td>
    <td class='caselleTabellaOrti'>".$cicle2['terreno']."</td>
    <td class='caselleTabellaOrti'>".$cicle2['irrigazione']."</td>
    <td><a href='assets/PHP/delete.php?id=$id&idOrto=$idOrto'><i class='fa fa-trash-o'></i></a></td>
	</tr>"; 
	 
} 
echo "</tbody>";
$cont++;
$cont1--;
}	 
echo "</table> ";
$query10 = $connessione_al_server->query("select frutto from tabpiante");
echo"<form method='GET' action='assets/PHP/inserirePianta.php'>
<input type='hidden'  name='idOrto' value=$idOrto></input>" .//gli passo anche l'id dell'orto.
"<select class='select-inserisci' name='scelta'>";
while($temp=$query10->fetch_array(MYSQLI_ASSOC)){ 
    echo "<option>".$temp['frutto']."</option>";
}
echo "</select>";
echo "<button type='submit' class='btn-add-pianta'><i class='fa fa-check' aria-hidden='true'></i>Aggiungi</button>";
echo "</form>
 </div>";

?>       
                  	

					
                 
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  
          </section>
      </section>

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
    <script type="text/javascript" src="assets/js/inactive.js"></script>
	
	
	
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
    
<script>
function tabellaONOFF()//MOSTRA-NASCONDI TABELLA ORTO
{ 
var temp=document.getElementById('tabella')
if(temp.classList.contains("tabellaOFF")) //SE TABELLAOFF SI TROVA NEL ELEMENTO, SOSTITUISCILA CON TABELLAON
{
temp.classList.add('tabellaON');
temp.classList.remove('tabellaOFF');
}
else
{
temp.classList.add("tabellaOFF");
temp.classList.remove("tabellaON");
}
}

function mostra(id) //MOSTRA-NASCONDI LE VARIE PIANTE
{   //alert(id);
     var temp1=document.getElementById(id);
	if(temp1.classList.contains("pianta-off")) //SE TABELLAOFF SI TROVA NEL ELEMENTO, SOSTITUISCILA CON TABELLAON
{
temp1.classList.add('pianta-on');
temp1.classList.remove('pianta-off');
}
else
{
temp1.classList.add("pianta-off");
temp1.classList.remove("pianta-on");
}
}

function gira(x){
	
	var temp1=document.getElementById(x);
	if(temp1.classList.contains("destra")) 
{
temp1.classList.add('giu');
temp1.classList.remove('destra');
}
else
{
temp1.classList.add("destra");
temp1.classList.remove("giu");
}
}


</script>

  </body>
</html>
