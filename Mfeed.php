<?php
// Code for storing feedback of users 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$username="root";
	$password="";
	$servername="localhost";
	$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
	if(!$conn)
	{
		die ("Connection failed:".mysqli_connect_error());
	}
	$sql="insert into feedback(name,email,feedback) values('$name','$email','$comment')";
	if(mysqli_query($conn,$sql))
	{
		include_once("Mthanks.php");
	}
	else
	{
		mysqli_error($conn);
	}
?>
