<?php
session_start();
//include("/assets/PHP/login.php"); 
//include("/assets/PHP/DB_connect.php")
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
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   
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
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-file-text-o"></i>
                            <span class="badge bg-theme">x</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-bullhorn"></i>
                            <span class="badge bg-theme">y</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
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
                     
                          <li><a  href="paginaOrto.php">Orto 1</a></li>
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  

                  <li class="sub-menu">
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
                  </li>
                       <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Guide</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="Irrigazione.php">Irrigazione</a></li>
                          <li><a  href="Fertilizzazione.php">Fertlizzazione</a></li>
                          <li><a  href="Proprieta_ortaggi.php">Propietà ortaggi</a></li>
                          <li><a  href="Accessori_utili.php">Accessori utili</a></li>
                      </ul>
                  </li>

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
              <h2>FERTILIZZAZIONE </h2>
              </center>
              <br>
              <br>
                
              <strong>
Per fertilizzazione s'intende l'apporto di un materiale di qualsiasi natura, detto fertilizzante, con lo scopo di migliorare uno o più aspetti della fertilità del terreno. Dal punto di vista tecnico, i fertilizzanti sono distinti in tre categorie, in funzione del tipo di fertilità con cui interagiscono.<br>

_Gli ammendanti sono quei fertilizzanti che migliorano le proprietà fisiche del terreno e, attraverso queste, influenzano le proprietà chimiche e quelle biologiche. È perciò da considerarsi ammendante un materiale che equilibri una tessitura anomala o che conferisca struttura ad un terreno incoerente o che ne migliori lo stato strutturale stabilizzandolo. Ad esempio, sono da considerarsi ammendanti, nel contesto specifico, i seguenti materiali:<br>

materiali argillosi, limitatamente all'apporto in terreni sabbiosi (azione equilibrante sulla tessitura);<br>

Sabbia, limitatamente all'apporto in terreni argillosi (azione equilibrante sulla tessitura);<br>

letame o altro materiale organico che incrementi il tenore di humus nel terreno (azione migliorativa e stabilizzante sulla struttura).<br>

_I correttivi sono quei fertilizzanti che migliorano la reazione del terreno spostando il pH da valori anomali verso la neutralità. Potenzialmente hanno azione correttiva tutti quei materiali che sono costituzionalmente o fisiologicamente acidi o alcalini. Sono tradizionalmente considerati correttivi la calce e il calcare nei terreni a reazione acida, e lo zolfo[1] e il gesso nei terreni basici con alcalinità costituzionale (terreni calcarei). L'efficacia dei correttivi è condizionata da vari fattori:<br>

1)Comportamento chimico dei componenti prevalenti. In questo caso è fondamentale la composizione del correttivo e la natura chimica dei suoi componenti: le basi e gli acidi hanno un'azione correttiva più efficace dei sali, la cui azione è fondamentalmente dovuta a fenomeni di idrolisi salina o di assorbimento selettivo da parte delle piante (materiali fisiologicamente acidi o basici). Ad esempio, la calce e lo zolfo hanno un'azione correttiva più efficace, rispettivamente, del calcare e del gesso.<br>
                  
2)Grado di finezza del materiale. Il grado di finezza ha riflessi sulla superficie di sviluppo ed è di particolare importanza per i correttivi rappresentati da sali poco solubili come il calcare e il gesso. Questi materiali, infatti, hanno un'efficacia relativa, come correttivi, solo se finemente macinati, mentre la frantumazione grossolana li rende sostanzialmente inerti.<br>
                  
3)Potere tampone del terreno. Il complesso di scambio del terreno e, in misura minore, la composizione della frazione minerale della soluzione circolante hanno un'intrinseco potere tamponante che tende a compensare le variazioni di pH. Il potere tampone si manifesta in maniera più intensa proprio nei confronti degli interventi correttivi, in ogni caso varia in funzione delle cause che sono alla base della reazione anomale.<br>
                  
L'opportunità di un intervento correttivo è determinata dalle reali necessità, dalla sostenibilità economica e dall'efficacia intrinseca dell'intervento, soprattutto in relazione al potere tampone del terreno. Il concorso di questi fattori rende varia notevolmente secondo il contesto:<br>

