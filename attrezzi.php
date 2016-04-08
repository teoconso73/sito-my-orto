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
              <h2>ATTREZZI PER L' ORTO </h2>
              </center>
              <br>
              <br>
                
              <strong>
Quali sono gli attrezzi fondamentali per coltivare un orto? La risposta è: dipende, perché a seconda della tipologia di orto potrebbero essere necessari strumenti anche molto costosi e tecnologici. In realtà per gli orti amatoriali gli attrezzi fondamentali sono diversi, ma tutti abbastanza semplici e relativamente costosi; è però importante che siano di buona fattura perché, se trattati con cura, potranno durare molto a lungo.<br>

Nella scelta degli attrezzi da orto bisogna prendere in considerazione soprattutto la robustezza e la funzionalità; appare a tutti ovvio che, per esempio, l’ergonomicità dell’attrezzo e il suo peso debbano essere adeguati alle capacità dell’utilizzatore. Molta attenzione deve essere per esempio messa nella scelta del manico della vanga o della zappa. Esistono manici in diversi materiali: legno, metallo e plastica. Ci sentiamo di sbilanciarci verso il legno che ha dalla sua maneggevolezza e robustezza. Il legno migliore per i manici degli attrezzi da orto è il frassino, anche se il più diffuso è probabilmente il faggio.<br>

Passiamo quindi a una breve rassegna degli attrezzi fondamentali per la coltivazione dell’orto.<br><br>

Vanga<br>

In commercio esistono diversi tipi di vanga; sostanzialmente la differenza fondamentale fra l’una e l’altra è relativa alla lama che è fissata al manico; essa può essere di forma quadrata, rettangolare o a scudo; esistono anche vanghe a rebbi, molto simili ai forconi, ma nelle prime i rebbi sono più corti e dritti; è un tipo di vanga che è particolarmente adatta alla lavorazione di quei terreni che si presentano particolarmente compatti e argillosi. La vanga è simile alla pala, ma a differenza di questa la forza utilizzata per affondare la lama del terreno è quella del piede anziché quella delle braccia; nella sua parte inferiore infatti la vanga presenta una staffa poggiapiede in metallo che serve a spingere la lama nel terreno in modo particolarmente agevole.  La vanga serve a rivoltare le zolle, a romperle e a preparare il terreno per la procedura della semina.<br><br>

 Zappa<br>

Come nel caso della vanga, i modelli di zappa in commercio sono diversi. Dal momento che la zappa è un attrezzo di uso abbastanza frequente nella coltivazione dell’orto è bene, al momento dell’acquisto, fare alcune prove e scegliere il modello che più riteniamo adatto alle nostre capacità e alla nostra forza. Sostanzialmente esistono zappe di due tipi; quelle con la lama appuntita e quelle a lama trapezoidale. La zappa a lama appuntita serve in particolar modo per rincalzare il terreno (la rincalzatura consiste nell’ammucchiare il terreno intorno al piede della pianta per proteggerla meglio dal freddo), mentre la zappa con la lama trapezoidale viene utilizzata per altre lavorazioni quali la rottura del terreno e delle zolle, la sarchiatura (una lavorazione che consente di estirpare le erbacce e di far respirare le radici delle piante) e la formazione dei solchi.<br><br>

Pala o badile<br>

La pala è un attrezzo molto simile alla vanga, ma per la lavorazione dell’orto è molto meno utilizzata. Consta sostanzialmente di un manico al quale è fissata una lama lievemente concava di forma quadrata o triangolare. Viene usata per togliere la terra o altri materiali.<br><br>

Forcone<br>

 
Con il forcone vengono eseguite diverse lavorazioni; con esso infatti si sminuzzano le zolle, si dà aria al terreno dell’orto e si eseguono gli spostamenti dei materiali organici e del letame.

Il forcone può avere sia rebbi curvi (più comuni) e rebbi piatti; solitamente il materiale migliore è l’acciaio temprato.

