<head>
<title>MovieShop</title>
</head>
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
	echo "<h2 style='color:white;background-color:#1f1f1f;'>User not found</h2>You have entered invalid information";
	echo "<a href='Mlogin.php'><br><br>Click here to go back to previous semester!</a>";
}
?>