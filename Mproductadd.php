<head>
<style>
#admin {
    border-color:black;
	border: 2px solid black;
    padding: 100px; 
    width: 500px;
    height: 250px;    
}
#navbar
{
list-style-type:none;
padding:0;
margin:0;
}
</style>
</head>
<body  bgcolor="#92B6D5">
<?php
include_once("Head.php");
$p_id=$_POST['id'];
$pname=$_POST['pname'];
$year=$_POST['year'];
$genre=$_POST['genre'];
$descrp=$_POST['descrp'];
$cost=$_POST['cost'];
if($_FILES["file"]["error"]>0)
{
	echo 'Error'.$_FILES['file']['error']."<br />";
}
else
{
	/*
	echo 'Upload: '.$_FILES['file']['name'];
	echo "<br />";
	echo 'Temp name: '.$_FILES['file']['tmp_name'];
	echo "<br />";
	echo 'Size: '.(($_FILES['file']['size'])/(1024*1024))."Mbs";
	echo "<br />";
	echo 'Type: '.$_FILES['file']['type'];
	*/
	$_FILES['file']['name']="$pname.jpg";
	move_uploaded_file($_FILES['file']['tmp_name'],"UPLOADING/".$_FILES['file']['name']);
}
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$sql="insert into movie(p_id,p_name,year,genre,description,price) values($p_id,'$pname',$year,'$genre','$descrp',$cost)";
if(mysqli_query($conn,$sql))
{
	
	echo '<br><br><br><br><b>ITEM INSERTED SUCCESSFULLY</B><a href="Madmin.php">ADMIN PANEL</a>';
	
}
else
{
	echo "Error inserting:".mysqli_error($conn);
}
mysqli_close($conn);
?>