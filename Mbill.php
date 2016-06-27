<?php
@session_start();
$id=$_SESSION['user_id'];
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$sql="select sum(price) as cost from s_cart where user_id='$id'";
$result=mysqli_query($conn,$sql);
if (!$result)
{
	die("Select sum failed: ".mysqli_error($conn));
}
$count=0;
$rowcount=mysqli_num_rows($result);
while($count<=$rowcount)
{
	$row = mysqli_fetch_array($result);
    $_SESSION['bill']=$row['cost'];
	echo $row['cost'];
	
    $count++;
}
?>