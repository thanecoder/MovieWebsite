<?php
$pid=$_GET['id'];
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$sql="select ratings from movie where p_id='$id'" ;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$count=0;
while($count<$row['ratings'])
{
	echo"<img src='star.png' style='width:15px;height:15px;'></img>";
	$count++;
}
echo "<br>";
 ?>