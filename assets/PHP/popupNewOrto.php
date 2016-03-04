
<!--inizio POPUP NUOVO ORTO-->

<div id="popupNewOrto" class="modal fade in" tabindex="-1" aria-hidden="false" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header"><button class="close" type="button" data-dismiss="modal" onclick="document.getElementById('popupNewOrto').style.display='none'">×</button>
<h4 class="modal-title">Nuovo orto</h4>
</div>
<form method='GET' action='assets/PHP/nuovoOrto.php'>
<div class="panel-body">
<div class="task-content">
  <ul class="task-list">
     <li>
          <div> <label class="labelUtente"> Nome Orto: </label>
                <?php
                $query10 =$connessione_al_server->query("select Tipo from tipo");
                echo '<input type="text" name="nomeOrto" class="modificaDatiUtente form-control" required>
                <label class="labelUtente"> Tipo di Orto: </label>
                <select name="tipoOrto">';
while($temp=$query10->fetch_array(MYSQLI_ASSOC)){ 
    echo "<option>".$temp['Tipo']."</option>";
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
