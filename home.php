<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="icon" href="assets2/images/favicon.ico" />
        <title>HOME</title>
        <meta name="description" content="">
		<font face=”Arial”>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' /> 
        <meta name="viewport" content="width=device-width">
		<meta name="author" content="templatemo">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
		<link href="assets2/css/gsdk-base.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets2/css/font-awesome.css">
        <link rel="stylesheet" href="assets2/css/animate.css">
        <link rel="stylesheet" href="assets2/css/templatemo_misc.css">
        <link rel="stylesheet" href="assets2/css/templatemo_style.css">
	
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#signin").click(function(){
        $("#div1").fadeIn(95);   //oppure fadeIn("slow") o fadeIn(3000); velocità
		$("#div1").css({top:-50,position:"absolute"}); 
		$("#div1").css({position:"fixed"}); 	
				
		$("#div1").animate({top:20}, 400,function() {
		});
$("#opaco13").css({"opacity": "0.5", "-ms-filter":" progid:DXImageTransform.Microsoft.Alpha(opacity=50)" });
$("#opaco12").css({"opacity": "0.5", "-ms-filter":" progid:DXImageTransform.Microsoft.Alpha(opacity=50)" });
$("#opaco34").css({"opacity": "0.5", "-ms-filter":" progid:DXImageTransform.Microsoft.Alpha(opacity=50)" });   
   });
   
	   
	   $("#close").click(function(){
        $("#div1").fadeOut();   //oppure fadeIn("slow") o fadeIn(3000); velocità
		$("#opaco34").css({ "opacity": "1", "-ms-filter": "progid:DXImageTransform.Microsoft.Alpha(opacity=100)" });
		$("#opaco12").css({ "opacity": "1", "-ms-filter": "progid:DXImageTransform.Microsoft.Alpha(opacity=100)" });
		$("#opaco13").css({ "opacity": "1", "-ms-filter": "progid:DXImageTransform.Microsoft.Alpha(opacity=100)" });
    });
});
</script>


        <!--<script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>-->
		 <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
		 </head>
    
    <body>
       
	<div id="opaco34">    <!-- IMPORTANTE tutto ciò che si deve opacizzare dopo l'apertua del popup va messo dentro qui -->

                <div class="main-header">
                    
                        <div class="col-md-4 col-sm-6 col-xs-10">
                            <div class="logo">
                                <a href="#">
                                    <img src="assets2/images/logologo1.png" alt="travel html5 template" title="travel html5 template">  <!-- cambiare immagine  -->
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-6 col-xs-2">
                            <div class="main-menu">
                                <ul class="visible-lg visible-md">
                                    <li class="active"><a href="home.php">HOME</a></li>
                                    <li><a href="cosa_facciamo.html">COSA FACCIAMO</a></li>
                                  
                                    <li><a href="chi_siamo.html">CHI SIAMO</a></li>
                                    <li><a href="contatti.php">CONTATTACI</a></li>
									
									
									
									<button style="background:#9ed034; color:white;" type="button" class="mainBtn" id="submit" name="loginsito" onclick="location.href='/Progetto/login.php'">ACCEDI</button> 
									<button style="background:#9ed034; color:white;" type="button" class="mainBtn" id="signin" name="signupsito">REGISTRATI</button> 
									 
								
                                <a href="#" class="toggle-menu visible-sm visible-xs">
                                    <i class="fa fa-bars"></i>
                                </a>
                            
                     
                   </div>
           
                <div class="row">
                    <div class="col-md-12 visible-sm visible-xs">
                        <div class="menu-responsive">
                            <ul>
                                <li class="active"><a href="home.html">HOME</a></li>
                                <li><a href="cosa_facciamo.html">COSA FACCIAMO</a></li>
                                
                                <li><a href="chi_siamo.html">CHI SIAMO</a></li>
                                <li><a href="contatti.html">CONTATTACI</a></li>
                            </ul>
                        </div> <!-- /.menu-responsive -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
			<?php 
			if(isset($_GET['selectimg']) && $_GET['selectimg']==1 )  
			{
				echo '<br>';  
				echo '<font color="red" size="3">Seleziona un\'immagine!</font>';
			} 
			if(isset($_GET['big']) && $_GET['big']==1 )  
			{
				echo '<br>';  
				echo '<font color="red" size="3">Immagine troppo grande!</font>';
			} 
			if(isset($_GET['utente_er']) && $_GET['utente_er']==1 )  
			{
				echo '<br>';  
				echo '<font color="red" size="3">Nome utente già presente nei nostri archivi!</font>';
			} 
			if(isset($_GET['mail_er']) && $_GET['mail_er']==1 )  
			{
				echo '<br>';  
				echo '<font color="red" size="3">Email già presente nei nostri archivi!</font>';
			} 
			if(isset($_GET['notregister']) && $_GET['notregister']==1 )  
			{
				echo '<br>';  
				echo '<font color="red" size="3">Registrazione fallita!</font>';
			}
			if(isset($_GET['register']) && $_GET['register']==1 )  
			{
				echo '<br>';  
				echo '<font color="green" size="2">Registrazione effettuata con successo! Ti è stata inviata un mail contenente i tuoi dati d\'accesso</font>';
			} 
			
