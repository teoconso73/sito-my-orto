<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
		<link rel="icon" href="images/favicon.ico" />
        <title>CONTATTACI</title>
        <meta name="description" content="">
		<font face=”Arial”>
<!-- 
Travel Template
http://www.templatemo.com/tm-409-travel
-->
        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="site-header">
            <div class="container">

                <div class="main-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-10">
                            <div class="logo">
                                <a href="#">
                                    <img src="images/logologo1.png">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-6 col-xs-2">
                            <div class="main-menu">
                                <ul class="visible-lg visible-md">
                                    <li><a href="home.php">HOME</a></li>
                                    <li><a href="cosa_facciamo.html">COSA FACCIAMO</a></li>
                                    <li><a href="chi_siamo.html">CHI SIAMO</a></li>
                                	
                                    <li class="active"><a href="contatti.html">CONTATTACI</a></li>
                                </ul>
                                <a href="#" class="toggle-menu visible-sm visible-xs">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div> <!-- /.main-menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                </div> <!-- /.main-header -->
                <div class="row">
                    <div class="col-md-12 visible-sm visible-xs">
                        <div class="menu-responsive">
                            <ul>
                                <li><a href="home.html">HOME</a></li>
                                <li><a href="cosa_facciamo.html">COSA FACCIAMO</a></li>
                                <li><a href="chi_siamo.html">CHI SIAMO</a></li>
                                
                                <li class="active"><a href="contatti.html">CONTATTACI</a></li>
                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->

        <div class="page-top" id="templatemo_contact">
        </div> <!-- /.page-header -->

        <div class="contact-page">
        <?php
        if(($_GET['mailtrue']==1))
{
//echo '<br>';  
echo '<div style="text-align: center" ><font color="green" size="5">&nbsp &nbsp  MAIL INVIATA CORRETTAMENTE.RICERVERAI UNA RISPOSTA AL PIÙ PRESTO</font></div>';
echo '<br>';
echo '<br>';
}
 if(($_GET['mailfalse']==1))
{
//echo '<br>';  
echo '<div style="text-align: center" ><font color="red" size="5">&nbsp &nbsp  PROBLEMA NELL\'INVIO DELLA MAIL.CONTROLLA I TUOI DATI</font></div>';
echo '<br>';
echo '<br>';
}
?>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6 map-wrapper">
                        <h3 class="widget-title">DOVE SIAMO</h3>
                        <div class="map-holder"></div>
                        <div class="contact-infos">
                            <ul>
                                <li>Via santa Caterina da Siena 1 </li>
                                <li>Mariano Comense,CO</li>
                                <li>Email:infomyorto@yahoo.it </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <h3 class="widget-title">CONTATTACI</h3>
                        <div class="contact-form">
                            <form name="contactform" id="contactform" action="contact.php" method="post">
                                <p>
                                    <input name="name" type="text" id="name" placeholder="Nome">
                                </p>
                                <p>
                                    <input name="email" type="text" id="email" placeholder="Email"> 
                                </p>
                                <p>
                                    <input name="subject" type="text" id="subject" placeholder="Titolo"> 
                                </p>
                                <p>
                                    <textarea name="message" id="message" placeholder="Messaggio"></textarea>    
                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="Invia messaggio">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div>
                </div>
            </div>
        </div>




        



        <div class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="images/logologo1.png" alt="">
                            </a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">
                            <span>Copyright &copy; 2016 <a href="#">My Orto</a></span>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <ul class="social-icons">
                         <li><a href="#" class="fa fa-facebook" onclick="location.href='http://www.facebook.com'"></a></li>
                            <li><a href="#" class="fa fa-twitter" onclick="location.href='http://www.twitter.com'"></a></li>
                           <li><a href="#" class="fa fa-rss"></a></li>
                        </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

          <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('.first-map, .map-holder').gmap3({
                    marker:{
                        address: '45.6868272,9.17866129999993' 
                    },
                        map:{
                        options:{
                        zoom: 16,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            });
        </script>
       
        <!-- templatemo 409 travel --></div>
    </body>
</html>