﻿<?php
session_start();
//include("/assets/PHP/login.php"); 
include("/assets/PHP/DB_connect.php");
include ("/assets/PHP/popupNewOrto.php");
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
    
    

    <title>MyOrto-Home</title>
    

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/stile.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

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

  <body  >

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
              <center>
              <h2 id="titolo">IRRIGAZIONE A GOCCIA </h2>
              </center>
              <br>
              <br>
                <div id="descrizione">
           Un altro modo molto efficace di irrigare l'orto è tramite il sistema a goccia, in quanto permette di somministrare l'acqua alle piante direttamente
           sulle loro radici; inoltre è anche piuttosto comodo poiché tale sistema è dotato di un pratico timer, con il quale si possono facilmente programmare gli 
           orari delle irrigazioni, risparmiando tempo e fatica. Anche in questo caso è possibile realizzarlo senza l'ausilio di personale esperto. 
           Occorrerà acquistare il kit in un negozio specializzato di bricolage o di giardinaggio. Esso comprende un lungo tubo di plastica flessibile, generalmente di
           una sessantina di metri e i raccordi per fissarlo e personalizzarlo in base alle diverse esigenze. Ad una estremità del tubo andrà poi installato un 
           dispositivo a cipolla che trasformerà il getto dell'acqua in una pioggerella leggera. Se le istruzioni allegate verranno eseguite correttamente, l'opera di 
           montaggio dovrebbe concludersi nell'arco di un paio di ore. Se lo si desidera, è possibile sistemare il tubo sottoterra per migliorare l'aspetto estetico 
           dell'orto e guadagnare spazio ulteriore. L'impianto a goccia si rivela comodo anche perchè è possibile una sua precisa pianificazione, grazie al timer che
           permette di far partire la sessione irrigatoria e di spegnerla automaticamente. L'acqua erogata cadrà goccia a goccia sul terreno in cui sono seminate le
           piante, fornendo una irrigazione lenta e profonda. A seconda del clima presente nella zona geografica, andranno effettuate innaffiature da una a due volte
           la settimana, meglio al mattino presto, per un maggior beneficio degli ortaggi. Uno dei problemi più frequenti di questo tipo di impianto riguarda gli ugelli,
           che a volte si intasano a causa di residui di sabbia o terreno. Basterà però togliere i detriti da queste sezioni per un corretto funzionamento dell'impianto.
           Sarà inoltre necessario lavare periodicamente il sistema a goccia svitando l'estremità tappata del tubo, così da permettere all'acqua di defluire liberamente 
           e far scorrere qualsiasi residuato.
		   </div>
  <center>
  <br>
  <br>
 <img src="./assets/img/irrigazione-a-goccia.jpg" width=400; height=300; >
          </center>        	
					
                 
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						
                    
                      
                        <!-- CALENDAR
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div> <!-- /col-lg-3 -->
               <! --/row -->
          </section>
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

    <script src="assets/js/notify.js"></script>
    <script>$( document ).ready(function() {
    notifyMe();
}); </script>

   
	
	
	

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
