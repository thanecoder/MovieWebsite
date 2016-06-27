<?php
$pid=$_GET['pid'];
$uname=$_GET['uname'];
$pname=$_GET['pname'];
$review=$_GET['review'];
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$sql="insert into review(uname,p_id,review) values('$uname',$pid,'$review')";
if(mysqli_query($conn,$sql))
{
	echo "Review accepted <br>";
}
else
{
	echo mysqlI_error($conn);
}
?>
 