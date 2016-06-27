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
while($count<$rowcount)
{
	$row=mysqli_fetch_array($result);
	echo"<div style='width:300px;height:100px;border:1px solid black'><br>Name:".$row['uname']."<br>Review:".$row['review']."<br></div>";
	$count++;
}
 ?>