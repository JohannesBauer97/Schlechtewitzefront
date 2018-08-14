function loadcontent(pos,increment){
$.ajax({
	url: "sites/getjoke.php?pos=" + pos, 
	success: function(result){
		$("#site").append(result);
    }});
	if (increment == "yes"){
		position = position + 11;
	} 

}

function loadimp(){
	$.get("sites/impressum.txt", function(data){
	  $("#imp_modal").append(data);
	});
}

function vote(jokeid){
	$.ajax({
	url: "sites/votejoke.php?id=" + jokeid,
	success: function(result){
		var oldvotes = $("#votes_"+jokeid).text();
		var newvotes = parseInt(oldvotes) + 1 + " ";
		$("#votes_"+jokeid).text(newvotes);
    }});
}

function einsenden(username,witz){
	$.ajax({
	url: "sites/einsenden.php?username=" + username + "&witz=" + witz,
	success: function(result){
		alert("ok");
    }});
}

function loadresults(pos,suchstr){
$.ajax({
	url: "sites/search.php?pos=" + pos + "&suchstring=" + suchstr, 
	success: function(result){
		$("#site").append(result);
    }});


}