?>
        </div> <!-- /.site-header -->


        <div class="flexslider">
            <ul class="slides">
         
                <li>
                    <div class="overlay"></div>
                    <img src="assets2/images/orto2.jpg" width="720" height="640"alt="Special 1">
                    <div class="container23">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                   
                                    <h3 class="title">MYORTO</h3>
                                    <font size="4"><strong>My Orto è un sito per amanti del verde o per chi vuole avvicinarsi a questo mondo.
<br>Troverai un nuovo modo innovativo per gestire il giardino o l'orto mediante l'uso della tecnologia.</br>
Inoltre avrai a disposizioni utili guide per gestire gli spazi verdi,la coltivazione di frutta e ortaggi,la potatura...ecc.</strong></font>
                                    
                                </div>
                            </div>
                        </div>
                 
                <li>
                    <div class="overlay"></div>
                    <img src="assets2/images/risparmiare-acqua.jpg" width="720" height="640" alt="Special 2">
                    <div class="container23">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                   
                                    <h3 class="title">RISPARMIO SULL'ACQUA</h3>
                                    <font size="4"><strong>L'acqua è un bene prezioso e le sue riserve mondiali non sono infinite.
									Uno degli scopi di myOrto è sensibilizzare le persone  a non sprecarla, e ad irrigare con la giusta quantità di acqua
									che le diverse piante hanno bisogno.</strong></font>
									

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
				<li>
                    <div class="overlay"></div>
                    <img src="assets2/images/notifiche.png" width="720" height="640" alt="Special 2">
                    <div class="container23">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                   
                                    <h3 class="title">SEMPRE CONNESSI</h3>
                                    <font size="4"><strong> Tiene sotto controllo il tuo orto,il tuo giardino,le tue piante anche quando sei fuori casa!
Potrai visitare my Orto dal sito ottimizzato per dispositivi mobili e grazie alle nostre notifiche verrai informato 
se essi hanno bisogno di acqua,sui tempi di fertizillazione e di semina e molto altro, ad esempio se un temporale si abbatterà 
sulle tue piante! </strong></font>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
				
                <li>
                    <div class="overlay"></div>
                    <img src="assets2/images/arduino.png" width="720" height="640"alt="Special 3">
                    <div class="container23">
                        <div class="row">
                            <div class="col-md-5 col-lg-4">
                                <div class="flex-caption visible-lg">
                                    <h3 class="title">COSA UTILIZZIAMO</h3>
                                   <font size="4"> <strong>
