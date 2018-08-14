<?php
session_start();
if(!isset($_SESSION['on'])){
	header('Location: http://www.schlechtewitzefront.de?s=admin');
	exit;
}
?>
<legend>Webmaster Panel</legend>

<table class="table table-hover">
<thead>
  <tr>
	<th>User</th>
	<th>Datum</th>
	<th>Witz</th>
	<th>Freigeben/Entfernen</th>
  </tr>
</thead>
<tbody>
<?php
	require_once("db.php");
	$data = mysqli_query($link,"SELECT * FROM jokes WHERE veri=0 ORDER BY datum");
	while($row = mysqli_fetch_object($data)){
		echo '<tr id="row_'.$row->id.'">';
		echo '	<td>'.$row->user.'</td>';
		echo '	<td>'.$row->datum.'</td>';
		echo '	<td>'.$row->witz.'</td>';
		echo '	<td><button type="button" class="btn btn-success" style="margin:5px;" onclick="freigeben('.$row->id.');"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-danger" style="margin:5px;" onclick="deletee('.$row->id.');"><span class=" glyphicon glyphicon-remove"></span></button></td>';
		echo '</tr>';
	}
?>
</tbody>
</table>

<script>
function freigeben(id){
	$.ajax({
	url: "sites/adminaction.php?do=freigeben&id=" + id,
	success: function(result){
		$('#row_'+id).fadeOut();
    }});
}

function deletee(id){
	$.ajax({
	url: "sites/adminaction.php?do=deletee&id=" + id,
	success: function(result){
		$('#row_'+id).fadeOut();
    }});
}

</script>