<?php
if(isset($_GET['success'])){
	if($_GET['success'] == "yes"){
		echo '<div class="post_info_yes">';
		echo 'Dein Witz wurde erfolgreich eingesendet! Jetzt muss nur noch ein Admin ihn bestätigen!';
		echo '</div>';
	} else if($_GET['success'] == "no"){
		echo '<div class="post_info_no">';
		echo 'Sorry! Da ist etwas Schiefgelaufen!';
		echo '</div>';
	}
}

?>
<form class="form-horizontal" action="sites/einsenden.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Witz einsenden</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Benutzername<span style="color:red">*</span></label>  
  <div class="col-md-4">
  <input id="username" name="username" placeholder="Clowfish007" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="witz">Witz<span style="color:red">*</span></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="witz" name="witz" rows="6" required=""></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
	<span style="color:red">* müssen ausgefüllt werden!</span>
    <button id="submit" name="submit" class="btn btn-primary" style="margin-top:5px;">Einsenden!</button>
  </div>
</div>
</form>