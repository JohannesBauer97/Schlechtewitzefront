<?php 
//error_reporting(E_ALL);
//ini_set('display_errors', true);
session_start();
if(!isset($_GET['s'])){
	$_GET['s'] = "top";
}
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google-site-verification" content="rPz9xSZLDqM2Mkx3n2Lgp6fLiN-095GSotLkztmnXh8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schlechte Witze auf Schlechtewitzefront.de!</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	<script src="js/script.js"></script>
	

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setCookieDomain", "*.schlechtewitzefront.de"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.serverlein.de/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '2']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->


  </head>
  <body>
	<noscript><div class="nojs">ERROR: You need to enable JavaScript on this Site!</div></noscript>
	<div class="container-fluid">
	<div class="row" style="margin-top:50px;">
		<div class="col-md-8 col-md-offset-2">
			<nav class="navbar navbar-default header-shadow">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Navigation ein-/ausblenden</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="https://schlechtewitzefront.de/index.php?s=top">Schlechtewitzefront</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li <?php if($_GET['s']=="top"){echo('class="active"');} ?>><a href="index.php?s=top"><span style="color:Red;"><span class="glyphicon glyphicon-heart-empty"></span><b> TOP 10</b></span></a></li>
					<li <?php if($_GET['s']=="jokes"){echo('class="active"');} ?>><a href="index.php?s=jokes"><span class="glyphicon glyphicon-comment"></span> Alle Witze</a></li>
					<li <?php if($_GET['s']=="posten"){echo('class="active"');} ?>><a href="index.php?s=posten"><span class="glyphicon glyphicon-pencil"></span> Witz einsenden</a></li>
					<li <?php if($_GET['s']=="kontakt"){echo('class="active"');} ?>><a href="index.php?s=kontakt"><span class="glyphicon glyphicon-bullhorn"></span> Feedback</a></li>
				  </ul>
				  <form class="navbar-form navbar-right" role="search" action="index.php?s=searchresult" method="GET">
					<div class="form-group">
					  <input type="text" class="form-control" placeholder="Suchen" id="suchstring" name="suchstring" required="">
					  <input type="hidden" name="s" value="searchresult"> <!-- Hidden Textfield -->
					  <input type="hidden" name="page" value="0">
					</div>
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
				  </form>
				</div>
				
			  </div>
			</nav>
		</div>	
	</div>
	
	<div class="row" style="margin-top:20px;">
		<div class="col-md-8 col-md-offset-2">
			<div class="jumbotron header-shadow" id="site">
				
				<?php
					switch($_GET['s']){
						case "top":
							include("sites/top.php");
							break;
						case "jokes":
							include("sites/jokes.php");
							break;
						case "posten":
							include("sites/posten.php");
							break;
						case "kontakt":
							include("sites/kontakt.php");
							break;
						case "searchresult":
							include("sites/searchresult.php");
							break;	
						case "admin":
							include("sites/admin.php");
							break;	
						default:
							include("sites/top.php");
							break;
					}
				?>
				
			</div>
			<?php 
			if($_GET['s']=="jokes"){
				echo '<div id="next" class="jumbotron hidden-lg"><center><button type="button" class="btn btn-info" onclick="loadcontent(position,\'yes\');">Load more Jokes</button></center></div>';
			}
			?>
		</div>
		<div class="col-md-8 col-md-offset-2" style="margin-bottom:20px;">
			<center>
			<span style="color:white">&copy; 2015 Schlechtewitzefront.de | 
			<?php
			if(isset($_SESSION['on'])){
				echo'<a href="index.php?s=admin" style="color:white">Webmaster Panel</a> | ';
				echo'<a href="sites/logout.php" style="color:white">Logout</a> | ';
			}else{
				echo'<a href="index.php?s=admin" style="color:white">Login</a> | ';
			}
			?>
			<a href="#" data-toggle="modal" data-target="#impressum" style="color:white" onclick="loadimp();">Datenschutzerklärung & Impressum</a></span>
			</center>
		</div>
	</div>
	
	<!-- Modal-Impressum -->
	<div id="impressum" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Content -->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Datenschutzerklärung & Impressum</h4>
		  </div>
		  <div class="modal-body" id="imp_modal">
			<?php //include("sites/impressum.txt"); ?>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>	
	
	</div>
	<!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>