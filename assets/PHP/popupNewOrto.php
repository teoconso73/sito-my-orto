<!--inizio POPUP NUOVO ORTO-->
<div id="popupNewOrto" class="modal fade in" tabindex="-1" aria-hidden="false" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header"><button class="close" type="button" data-dismiss="modal" onclick="document.getElementById('popupNewOrto').style.display='none'">x</button>
<h4 class="modal-title">Nuovo orto</h4>
</div>
<form method='GET' action='assets/PHP/nuovoOrto.php'>
<div class="panel-body">
<div class="task-content">
  <ul class="task-list">
     <li>
          <div> <label style="width:100px;" class="labelUtente"> Nome Orto: </label>
                <?php
                $query10 =$connessione_al_server->query("select Tipo from tipo");
                echo '<input type="text" name="nomeOrto" class="modificaDatiUtente form-control" required>
                <label style="width:100px;" class="labelUtente"> Tipo di Orto: </label>
                <select style="margin-left:10px;" name="tipoOrto">';
while($temp=$query10->fetch_array(MYSQLI_ASSOC)){ 
    echo "<option>".$temp['Tipo']."</option>";
}
echo "</select>";

echo '<label style="width:70px;" class="labelUtente"> Località: </label>
                <select style="width:100px;" name="localita">';
				
$handle=fopen("listacomuni.txt","r") or die("errore apertura file"); //LEGGO E STAMPO IN UNA SELECT LA LISTA DEI COMUNI
while(!feof($handle))
{ 
$integrale= fgets($handle,4096);
$stringa=explode(";",$integrale);
echo "<option>".$stringa[1]."</option>";
}
echo "</select>";
?>

      </div>
     </li>
    </ul>
 </div>
 </div>
 <div class="modal-footer">
 <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
 <button class="btn btn-theme" type="submit" >Salva</button>
 </div>
 </form>


 </div>
 </div>
 </div>
 
<!--FINE POPUP NUOVO ORTO-->
