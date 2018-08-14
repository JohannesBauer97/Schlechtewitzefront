<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', true);

if(!isset($_SESSION['on'])){
	header('Location: http://www.schlechtewitzefront.de?s=admin');
	exit;
}

$do = $_GET['do'];
$id = $_GET['id'];

include("db.php");

if($do == "freigeben"){
	mysqli_query($link,"UPDATE jokes SET veri=1 WHERE id='$id'");
}else if($do == "deletee"){
	mysqli_query($link,"DELETE FROM jokes WHERE id='$id'");
}