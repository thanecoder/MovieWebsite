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
$sql="select * from review where p_id='$id'" ;
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
$count=0;
$count1=0;
echo "<h3 style='color:white;'>Reviews</h3>";
while($count<$rowcount)
{
	$count1=0;
	$row=mysqli_fetch_array($result);
	echo"<div style='border:none;color:#98ddde;float:left;'>".$row['uname']."</div>";
	while($count1<$row['ratings'])
	{
	echo"<img src='star.png' style='width:15px;height:15px;float:left;'></img>";
	$count1++;
	}
	echo "<div style='color:white;'><br>".$row['review']."<br></div>";
	echo "<div style='width:300px;height:20px;'></div>";
	$count++;
}
 ?>