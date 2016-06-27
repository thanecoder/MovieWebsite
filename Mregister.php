<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['cpass1'];
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$userid=rand(0,999);
$sql="insert into user values($userid,'$email','$pass','$name')";
if(mysqli_query($conn,$sql))
{
	include_once("Mlogin.php");
}
else
{
	mysqli_error($conn);
}
?>