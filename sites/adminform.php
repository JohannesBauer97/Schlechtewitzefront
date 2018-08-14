<form class="form-horizontal" action="sites/login.php" method="POST" id="loginform">
<fieldset>

<!-- Form Name -->
<legend>Webmaster Login</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">Username<span style="color:red">*</span></label>  
  <div class="col-md-4">
  <input id="username" name="username" placeholder="Username" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">Passwort<span style="color:red">*</span></label>  
  <div class="col-md-4">
  <input id="password" name="password" placeholder="Passwort" class="form-control input-md" required="" type="password">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <span style="color:red">*Müssen ausgefüllt werden</span><br>
    <button id="submit" name="submit" class="btn btn-primary" style="margin-top:5px;">Login</button>
  </div>
</div>

</fieldset>
</form>
