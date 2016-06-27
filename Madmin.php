<head>
<style>
#admin 
{
    border-color:black;
	border: 2px solid black;
    padding: 100px; 
    width: 500px;
    height: 180px;    
}
#navbar
{
list-style-type:none;
padding:0;
margin:0;
}
</style>
</head>
<body  bgcolor="#92B6D5">
<div id="admin" style="margin:auto;margin-top:30px;border-radius:10px;">
<div style="width:500px;height:50px;margin-top:-50px;text-align:center;font-size:2em;">Admin Add Product</div>
<table>
<form action="Mproductadd.php" method='post' enctype='multipart/form-data'>
<tr><td>Movie id:</td><td><input type="text" name="id" id="id"></td></tr>
<tr><td>Movie name:</td><td><input type="text" name="pname" id="pname"></td></tr>
<tr><td>Year:</td><td><input type="text" name="year" id="year"></td></tr>
<tr><td>Genre:</td><td><input type='text' name='genre' id='genre' /><br /></td></tr>
<tr><td>Poster:</td><td><input type='file' name='file' id='file' /><br /></td></tr>
<tr><td>Movie desc:</td><td><input type="text" name="descrp" id="descrp"></td></tr>
<tr><td>Cost:</td><td><input type="text" name="cost" id="cost"></td></tr>
<tr><td><input type="submit" value="Add Movie"></td></tr>
<tr><td><input type="Reset" ></td></tr>
</form>
</table>
</div>
<body>