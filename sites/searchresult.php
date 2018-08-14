<?php

//error_reporting(E_ALL);
//ini_set('display_errors', true);
require_once('db.php');

$suchstring = $_GET['suchstring'];
$f1_suchstring = htmlentities($suchstring);
$f2_suchstring = mysqli_real_escape_string($link,$f1_suchstring);

$page = $_GET['page'];
$f1_page = htmlentities($page);
$f2_page = mysqli_real_escape_string($link,$f1_page);


$upperstring = strtoupper($f2_suchstring);
$data = mysqli_query($link, "SELECT * FROM `jokes` WHERE upper(witz) LIKE '%$upperstring%'");
$result_anz = $data->num_rows;


?>

<legend>(<?php echo (number_format($result_anz,null,null,".")); ?>) Suchergebnisse für: "<?php echo ($f2_suchstring); ?>"</legend>
<br>
<?php
include('search.php');
search($f2_suchstring,$f2_page);

if($result_anz > 10){
	if($f2_page <= 0){
		echo '<div id="next" class="jumbotron"><center>
		<a href="index.php?suchstring='.$_GET['suchstring'].'&s=searchresult&page='.($_GET['page']+1).'"><button type="button" class="btn btn-info">Next Page<span class="glyphicon glyphicon-chevron-right"></span></button>
		</center></div>';
	}else if($f2_page >= ($result_anz-1)){
		//echo "<script>alert('".($result_anz-2)."');</script>";
		echo '<div id="next" class="jumbotron"><center>
		<a href="index.php?suchstring='.$_GET['suchstring'].'&s=searchresult&page='.($_GET['page']-1).'"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span>Last Page</button>
		</center></div>';
	}else{
		echo '<div id="next" class="jumbotron"><center>
		<a href="index.php?suchstring='.$_GET['suchstring'].'&s=searchresult&page='.($_GET['page']-1) .'"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-chevron-left"></span>Last Page</button></a> 
		<a href="index.php?suchstring='.$_GET['suchstring'].'&s=searchresult&page='.($_GET['page']+1).'"><button type="button" class="btn btn-info">Next Page<span class="glyphicon glyphicon-chevron-right"></span></button>
		</center></div>';
	}	
}

?>