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
}
#download
{
	color:white;
	border:none;
	display:inline-block;
	padding:8px 8px;
	font-family:Arial;
	text-decoration:none;
	background-color:#FFBB00;
}
</style>
<?php
@session_start();
$servername="localhost";
$username="root";
$password="";
$id=$_SESSION['user_id'];
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$sql="select * from paid_cart where user_id='$id'";
$result=mysqli_query($conn,$sql);
$count=0;
$rowcount=mysqli_num_rows($result);
if($rowcount>0)
{for($count=0;$count<$rowcount;$count++)
{
	$row=mysqli_fetch_array($result);
	echo '<div style="margin-top:50px;width:1000;height:100px">
	<table><tr><td>NAME:</td><td>'
	.$row['p_name'].
	'</td></tr>
	<tr><td>COST:</td><td>'
	.$row['price'].
	'</td></tr><tr><td>QUANTITY:</td><td>'
	.$row['quantity'].
	'</td></tr></div></table>';
	echo '<a id="play" href="Mplay.php?pid='.$row['p_id'].'">Play</a><br>';
	echo '<a id="download" href="Mdownload.php?file='.$row['p_name'].'.mp4">Download</a>';
	$row++;
}
}
?>