Viene anche utilizzato per rimuovere le erbe falciate e i piccoli rami e anche per dissotterrare i tuberi; in quest’ultimo caso si utilizza il forcone a denti piatti.

Rastrello

Esistono diversi tipi di rastrello; per la lavorazione dell’orto però è necessario solo quello in metallo la cui lunghezza può variare dai 30 ai 60 cm circa; i rebbi devono essere corti; l’uso principale del rastrello è quello della livellatura del terreno, ma può servire anche per la sbriciolatura delle zolle e per la copertura delle sementi e, se necessario, per sarchiature sommarie.

I rastrelli a denti flessibili sono utilizzati invece non tanto per la lavorazione dell’orto, ma per rimuovere le foglie secche che cadono dagli alberi.<br><br>

Sarchiello (sarchiatore o erpicature manuale)<br>

Il sarchiello è sostanzialmente un attrezzo con tre denti che viene utilizzato a mo’ di zappa e cui scopi principali sono quelli di provvedere alla rimozione delle erbacce e di arieggiare le zolle fra un ortaggio e l’altro.<br><br>

Trapiantatoio<br>

È la tipica paletta che non può mancare fra gli attrezzi utilizzati di chi si occupa di giardinaggio e che viene utilizzata spesso anche da chi cura l’orto. In commercio vi sono trapiantatoi in metallo, legno o plastica. Il trapiantatoio viene usato soprattutto quando si devono sradicare le piccole piante dal semenzaio per poi ripiantarle nel luogo a cui sono destinate. La lama deve essere abbastanza spessa e il manico dovrebbe essere il più ergonomico possibile visto il frequente uso che se ne fa.<br><br>

Piccone<br>

Raramente si usa il piccone nell’orto se non nel caso in cui non sia necessario procedere al dissodamento di terreni particolarmente compatti; può essere utile, grazie al suo unico dente lungo e appuntito, per preparare solchi piuttosto stretti o scavare buche.<br><br>

Carriola<br>

attrezzi da ortoLa carriola è un attrezzo indispensabile per tutti gli spostamenti laboriosi; la si usa infatti per il trasporto dei letami, dei rifiuti vegetali, del compost e anche per trasportare i materiali che servono alla costruzione e alla progettazione dell’orto.

La carriola più tradizionale è in metallo e ha una ruota in gomma, ma esistono anche modelli più moderni costruiti con materiali plastici molto resistenti e più leggeri. In commercio, nei negozi specializzati, è possibile trovare carriole pieghevoli in tela impermeabile che però non possono essere utilizzate in tutte le circostanze.<br><br>

Coltello da innesto<br>

Un attrezzo diffuso fra gli orticultori è sicuramente il coltello da innesto; la sua struttura dipende a seconda del tipo di innesto che si deve effettuare.

Nel caso di innesti a corona si utilizzano coltelli a lama fissa noti anche come coltelli a ronchetto (o a falcetto).

Per effettuare gli innesti a spacco si ricorre solitamente a coltelli a fenditoio la cui lama ha una forma squadrata.

Per gli innesti a doppio spacco inglese e per gli innesti a corona si ricorre ai coltelli a innesto di tipo germanico.

Nel caso di innesto a pezza si può usare il coltello a doppia lama, mentre per l’innesto a zufolo è consigliabile utilizzare il coltello da innesto a quattro lame.

L’innesto a triangolo, non particolarmente comune, viene effettuato con il coltello a triangolo, mentre l’innesto a gemma richiede l’uso di un coltello dotato di una sporgenza sulla porzione opposta alla lama.<br><br>

Forbici<br>

Nell’orto se ne fa un uso piuttosto marginale, ma è bene che siano presenti fra gli attrezzi dell’orticultore perché possono tornare utili per eseguire alcuni lavoretti.

Una particolare tipologia di forbici è quella delle forbici da innesto; sono generalmente più costose dei coltelli da innesto, ma permettono di realizzare le incisioni con maggiore facilità.<br><br>

Seghetto per potatura<br>

