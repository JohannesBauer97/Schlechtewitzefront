<?php
/* error_reporting(E_ALL);
ini_set('display_errors', true); */

session_start();

if(!isset($_GET['pos'])){
	header('Location: http://www.schlechtewitzefront.de/');
	exit;
}
require_once('db.php');

$start = $_GET['pos'];
$f1_start = htmlentities($start);
$f2_start = mysqli_real_escape_string($link,$f1_start);


$data = mysqli_query($link, "SELECT * FROM `jokes` WHERE veri=1 ORDER BY `datum` DESC LIMIT 10 OFFSET $start");


while($row=mysqli_fetch_object($data)){
	$originalDate = $row->datum;
	$newDate = date("d.m.Y", strtotime($originalDate));
	
	echo'<div class="row" style="padding:10px;" id="container_'.$row->id.'">';
	echo'<div class="col-md-12" style="margin-bottom:20px;">';
	echo($row->witz);
	echo'	</div>';
	echo'	<div class="col-md-12 text-right" style="margin-top:0px;">';
	if(isset($_SESSION['on']))
		echo'<button type="button" class="btn btn-danger" style="float:left;" onclick="deletee('.$row->id.');"><span class="glyphicon glyphicon-remove"></span></button>';
	
	echo('<span style="font-size:14px;">'.$row->user.'</span>' . ' <span class="glyphicon glyphicon-user" style="margin-right:10px;"></span>');
	echo'<span style="font-size:14px;">'.$newDate.'</span>' . ' <span class="glyphicon glyphicon-hourglass" style="margin-right:10px;"></span>';
	echo'		<span style="font-size:18px;" id="votes_'.$row->id.'">'.$row->votes.' </span><span id="vote_'.$row->id.'" class="glyphicon glyphicon-thumbs-up finger" onclick="vote('.$row->id.');"></span>';
	echo'	</div>';
	echo'</div>';
	echo'<hr>';
}

if(isset($_SESSION['on'])){
	echo'<script>
		function deletee(id){
			$.ajax({
			url: "sites/adminaction.php?do=deletee&id=" + id,
			success: function(result){
				$("#container_"+id).fadeOut();
			}});
		}

		</script>';
}
?>

