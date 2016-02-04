<?php
session_start();
include("/assets/PHP/login.php"); 
//include("/assets/PHP/DB_connect.php")
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
                    <li><a class="logout" href="/assets/PHP/logout.php">Logout</a></li>
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
              $connessione_al_server=mysql_connect("localhost","project0101","admin");
			  mysql_select_db("my_project0101",$connessione_al_server);
              $iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
              $sql=mysql_query("SELECT * FROM users WHERE ID_utente='$iduser'")or DIE('query non riuscita'.mysql_error());
			  $result=mysql_fetch_assoc($sql);
              $username=$result['username'];
				//echo '<p="centered"><a href="profile.html"><img src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'"class="img-circle" width="60"</a></p>/>';
			echo '<div style=margin-left:25%; text-align:center"><a href="profiloUtente.php"><img src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'" class="img-circle" width="100"/> </div>';
            echo '<h3 class="centered">'; 
            echo '<i class="fa fa-user"></i>';
            echo  $username;
            echo '</h3></a>';
             ?>
             	  	
                  <li class="mt">
                      
                          <a class="active"  href="index.php">
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
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

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
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
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
          <section class="wrapper site-min-height">
          	<div class="contenitori-utente">
            
			<?php
              $connessione_al_server=mysql_connect("localhost","project0101","admin");
			  mysql_select_db("my_project0101",$connessione_al_server);
              $iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
              $sql=mysql_query("SELECT * FROM users WHERE ID_utente='$iduser'")or DIE('query non riuscita'.mysql_error());
			  $result=mysql_fetch_assoc($sql);
              $username=$result['username'];
				//echo '<p="centered"><a href="profile.html"><img src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'"class="img-circle" width="60"</a></p>/>';
			echo '<img class="imgProfilo" src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'" width="30"/>';
             ?>
         
 
 <button type="button" class="btn btn-default" style="float: right;" data-toggle="modal" href="login.php#popupUtente2">cambia password</button>

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
              $connessione_al_server=mysql_connect("localhost","project0101","admin");
			  mysql_select_db("my_project0101",$connessione_al_server);
              $iduser=$_SESSION['ID_utente']; //oppure $_SESSION['ID_UTENTE']  ISSET..... S SESSION ID UTENTE è DA SETTARE NELL ALTRO FILe(DI LOGIN) O IL FILE CHE SARà
              $sql=mysql_query("SELECT username,email,nome,cognome FROM users WHERE ID_utente='$iduser'")or DIE('query non riuscita'.mysql_error());
			  $result=mysql_fetch_assoc($sql);
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
<form action="./assets/PHP/cambia_psw.php" onsubmit="return validateForm()" method="POST">
<div class="modal-header"><button class="close" type="button" data-dismiss="modal" onclick="document.getElementById('popupUtente2').style.display='none'">×</button>
<h4 class="modal-title">Modifica password</h4>
</div>
<div class="panel-body">
<div class="task-content">
  <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Password </label>
                <input type="password" name="password" class="modificaDatiUtente form-control">
                </div>
     </li>
    </ul>
    
    <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Nuova password </label>
                <input type="password" name="newpassword" class="modificaDatiUtente form-control">
                </div>
     </li>
    </ul>
    
    <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Nuova password </label>
                <input type="password" name="confirmpassword" class="modificaDatiUtente  form-control">
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
  

  </body>
</html>
