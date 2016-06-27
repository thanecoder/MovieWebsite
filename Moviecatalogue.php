<head>
<style>
#button
{
    background-color:#1E90FF;
    border:none;
    display: inline-block;
	text-align: center;
    text-decoration: none;
	padding: 15px 32px;
}
#button:hover
{
	background-color:#483D8B;
}
#button:active
{
	background-color:#F4A460;
}
#log
{
	background-color:#F4A460;
	color:black;
	border:none;
	text-align:center;
	text-decoration:none;
	display: inline-block;
	padding:15px 36.5px;
}
#log:active,#log:hover
{
	background-color:#483D8B;
	color:black;
	border:none;
	text-align:center;
	text-decoration:none;
	display: inline-block;
	padding:15px 36.5px;
}
#page
{
	background-color:white;
	color:black;
	border:none;
	text-align:center;
	text-decoration:none;
	display: inline-block;
	padding:5px 5px;
}
#page:active,#page:hover
{
	background-color:green;
	color:white;
	border:none;
	text-align:center;
	text-decoration:none;
	display: inline-block;
	padding:5px 5px; 
}
#descp
{
	color:white;
	border:none;
	margin-left:5px;
	display:inline-block;
	padding:8px 8px;
	text-decoration:none;
	background-color:#DD4132;
}
#descp:hover,#descp:active
{
	color:black;
	margin-left:5px;
	border:none;
	display:inline-block;
	padding:8px 8px;
	text-decoration:none;
	background-color:#034F84;
}
#product
{
	float:left;
	width:700px;
	height:200px;
	border:1px solid grey;
	box-shadow:5px 6px 6px grey;
	font-family:Georgia
}
</style>
</head>
<body>
<?php
include_once('Head.php');
 
if(isset($_GET['page']))
{
	$page=$_GET['page'];
}
else
{
	$page=1;
}
$servername="localhost";
$username="root";
$password="";
$conn=@mysql_connect($servername,$username,$password);
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
mysql_select_db('moviewebsite',$conn);
$sql="select * from movie";
$result=@mysqli_query($conn,$sql);
$total_entries=@mysqli_num_rows($result);
$num_per_page=5;
$total_pages=ceil($total_entries/$num_per_page);
$start=(($page-1)*$num_per_page);
$sql="SELECT * from movie LIMIT $start,5";
$result = mysql_query($sql);
if($result==0)
	{
		die("Could not fetch the data" . mysql_error());
	}
	echo '<br><br><br><div style="float:left;width:1000px;height:20px"><br>';
while($row = mysql_fetch_array($result))
	{
	$n='UPLOADING/'.$row['p_name'].'.jpg';	
	echo "<img src='".$n."' style='float:left;width:200px;height:200px;box-shadow:5px 5px 5px grey;'><div style='width:30px;height:200px;border:0px;float:left;'></div>
	<div id='product'>NAME:".$row['p_name']."<br>COST:".$row['price']."<br>GENRE:".$row['genre']."<br><br><br><br>
	<a id='descp' href='Moviedescp.php?id=".$row['p_id']."'><img src='monitor.png' align='middle' style='width:25px;height:25px;' />&nbspSee description and reviews</a><br></div>";
	echo '<br><div style="float:left;width:1000px;height:20px"><br>';
	};		
 ?>
 <br>
 <br>
<div style="width:1200px;height:50px;text-align:center;">
<?php
if(!isset($_GET['page']))
{
	$page=1;
}
else
{
	$page=$_GET['page'];
}
$con = @mysql_connect("localhost","root","");
	if(!$con)
	{
		die("Error has occured");
	}
	mysql_select_db("moviewebsite");
$sql="SELECT * FROM movie"; 
$result=mysql_query($sql,$con);
$total_records =@mysql_num_rows($result);
$total_pages = ceil($total_records / $num_per_page); 
if($page!=1)
{echo "  <a id='page' href='Moviecatalogue.php?page=" . ($page-1) . "'>Prev</a>  ";}
$i=1;
for($i=1;$i<=$total_pages;$i++)
{
	if($i==$page)
	{
		echo "<b>$page</b>"; 
	}
	else
	{
		echo "  <a id='page' href='Moviecatalogue.php?page=" . $i . "'>" . $i . "</a>  ";  

	}
}
if(($page)!=($total_pages))
{echo "  <a id='page' href='Moviecatalogue.php?page=" . ($page+1) . "'>Next</a>  ";}
?>
</div>

