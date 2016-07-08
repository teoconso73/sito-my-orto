 <?php
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
              <h2 id="titolo">Proprietà ortaggi </h2>
              </center>
              <br>
              <br>
                
           <strong>
		   Gli ortaggi sono alimenti di origine vegetale appartenenti al VI e VII gruppo degli alimenti.
La definizione "ortaggi" si riferisce ai prodotti dell'orto, ovvero tutti quei frutti, fiori, semi, foglie, fusti, radici, tuberi e bulbi che possono essere coltivati nell'orto, quindi a livello casalingo; Ortaggiè evidente che si tratta di un termine più gergale che merceologico, poiché la SCALA rispetto alla quale vengono coltivate le verdure (sinonimo) non dovrebbe creare differenze tali da poter scindere le due categorie. Tuttavia, questa piccola precisazione, che ad una prima lettura si manifesta come un piccolo cavillo etimologico, dovrebbe indurre una più accurata riflessione sulla diversità qualitativa (se realmente esistente) tra un ortaggio propriamente detto ed un vegetale analogo diffuso su larga scala; nel dettaglio, porterei all'attenzione dei lettori le disuguaglianze di:<br>
Livello/tecnica di produzione<br>
Lunghezza/durata della filiera commerciale<br>
Il livello/tecnica di produzione e la lunghezza/durata della filiera commerciale degli ortaggi ne possono distinguere il valore nutrizionale complessivo ed il relativo impatto sulla salute del consumatore.<br><br>

 
Ortaggi: quali sono?<br><br>

Come anticipato, il gruppo degli ortaggi racchiude numerose tipologie di vegetali prodotti a livello dell'orto; per avere un'idea più precisa di quali siano e del loro consumo effettivo, di seguito ne elencheremo le tipologie più note e diffuse:<br>
_Ortaggi a frutto: sono ortaggi a frutto tutte le drupe, le bacche, gli esperidi e i pomi, quindi i pomodori, le zucchine, le melanzane, i cetrioli, le zucche e i peperoni<br>
_Ortaggi a fiore: carciofo, cavolfiore, broccolo, asparago, fiore di zucca ecc<br>
_Ortaggi a seme: i legumi: tutti i fagioli, ceci, cicerchie, lenticchie, piselli, fave, lupini ecc. NB. I cereali non sono considerati ortaggi poiché la loro coltivazione prevede limiti di produzione (resa per superficie) talmente elevati da NECESSITARE appezzamenti maggiori di quelli intesi per un semplice "orto"<br>
_Ortaggi a foglia: lattughe, radicchio (verde e rosso), rucola, valeriana, borragine, spinacio, catalogna, cavolo, cavolo cappuccio, bietola, cicoria, tarassaco, ecc<br>
_Ortaggi a fusto o a bulbo: sedano, finocchio*, cardo ecc<br>
_Ortaggi a tubero: patata, patata americana, topinambur ecc<br>
_Ortaggi a bulbo: finocchio*, aglio, cipolla, scalogno, porro, ecc.<br><br>

 
Ortaggi: proprietà nutrizionali<br>

Gli ortaggi e le verdure in genere sono alimenti vegetali che si accomunano per l'apporto di:<br>
_Acqua<br>
_Fibra alimentare e carboidrati NON disponibili: sia solubili che insolubili<br>
_Carboidrati disponibili: sia semplici (fruttosio) che complessi (amido)
Proteine a basso e medio valore biologico: medio SOLO per i legumi, basso per tutti gli altri ortaggi<br>
_Acidi grassi di tipo insaturo: monoinsaturi e polinsaturi non essenziali (soprattutto acido oleico omega-9) e polinsaturi essenziali (soprattutto acido linoleico omega-6 e α-linolenico omega-3)<br>
_Steroli vegetali, lecitine, antiossidanti e altre molecole utili: fitosteroli/fitoestrogeni (che ostacolano l'assorbimento del colesterolo e dovrebbero ridurre i sintomi della sindrome climaterica), lecitine (che migliorano ANCHE A LIVELLO METABOLICO la colesterolemia), polifenoli antiossidanti ecc.<br>
_Vitamine idrosolubili e liposolubili: soprattutto vitamina C (acido ascorbico), vitamina A (retinolo equivalenti) ed acido folico
Sali minerali: soprattutto potassio (K) e magnesio (Mg), ma anche ferro (Fe - anche se poco biodisponibile) e calcio (Ca)<br>
_Molecole anti-nutrizionali e chelanti: ad esempio acido fitico, acido ossalico, tannini ecc, che legano alcuni sali minerali (ferro, calcio, zinco e selenio) ostacolandone l'assorbimento.<br><br>
Differenze tra ortaggi e verdure commerciali<br>

Come summenzionato, le differenze tra ortaggi e verdure commerciali nascono da: livello/tecnica di produzione e dalla lunghezza/durata della filiera commerciale.<br>

Livello/tecnica di produzione degli ortaggi/verdure: senza entrare troppo nello specifico, ricordiamo che per coltivare i vegetali su larga scala è necessario rispettare uno specifico disciplinare di produzione; questo, che può essere di tipo agricoltura tradizionale, lotta integrata o agricoltura biologica, impone degli standard ben precisi, i quali, se da un lato garantiscono l'uniformità delle verdure in commercio, dall'altro non lasciano spazio alla cura "dei dettagli", aspetto peculiare degli ortaggi prodotti a livello casalingo o comunque su piccola scala. Ne sono alcuni esempi: il diserbo a mano, la potatura manuale, l'utilizzo di concimi organici tipo compostum o letame, il cambio o l'aggiunta della terra, il rispetto della stagionalità, il rispetto della maturazione ecc. Tutto questo si ripercuote in maniera relativamente positiva (rispetto all'esperienza e alla dedizione del curante) sulla qualità dell'ortaggio maturo. NB. Non è comunque detto che un ortaggio DEBBA essere di qualità superiore ad una verdura commercializzata su larga scala; spesso, coltivando a livello casalingo senza l'ausilio di antiparassitari, anticrictogamici e diserbanti, le piante vengono infettate/infestate concludendo NEGATIVAMENTE il ciclo di maturazione.<br>

Lunghezza/durata della filiera commerciale: per farla breve, l'ortaggio/verdura staccato o eradicato o tagliato inizia subito un processo di deterioramento enzimatico, di decomposizione e di ossidazione. Le tecniche di conservazione impiegate sui i vegetali freschi appartenenti ad una filiera lunga (refrigerazione, atmosfera controllata, atmosfera modificata ecc.) sono molto efficaci (soprattutto contro il deterioramento ossidativo e la decomposizione batterica/micotica, meno verso quello enzimatico), ma non bloccano completamente il deperimento del prodotto (soprattutto l'aspetto enzimatico). Ciò si traduce in una riduzione significativa del valore organolettico, gustativo e nutrizionale (soprattutto vitaminico) dei vegetali commercializzati in filiera lunga; dal canto loro, gli ortaggi prodotti a livello casalingo possiedono un'integrità praticamente assoluta. NB. Ricordiamo che per i consumatori è comunque possibile (quasi ovunque) approvvigionarsi presso piccoli commercianti di "filiera corta".
 </strong>
  <center>
  <br>
  <br>
 <img src="./assets2/images/ortaggi.jpg" width=400; height=300; >
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