Terreni sodici. I terreni con alcalinità di assorbimento, dovuta ad un eccesso di sodio nel complesso di scambio e di sali di sodio a idrolisi alcalina nella soluzione circolante (carbonato di sodio e bicarbonato di sodio), presentano problemi agronomici tali da rendere poco opportuna, se non del tutto sconveniente, la correzione. La scarsa vocazione agronomica è infatti dovuta agli effetti negativi del sodio sulla struttura del terreno, che prevalgono sull'interferenza, da parte del pH, con la nutrizione minerale delle piante.<br>
                  
Terreni calcarei. I terreni con alcalinità costituzionale, dovuta ad un eccesso di calcare attivo possono essere corretti con l'apporto di zolfo o di gesso, con efficacia subordinata all'effettivo potere tampone del terreno. I correttivi acidificanti hanno un costo relativamente alto che difficilmente può essere compensato dalla remuneratività dei benefici della correzione. Va anche precisato che i terreni calcarei possono offrire buone prestazioni di produttività con un'adeguata scelta delle colture (specie agraria, cultivar, portinnesto) e con l'adozione di opportuni accorgimenti agronomici.<br>
                  
Terreni acidi. In questi terreni la reazione anomala rappresenta il principale fattore limitante in quanto interferisce negativamente sulla nutrizione minerale, sia per la carenza di basi (in particolare il calcio), sia per l'insolubilizzazione del fosforo. In subordine all'effetto tampone, i terreni acidi sono perciò quelli che rispondono meglio alla correzione del pH.<br>

_Sono concimi quei fertilizzanti che migliorano la dotazione del terreno in uno o più elementi della fertilità. Questi fertilizzanti sono perciò apportati al fine di aumentare la dotazione di un terreno povero (concimazione di fondo) o per soddisfare i fabbisogni nutritivi di una coltura senza incorrere nel depauperamento della fertilità del suolo (concimazione ordinaria di produzione).<br>

I concimi sono i fertilizzanti di maggior impiego in agricoltura e il loro impiego si rende necessario soprattutto in un'agricoltura di tipo intensivo, volta ad ottenere rese unitarie elevate. In altre condizioni, il mancato ricorso alla concimazione comporta un lento ma progressivo impoverimento del terreno, che in tempi più o meno lunghi va incontro a fenomeni di insterilimento. Questo problema è particolarmente sentito nelle aree tropicali dei paesi in via di sviluppo, dove la messa a coltura dei terreni naturali, in assenza di interventi di fertilizzazione, intensifica il processo della desertificazione a causa del modesto potere assorbente del terreno e del dilavamento degli elementi nutritivi nei climi piovosi.<br>

I concimi si classificano principalmente in funzione dell'origine del materiale e della composizione chimica, con riferimento al contenuto in uno o più elementi principali della fertilità (azoto, fosforo, potassio).<br>

In base al primo criterio, i concimi sono distinti in tre categorie:<br>

1)Concimi organici. Sono materiali di origine biologica, animale o vegetale, utilizzati tali e quali o opportunamente trattati. Sono concimi organici, ad esempio, il letame, il compost, la pollina, ecc.
Concimi minerali o chimici. Sono materiali ottenuti da una sintesi chimica in un processo industriale (es. l'urea) oppure dall'estrazione con eventuale trattamento industriale (es. il perfosfato minerale, il cloruro di potassio).<br>
                  
2)Concimi organominerali. Sono materiali ottenuti dalla miscelazione di concimi organici con concimi chimici o dal trattamento di materiali organici con agenti chimici.<br>
                  
In base al secondo criterio, applicato fondamentalmente per i concimi chimici, i concimi sono così classificati:<br>

1)Concimi ternari: contengono i tre macroelementi principali della fertilità (NPK).<br>
                  
2)Concimi binari: contengono solo due macroelementi principali della fertilità. Si distinguono in azoto-potassici (NK), azoto-fosfatici (NP) e fosfopotassici (PK).<br>
                  
3)Concimi semplici: contengono un solo macroelemento principale della fertilità, associato eventualmente ad uno o più macroelementi secondari (calcio, zolfo, magnesio) o a microlementi (ferro, rame, boro, ecc.). Si distinguono in azotati, fosfatici e potassici.
 </strong>
  <center>
  <br>
  <br>
 <img src="./assets/img/fertilizzante.jpg" width=800; height=300; >
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
