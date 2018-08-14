<script>
var position = 11;
$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() == $(document).height()) {
       loadcontent(position);
	   position = position +11;
   }
});
</script>

<?php
require_once('db.php');
$data = mysqli_query($link, "SELECT COUNT(*) AS total FROM jokes WHERE veri=1");
$row = mysqli_fetch_object($data);
?>
<legend>Alle Witze (<?php echo number_format($row->total,null,null,"."); ?>)</legend>
<script>loadcontent(0);</script>