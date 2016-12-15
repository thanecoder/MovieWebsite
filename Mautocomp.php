<!--Code for letting user search the website-->
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
	
		
		//Ajax code starts
		$.ajax({
		  type: "POST",  
		
		url: "movieautocomplete_ajax.php", 

		data: {movies: $("#movies").val()} 
        
		}).done(function( msg ){ 
					//done method gets called when ajax response is sent back by jQuery ajax.
					// response is retrieved in variable "msg"
		  $("#span").html(msg);  
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
