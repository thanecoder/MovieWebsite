<?php
$pid=$_GET['pid'];
$uname=$_GET['uname'];
$pname=$_GET['pname'];
$ratings=$_GET['rating'];
$review=$_GET['review'];
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$sql="insert into review(uname,p_id,review,ratings) values('$uname',$pid,'$review',$ratings)";
if(mysqli_query($conn,$sql))
{
	echo "Review accepted <br>";
}
else
{
	echo mysqli_error($conn);
}
?>
 