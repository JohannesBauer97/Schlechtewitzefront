<?php
session_start();
ERROR_REPORTING(0);

if(!isset($_POST['username']) || !isset($_POST['password'])){
	header('Location: http://www.schlechtewitzefront.de?s=admin');
	exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "Admin" && $password == "geheimespasswort"){
	$_SESSION['on'] = "true";
	//setcookie("username",null,0,"/");
	header('Location: http://www.schlechtewitzefront.de?s=admin');
	exit;
}else{
	header('Location: http://www.schlechtewitzefront.de?s=admin&success=no');
	exit;
}