<form class="form-horizontal" action="sites/sendmail.php" method="POST" id="mailform">
<fieldset>

<?php
if(isset($_GET['success'])){
	if($_GET['success'] == "yes"){
		echo '<div class="feed_info_yes">';
		echo 'Vielen Dank für dein Feedback! :)';
		echo '</div>';
	} else if($_GET['success'] == "no"){
		echo '<div class="feed_info_no">';
		echo 'Sorry! Da ist etwas Schiefgelaufen!';
		echo '</div>';
	}
}

?>

<!-- Form Name -->
<legend><span style="color:white !important;">Feedback Formular</span></legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">Vorname<span style="color:red">*</span></label>  
  <div class="col-md-4">
  <input id="firstname" name="firstname" placeholder="Max" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastname">Nachname<span style="color:red">*</span></label>  
  <div class="col-md-4">
  <input id="lastname" name="lastname" placeholder="Mustermann" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mail">E-Mail<span style="color:red">*</span></label>  
  <div class="col-md-4">
  <input id="mail" name="mail" placeholder="max@mustermann.de" class="form-control input-md" required="" type="email">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="msg">Nachricht<span style="color:red">*</span></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="msg" name="msg" required="" rows="6"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <span style="color:red">*Müssen ausgefüllt werden</span><br>
    <button id="submit" name="submit" class="btn btn-primary" style="margin-top:5px;">Abschicken</button>
  </div>
</div>

</fieldset>
</form>

<script>
$('#mailform').validate();
</script>