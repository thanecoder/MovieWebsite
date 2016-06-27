<?php
$email=$_POST["email"];
$password=$_POST["pswrd"];
$sql="SELECT * FROM user where email='$email' and password='$password'";
$con=@mysql_connect('localhost','root','');
mysql_select_db('moviewebsite',$con);
$result=mysql_query($sql,$con) or die(mysql_error());
if(mysql_num_rows($result)>0)
{
$row=mysql_fetch_assoc($result);
session_start();
$_SESSION['user_status']='logged in';
$_SESSION['user_id']=$row['user_id'];
$_SESSION['user_name']=$row['name'];
include_once('Moviecatalogue.php');
}
else
{
	echo "<h2>User not found</h2>You have entered invalid information";
}
?>