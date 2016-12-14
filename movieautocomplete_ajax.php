<?php
$movies = $_REQUEST['movies'];//retrieving string being typed in textbox
if($movies!="")
{
	$con = @mysql_connect("localhost","root","");
	if(!$con)
	{
		die("Error has occured");
	}
	mysql_select_db("moviewebsite");

	$query="SELECT * from movie WHERE p_name LIKE '%$movies%' LIMIT 0,3";//selecting names of movies
	$result = mysql_query($query,$con);
	if(!$result)
	{
		die("Could not fetch the data");
	}
	echo "<div style='background-color:#333;margin-left:141px;width:245px;border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black;'>";
	while($row = mysql_fetch_array($result))
	{
	echo "<div id='option' style='height:33px;padding:3px;' value='".$row['p_name']."'><a id='descplnk' href='Moviedescp.php?id=".$row['p_id']."'>".$row['p_name']."</a></div>";
	};
  echo "</div>";	
}
?>