La piattaforma che ci aiuterà nel nostro progetto è Arduino ,sarà lui il vero gestore del tuo orto, grazie
ai vari sensori a basso impatto ambientale che saranno presenti nel tuo orto,lui potrà informarti
se le piante  sono troppo umide,troppo secche,se sono esposte a troppa o troppo poca luce solare,l'umidità del suolo
del tuo orto o giardino,se esso sta raggiungendo una temperatura elevata e molto altro!</strong></font>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
           
        
		 
</ul>
 </div>
 </div>
        
        <br>
        <br>
        <br>
       		<div class="container23">
            <div class="row">
                <div id="opaco13" class="our-listing owl-carousel">
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>IRRIGAZIONE</h4>
                            </div>
                            <img src="assets2/images/irrigatori.jpg" width="200" height="200" >
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                           
                            <a href="#" onclick="location.href='Irrigazione.php'" class="price-btn">Vai alla pagina</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>FERTILIZZAZIONE</h4>
                            </div>
                            <img src="assets2/images/concime.jpg" width="200" height="200">
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
						<a href="#" "location.href='Fertilizzazione.php'" class="price-btn">Vai alla pagina</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>PROPRIETA ORTAGGI</h4>
                            </div>
                            <img src="assets2/images/ortaggi.jpg" width="200" height="200" >
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
						<a href="#" "location.href='Proprieta_ortaggi.php'" class="price-btn">Vai alla pagina</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>METEO</h4>
                            </div>
                            <img src="assets2/images/meteo.jpg" width="200" height="200" >
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                            <a href="#" class="price-btn">Vai alla pagina</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                    <div class="list-item">
                        <div class="list-thumb">
                            <div class="title">
                                <h4>ACCESSORI UTILI</h4>
                            </div>
                            <img src="assets2/images/AttrezziGiardino.jpg" width="200" height="200">
                        </div> <!-- /.list-thumb -->
                        <div class="list-content">
                       <a href="#" "location.href='Accessori_utili.php'" class="price-btn">Vai alla pagina</a>
                        </div> <!-- /.list-content -->
                    </div> <!-- /.list-item -->
                </div> <!-- /.our-listing -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

		

		<br>
		<br>
		<br>
		<div id="opaco12">
        <div class="site-footer">
            <div class="container23">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-logo">
                            <a href="home.html">
                                <img src="assets2/images/logologo1.png" alt="">
                            </a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">
                            <span>
                            	
                                Copyright &copy; 2016 <a href="#">My Orto</a>
                            
                            
                           
                            
                            </span>
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
		</div>  <!--chiusura opaco12-->

</div> <!-- CHIUSURA ID OPACO  IMPORTANTE tutto ciò che si deve opacizzare dopo l'apertua del popup va messo dentro qui -->

