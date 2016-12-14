<html>
<head>
<style>
#movies
{
    width: 130px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
#movies:focus 
{
    width:245px;
}
#option:hover
{
	background-color:#92B6D5;
}
#descplnk
{
	font-family:Arial;
	color:grey;
	text-decoration:none;
}
#descplnk:hover
{
	font-family:Arial;
	color:black;
	text-decoration:none;
}
</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#movies").keyup(function(){
	//onKeyUp function gets called for every keyup event on input having id as "car"
		
		//ajax starts
		$.ajax({
		  type: "POST",  //method
		
		url: "movieautocomplete_ajax.php", //target file

		data: {movies: $("#movies").val()} //data need to be send 
        
		}).done(function( msg ){ 
					//done methods gets called when ajax response is sent back by jQuery ajax.
					// response is retrieved in variable "msg"
		  $("#span").html(msg);  // Write the ajax response to span having id "span" 
		});	
	});
});
</script>
</head>
<body>
<div style="margin-left:40px;font-family:Arial;color:white;">
Enter movie name : <input type="text" id="movies" placeholder="Search Movies..." size="30" name="box"/>
<span id="span"></span>
</div>
</body>
</html>
