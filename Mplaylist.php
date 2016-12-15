<!--This file is for showing th user their playlist-->
<title>MovieShop-Your Playlist</title>
<style>
#play
{
	color:white;
	border:none;
	display:inline-block;
	padding:8px 28px;
	font-family:Arial;
	text-decoration:none;
	background-color:#DD4132;
	float:right;
	margin-right:5px;
}
#download
{
	color:white;
	border:none;
	display:inline-block;
	padding:8px 28px;
	font-family:Arial;
	text-decoration:none;
	background-color:#FFBB00;
	float:right;
	margin-right:10px;
}
#login
{
    background-color:#1E90FF;
	color:white;
    border:none;
    display:inline-block;
	text-align:center;
    font-family:Arial;
	padding: 15px 32px;
	margin-top:250px;
	text-decoration:none;
}
#catalogue
{
    background-color:#F4A460;
	color:black;
    border:none;
    display:inline-block;
	text-align:center;
    font-family:Arial;
	font-size:1em;
	padding: 5px 5px;
	text-decoration:none;
}
#cartcent
{
	text-align:center;
	margin-left:300px;
	width:50%;
	padding:10px;
	height:90%;
    position:relative;
}
</style>
<script>
function link1()
{
    window.location='Moviecatalogue.php';
}
</script>
<body style="color:white;background-color:#1f1f1f;">
<?php
include_once("Head.php");
@session_start();
echo "<br><br><br>";
//Check if user is logged in	
if(isset($_SESSION['user_status']))
{
	$id=$_SESSION['user_id'];
	//Database connection code
	$servername="localhost";
	$username="root";
	$password="";
	$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
	if(!$conn)
	{
	die ("Connection failed:".mysqli_connect_error());
	}
	$sql="select * from paid_cart where user_id='$id'";
	$result=mysqli_query($conn,$sql);
	$count=0;
	$rowcount=mysqli_num_rows($result);
	echo "<div style='background-color:#5B5EA6;color:white;font-size:2.2em;font-family:arial;width:100%;text-align:center;height:40px;margin-top:260px;'><b>YOUR PLAYLIST</b></div>";
	echo "<div id='cartcent'>";
	//Show the movies in playlist
	if($rowcount>0)
	{	for($count=0;$count<$rowcount;$count++)
		{
			$row=mysqli_fetch_array($result);
			$n='UPLOADING/'.$row['p_name'].'.jpg';
			echo '<div style="font-size:1.5em;margin-top:50px;width:800px;height:170px; border:2px solid grey">
			<img src="'.$n.'" style="width:100px;height:150px;float:left;margin-left:10px;margin-top:5px;"></img>
			<table><tr><td><b>NAME:</b></td><td>'
			.$row['p_name'].
			'</td></tr>
			<tr><td><b>COST:</b></td><td>'
			.$row['price'].
			'</td></tr><tr><td><b>QUANTITY:</b></td><td>'
			.$row['quantity'].'</td></tr>
			</table>
			<br><br>
			<a id="download" href="Mdownload.php?file='.$row['p_name'].'.mp4">Download</a>
			<a id="play" href="Mplay.php?pid='.$row['p_id'].'">Play</a><br></div>';
			
			$row++;
		}
	}
	else if($rowcount==0)
	{
		echo "<h4>Playlist is empty</h4>";
		echo "<br><button id='catalogue' onclick='link1()'>Catalogue</button>";
	}
}
else
{
	echo "<br><br><a id='login' href='Mlogin.php'>Please click here to login</a>";
}
echo "</div>";
?>
<div style="clear:both;width:100%;height:200px;"></div>
		<?php include_once('Mfooter.php'); ?>
</body>
