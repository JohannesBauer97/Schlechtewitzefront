<?php
//error_reporting(E_ALL);
//ini_set('display_errors', true);

if(!isset($_GET['id'])){
	header('Location: http://www.schlechtewitzefront.de/');
	exit;
}

$jokeid = $_GET['id'];
$userip = $_SERVER['REMOTE_ADDR'];

require_once('db.php');
$data = mysqli_query($link, "SELECT `ip`, `jokeid` FROM `ips` WHERE ip LIKE '$userip' AND jokeid LIKE '$jokeid'");
if($data->num_rows === 0){
	mysqli_query($link, "INSERT INTO `ips`(`ip`, `jokeid`) VALUES ('$userip','$jokeid')");
	mysqli_query($link, "UPDATE `jokes` SET votes=votes+1 WHERE id='$jokeid'");
}else{
	header('Location: http://www.schlechtewitzefront.de/');
	exit;
}

?>
