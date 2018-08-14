<?php
	session_start();
	if(isset($_SESSION['on']) && !isset($_COOKIE['username'])){
		include("adminpanel.php");
	}else{
		include("adminform.php");
	}
	/*error_reporting(E_ALL);
	ini_set('display_errors', true);*/
?>