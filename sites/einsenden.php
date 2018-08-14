<?php
if(!isset($_POST['username']) || !isset($_POST['witz'])){
	header('Location: http://www.schlechtewitzefront.de?s=posten');
	exit;
}

require_once('db.php');

$username = $_POST['username'];
$witz = $_POST['witz'];

$witz = str_replace("\r\n","<br>",$witz);

$f1_username = htmlentities($username);
$f1_witz = htmlentities($witz);

$f2_username = mysqli_real_escape_string($link,$f1_username);
$f2_witz = mysqli_real_escape_string($link,$f1_witz);

$f2_witz = str_replace( "&lt;br&gt;", "<br>", $f2_witz );


$sql="INSERT INTO jokes (user, witz)
VALUES ('$f2_username', '$f2_witz')";

if (mysqli_query($link,$sql)) {
	$email = "webmaster@gmail.com" ;
	$subject = "Neuer Witz von " . $f2_username ;
	$message = $f2_witz ;
	mail("admin@bauerjo.de", $subject,
	$message, "From:" . $email);
	header('Location: http://www.schlechtewitzefront.de?s=posten&success=yes');
	exit;
}else{
	header('Location: http://www.schlechtewitzefront.de?s=posten&success=no');
	exit;
}