<!--<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>-->
    <div id="div1" style="display:none" class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
           
            <!--      Wizard container        -->   
            <div class="wizard-container"> 
                
                <div class="card wizard-card ct-wizard-green" id="wizardProfile">
                    <form name="form" action=".assets/PHP/registration.php" method="POST" enctype="multipart/form-data">
                <!--        You can switch "ct-wizard-green"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                
                    	<div class="wizard-header">
                        	<h3>
                        	   <b class="carattereb">Inserisci</b> i tuoi dati<br>
                        	   <small>Queste informazioni ci permetteranno di conoscerti meglio</small>
                        	<br>
							<br>
							</h3>
							
							      <div class="xpicture-container">
                                          <div class="xpicture">
                                              <img src="assets/img/x2.png" class="xpicture-src" id="close" title=""/>
                                              
                                          </div>
                                         
                                  </div>
                    	</div>
                    	<ul>
                            <li><a href="#about" data-toggle="tab">Utente</a></li>
                            <li><a href="#account" data-toggle="tab">Password</a></li>
                            <li><a href="#address" data-toggle="tab">Indirizzo</a></li>
                        </ul>
                        
                        <div class="tab-content">
                            <div class="tab-pane" id="about">   <!--inizio utente -->
                              <div class="row">
                                  
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input name="avatar" type="file"  id="wizard-picture">
                                          </div>
                                          <h6>Carica immagine</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Nome <small>(richiesto)</small></label>
                                        <input name="firstname"  type="text" class="form-control" placeholder="Andrea...">
                                      </div>
                                      <div class="form-group">
                                        <label>Cognome <small>(richiesto)</small></label>
                                        <input name="lastname"  type="text" class="form-control" placeholder="Rossi...">
                                      </div>
									    <div class="form-group">
                                        <label>Nome Utente <small>(richiesto)</small></label>
                                        <input name="username"  type="text" class="form-control" placeholder="andy08...">
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Email <small>(richiesto)</small></label>
                                          <input name="email"   type="email" class="form-control" placeholder="andrew@email.com">
                                      </div>
                                  </div>
                              </div>
                            </div>   <!--fine utente -->
                            <div class="tab-pane" id="account"> <!--inizio password -->
                                <h4 class="info-text"> Inserisci la tua password(almeno 8 caratteri) </h4>
                                <div class="row">
								      <div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Password <small>(richiesto)</small></label>
                                        <input name="password" name="password" id="password" type="password" class="form-control" >
                                      </div>
                                  </div>
								  	<div class="col-sm-6">
                                      <div class="form-group">
                                        <label>Conferma password <small>(richiesto)</small></label>
                                        <input name="confirm_password"  id="confirm_password" type="password" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off class="form-control" >
                                      </div>
                                  </div>
                                   
                                    
                                   
                                    
                                </div>
                            </div>     <!--fine password -->
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Dov'è il tuo orto/giardino? </h4>
                                    </div>
                                    <div class="col-sm-6">
                                         <div class="form-group">
                                            <label>Via/piazza</label>
                                            <input name="via" type="text" class="form-control" onkeypress="return onlyAlphabets(event,this);" onblur="validateFirstStep()" placeholder="Via Bianchi">
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                         <div class="form-group">
                                            <label>Numero Civico</label>
                                            <input name="numero" type="text" class="form-control" placeholder="6">
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                         <div class="form-group">
                                            <label>Città</label>
                                            <input name="città" type="text" onkeypress="return onlyAlphabets(event,this);" class="form-control" placeholder="Como...">
                                          </div>
                                    </div>
                                   <div class="col-sm-6">
                                         <div class="form-group">
                                            <label>Paese</label><br>
                                             <select name="paese" class="form-control">
												                    <option value="" selected> Seleziona paese</option>
                    <option value="United States"> United States </option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                    <option value="Argentina"> Argentina </option>
                    <option value="Armenia"> Armenia </option>
                    <option value="Aruba"> Aruba </option>
                    <option value="Australia"> Australia </option>
                    <option value="Austria"> Austria </option>
                    <option value="Azerbaijan"> Azerbaijan </option>
                    <option value="The Bahamas"> The Bahamas </option>
                    <option value="Bahrain"> Bahrain </option>
                    <option value="Bangladesh"> Bangladesh </option>
                    <option value="Barbados"> Barbados </option>
                    <option value="Belarus"> Belarus </option>
                    <option value="Belgium"> Belgium </option>
                    <option value="Belize"> Belize </option>
                    <option value="Benin"> Benin </option>
                    <option value="Bermuda"> Bermuda </option>
                    <option value="Bhutan"> Bhutan </option>
                    <option value="Bolivia"> Bolivia </option>
                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                    <option value="Botswana"> Botswana </option>
                    <option value="Brazil"> Brazil </option>
                    <option value="Brunei"> Brunei </option>
                    <option value="Bulgaria"> Bulgaria </option>
                    <option value="Burkina Faso"> Burkina Faso </option>
                    <option value="Burundi"> Burundi </option>
                    <option value="Cambodia"> Cambodia </option>
                    <option value="Cameroon"> Cameroon </option>
                    <option value="Canada"> Canada </option>
                    <option value="Cape Verde"> Cape Verde </option>
                    <option value="Cayman Islands"> Cayman Islands </option>
                    <option value="Central African Republic"> Central African Republic </option>
                    <option value="Chad"> Chad </option>
                    <option value="Chile"> Chile </option>
                    <option value="People's Republic of China"> People's Republic of China </option>
                    <option value="Republic of China"> Republic of China </option>
                    <option value="Christmas Island"> Christmas Island </option>
                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                    <option value="Colombia"> Colombia </option>
                    <option value="Comoros"> Comoros </option>
                    <option value="Congo"> Congo </option>
                    <option value="Cook Islands"> Cook Islands </option>
                    <option value="Costa Rica"> Costa Rica </option>
                    <option value="Cote d'Ivoire"> Cote d'Ivoire </option>
                    <option value="Croatia"> Croatia </option>
                    <option value="Cuba"> Cuba </option>
                    <option value="Cyprus"> Cyprus </option>
                    <option value="Czech Republic"> Czech Republic </option>
                    <option value="Denmark"> Denmark </option>
                    <option value="Djibouti"> Djibouti </option>
                    <option value="Dominica"> Dominica </option>
                    <option value="Dominican Republic"> Dominican Republic </option>
                    <option value="Ecuador"> Ecuador </option>
                    <option value="Egypt"> Egypt </option>
                    <option value="El Salvador"> El Salvador </option>
                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                    <option value="Eritrea"> Eritrea </option>
                    <option value="Estonia"> Estonia </option>
                    <option value="Ethiopia"> Ethiopia </option>
                    <option value="Falkland Islands"> Falkland Islands </option>
                    <option value="Faroe Islands"> Faroe Islands </option>
                    <option value="Fiji"> Fiji </option>
                    <option value="Finland"> Finland </option>
                    <option value="France"> France </option>
                    <option value="French Polynesia"> French Polynesia </option>
                    <option value="Gabon"> Gabon </option>
                    <option value="The Gambia"> The Gambia </option>
                    <option value="Georgia"> Georgia </option>
                    <option value="Germany"> Germany </option>
                    <option value="Ghana"> Ghana </option>
                    <option value="Gibraltar"> Gibraltar </option>
                    <option value="Greece"> Greece </option>
                    <option value="Greenland"> Greenland </option>
                    <option value="Grenada"> Grenada </option>
                    <option value="Guadeloupe"> Guadeloupe </option>
                    <option value="Guam"> Guam </option>
                    <option value="Guatemala"> Guatemala </option>
                    <option value="Guernsey"> Guernsey </option>
                    <option value="Guinea"> Guinea </option>
                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                    <option value="Guyana"> Guyana </option>
                    <option value="Haiti"> Haiti </option>
                    <option value="Honduras"> Honduras </option>
                    <option value="Hong Kong"> Hong Kong </option>
                    <option value="Hungary"> Hungary </option>
                    <option value="Iceland"> Iceland </option>
                    <option value="India"> India </option>
                    <option value="Indonesia"> Indonesia </option>
                    <option value="Iran"> Iran </option>
                    <option value="Iraq"> Iraq </option>
                    <option value="Ireland"> Ireland </option>
                    <option value="Israel"> Israel </option>
                    <option value="Italy"> Italy </option>
                    <option value="Jamaica"> Jamaica </option>
                    <option value="Japan"> Japan </option>
                    <option value="Jersey"> Jersey </option>
                    <option value="Jordan"> Jordan </option>
                    <option value="Kazakhstan"> Kazakhstan </option>
                    <option value="Kenya"> Kenya </option>
                    <option value="Kiribati"> Kiribati </option>
                    <option value="North Korea"> North Korea </option>
                    <option value="South Korea"> South Korea </option>
                    <option value="Kosovo"> Kosovo </option>
                    <option value="Kuwait"> Kuwait </option>
                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                    <option value="Laos"> Laos </option>
                    <option value="Latvia"> Latvia </option>
                    <option value="Lebanon"> Lebanon </option>
                    <option value="Lesotho"> Lesotho </option>
                    <option value="Liberia"> Liberia </option>
                    <option value="Libya"> Libya </option>
                    <option value="Liechtenstein"> Liechtenstein </option>
                    <option value="Lithuania"> Lithuania </option>
                    <option value="Luxembourg"> Luxembourg </option>
                    <option value="Macau"> Macau </option>
                    <option value="Macedonia"> Macedonia </option>
                    <option value="Madagascar"> Madagascar </option>
                    <option value="Malawi"> Malawi </option>
                    <option value="Malaysia"> Malaysia </option>
                    <option value="Maldives"> Maldives </option>
                    <option value="Mali"> Mali </option>
                    <option value="Malta"> Malta </option>
                    <option value="Marshall Islands"> Marshall Islands </option>
                    <option value="Martinique"> Martinique </option>
                    <option value="Mauritania"> Mauritania </option>
                    <option value="Mauritius"> Mauritius </option>
                    <option value="Mayotte"> Mayotte </option>
                    <option value="Mexico"> Mexico </option>
                    <option value="Micronesia"> Micronesia </option>
                    <option value="Moldova"> Moldova </option>
                    <option value="Monaco"> Monaco </option>
                    <option value="Mongolia"> Mongolia </option>
                    <option value="Montenegro"> Montenegro </option>
                    <option value="Montserrat"> Montserrat </option>
                    <option value="Morocco"> Morocco </option>
                    <option value="Mozambique"> Mozambique </option>
                    <option value="Myanmar"> Myanmar </option>
                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                    <option value="Namibia"> Namibia </option>
                    <option value="Nauru"> Nauru </option>
                    <option value="Nepal"> Nepal </option>
                    <option value="Netherlands"> Netherlands </option>
                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                    <option value="New Caledonia"> New Caledonia </option>
                    <option value="New Zealand"> New Zealand </option>
                    <option value="Nicaragua"> Nicaragua </option>
                    <option value="Niger"> Niger </option>
                    <option value="Nigeria"> Nigeria </option>
                    <option value="Niue"> Niue </option>
                    <option value="Norfolk Island"> Norfolk Island </option>
                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                    <option value="Northern Mariana"> Northern Mariana </option>
                    <option value="Norway"> Norway </option>
                    <option value="Oman"> Oman </option>
                    <option value="Pakistan"> Pakistan </option>
                    <option value="Palau"> Palau </option>
                    <option value="Palestine"> Palestine </option>
                    <option value="Panama"> Panama </option>
                    <option value="Papua New Guinea"> Papua New Guinea </option>
                    <option value="Paraguay"> Paraguay </option>
                    <option value="Peru"> Peru </option>
                    <option value="Philippines"> Philippines </option>
                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                    <option value="Poland"> Poland </option>
                    <option value="Portugal"> Portugal </option>
                    <option value="Puerto Rico"> Puerto Rico </option>
                    <option value="Qatar"> Qatar </option>
                    <option value="Romania"> Romania </option>
                    <option value="Russia"> Russia </option>
                    <option value="Rwanda"> Rwanda </option>
                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                    <option value="Saint Helena"> Saint Helena </option>
                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                    <option value="Saint Lucia"> Saint Lucia </option>
                    <option value="Saint Martin"> Saint Martin </option>
                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                    <option value="Samoa"> Samoa </option>
                    <option value="San Marino"> San Marino </option>
                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                    <option value="Saudi Arabia"> Saudi Arabia </option>
                    <option value="Senegal"> Senegal </option>
                    <option value="Serbia"> Serbia </option>
                    <option value="Seychelles"> Seychelles </option>
                    <option value="Sierra Leone"> Sierra Leone </option>
                    <option value="Singapore"> Singapore </option>
                    <option value="Slovakia"> Slovakia </option>
                    <option value="Slovenia"> Slovenia </option>
                    <option value="Solomon Islands"> Solomon Islands </option>
                    <option value="Somalia"> Somalia </option>
                    <option value="Somaliland"> Somaliland </option>
                    <option value="South Africa"> South Africa </option>
                    <option value="South Ossetia"> South Ossetia </option>
                    <option value="South Sudan"> South Sudan </option>
                    <option value="Spain"> Spain </option>
                    <option value="Sri Lanka"> Sri Lanka </option>
                    <option value="Sudan"> Sudan </option>
                    <option value="Suriname"> Suriname </option>
                    <option value="Svalbard"> Svalbard </option>
                    <option value="Swaziland"> Swaziland </option>
                    <option value="Sweden"> Sweden </option>
                    <option value="Switzerland"> Switzerland </option>
                    <option value="Syria"> Syria </option>
                    <option value="Taiwan"> Taiwan </option>
                    <option value="Tajikistan"> Tajikistan </option>
                    <option value="Tanzania"> Tanzania </option>
                    <option value="Thailand"> Thailand </option>
                    <option value="Timor-Leste"> Timor-Leste </option>
                    <option value="Togo"> Togo </option>
                    <option value="Tokelau"> Tokelau </option>
                    <option value="Tonga"> Tonga </option>
                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                    <option value="Tunisia"> Tunisia </option>
                    <option value="Turkey"> Turkey </option>
                    <option value="Turkmenistan"> Turkmenistan </option>
                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                    <option value="Tuvalu"> Tuvalu </option>
                    <option value="Uganda"> Uganda </option>
                    <option value="Ukraine"> Ukraine </option>
                    <option value="United Arab Emirates"> United Arab Emirates </option>
                    <option value="United Kingdom"> United Kingdom </option>
                    <option value="Uruguay"> Uruguay </option>
                    <option value="Uzbekistan"> Uzbekistan </option>
                    <option value="Vanuatu"> Vanuatu </option>
                    <option value="Vatican City"> Vatican City </option>
                    <option value="Venezuela"> Venezuela </option>
                    <option value="Vietnam"> Vietnam </option>
                    <option value="British Virgin Islands"> British Virgin Islands </option>
                    <option value="Isle of Man"> Isle of Man </option>
                    <option value="US Virgin Islands"> US Virgin Islands </option>
                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                    <option value="Western Sahara"> Western Sahara </option>
                    <option value="Yemen"> Yemen </option>
                    <option value="Zambia"> Zambia </option>
                    <option value="Zimbabwe"> Zimbabwe </option>
                    <option value="other"> Other </option>
                                            </select>
                                          </div>
                                    </div>
									  <div class="col-sm-6">
                                         <div class="form-group">
                                            <label>Metodo di coltivazione</label>
											<br>
											  <input type="radio" name="metodocoltivazione" class="form-control11" value="aperto"> all'aperto<br>
											  <input type="radio" name="metodocoltivazione" class="form-control11" value="serra"> in serra<br>
                                            
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Avanti' />
                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finito!' />
        
                            </div>
                            
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Indietro' />
                            </div>
                            <div class="clearfix"></div>
                        </div>	
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->
        

        <script src="assets2/js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="assets2/js/bootstrap.js"></script>
        <script src="assets2/js/plugins.js"></script>
        <script src="assets2/js/main.js"></script>
         
    </body>
	
	   <script language="Javascript" type="text/javascript">
 
        function onlyAlphabets(e, t) {
			try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

 
    </script>
	
	<script src="assets2/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script src="assets2/js/jquery.validate.min.js"></script>
	<script src="assets2/js/wizard.js"></script>
</html>