Il seghetto per potatura sono degli strumenti non eccessivamente grandi che richiamano vagamente la forma dei coltelli a lama richiudibili. In commercio si trovano anche modelli professionali con lame a dentatura particolare e a orientamento decrescente.<br><br>

Foraterra<br>

Il foraterra è uno strumento in legno o in plastica dotato di un’estremità a forma di cono che serve per fare le buche in terra necessarie ad accogliere le piante che vengono tolte dal semenzaio oppure quelle che vengono acquistate nei vivai.<br><br>

Annaffiatoio<br>

L’annaffiatoio è utile per sostituire l’annaffiatura con il tubo di gomma in quei casi in cui questa non è indicata, per esempio subito dopo il trapianto delle piante.<br><br>

Sgorbia<br>

La sgorbia è un’asta in metallo la cui parte terminale è a forma di coda di rondine; serve a recidere gli asparagi o a togliere dal terreno le radici a fittone più profonde. La sgorbia viene anche chiamata da alcuni estirpa-asparagi.<br><br>

Piantabulbi<br>

Inserire il piantabulbi fra gli attrezzi fondamentali è sicuramente un po’ forzato, ma certamente questo attrezzo in metallo a forma di cono tronco e dotato di un’impugnatura nella parte più larga e con un’estremità inferiore affilata e dentata, è sicuramente un oggetto molto utile a chi pratica l’orticoltura e il giardinaggio. Il piantabulbi consente di scavare piccole buche nel terreno estraendo comodamente la terra; si usa infilandolo nel terreno e premendo con una certa forza sull’impugnatura. Il piantabulbi è quindi uno strumento molto utile quando si deve piantare, interrare e praticare buchi nel terreno per i più svariati motivi.<br><br>

Motozappa<br>

orto attrezziPer orti più grandi, ma comunque con un’estensione inferiore ai 1.000 metri quadrati, può essere utile l’ausilio di una motozappa, un attrezzo a motore che velocizza molto determinati lavori (taglio delle erbe e fresatura). Si tratta sostanzialmente di una macchina con un motore a bassa potenza (di solito 8 cavalli) dotata di una fresa rotativa e di uno sperone. La motozappa con la fresa sminuzza la terra; lo sperone, che può essere alzato o abbassato, serve a impostare la profondità della lavorazione. La motozappa è dotata di un manubrio a forma di V sul quale si trovano generalmente tutti i comandi; viene spostata dall’operatore che la segue stando in piedi. La motozappa viene in genere avviata grazie a una fune a strappo, ma vi sono modelli (più costosi) nei quali l’accensione è di tipo elettrico.<br><br>

Motocoltivatore<br>

Per orti particolarmente estesi (estensione maggiore di 1.000 metri quadrati) è possibile utilizzare una variante della motozappa, il motocoltivatore. Il motore del motocoltivatore ha una potenza mediamente superiore di quella della motozappa; in genere infatti si parte dai 10 cavalli di potenza e si può arrivare anche ai 15. Sistema di avviamento e manubrio sono simili a quelli della motozappa. Oltre a essere dotata di fresa, al motocoltivatore si possono collegare altri attrezzi utili alla lavorazione del terreno (aratro, barra falciante, seminatrice ecc.).<br><br>

Una raccomandazione importante<br>

Una raccomandazione che si può dare per tutti gli attrezzi da orto, sia per quelli più semplici che per quelli più sofisticati, è quella di ripulirli con cura alla fine delle lavorazioni; se la manutenzione sarà accurata i nostri attrezzi dureranno molto a lungo e manterranno la loro efficacia evitandoci inutili spese. Durante la pulizia è bene indossare dei guanti. Le lame vanno pulite e asciugate accuratamente e, nel caso, può essere utile lubrificare le parti mobili e affilare le lame. Gli attrezzi non vanno mai lasciati sparsi per l’orto, ma riposti in un luogo al riparo dalla pioggia e tenuto sempre pulito.<br>
 </strong>
  <center>
  <br>
  <br>
 <img src="./assets/img/attrezzi.jpg.jpg" width=800; height=300; >
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
