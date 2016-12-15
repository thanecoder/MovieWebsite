<!-- This file is for the shopping cart. -->
<title>MovieShop-Your Cart</title>
<style>
#login
{
    background-color:#1E90FF;
	color:white;
    border:none;
    display:inline-block;
	text-align:center;
    font-family:Arial;
	padding: 15px 32px;
	margin-top:260px;
	text-decoration:none;
}
#remove
{
    background-color:#DD4132;
	color:white;
    border:none;
    display:inline-block;
	text-align:center;
    font-family:Arial;
	font-size:0.8em;
	padding: 5px 5px;
	text-decoration:none;
	border-radius:4px;
	margin-left:-100px;
}
#catalogue
{
    background-color:#034f84;
	color:white;
    border:none;
    display:inline-block;
	text-align:center;
    font-family:Arial;
	font-size:18px;
	padding: 5px 5px;
	text-decoration:none;
	height:50px;
	width:150px;
	border-radius:5px;
	box-shadow: 3px 3px 3px grey;
}
#payment
{
    background-color:#034f84;
	color:white;
    border:none;
    display:inline-block;
	text-align:center;
    font-family:Arial;
	font-size:18px;
	padding: 5px 5px;
	text-decoration:none;
	height:50px;
	width:200px;
	border-radius:5px;
	margin-top:10px;
}
#cartcent
{
	text-align:center;
	margin-left:300px;
	width:50%;
	color:white;
	padding:10px;
	height:90%;
    position:relative;
}
</style>
<script>
function link1()
{
    window.location='Moviecatalogue.php';
}
</script>
<body style="color:white;background-color:#1f1f1f">
<?php
session_start();
include_once("Head.php");
echo "<br><br><br>";
if(isset ($_SESSION['user_status']))
{
	$id=$_SESSION['user_id'];	
	$servername="localhost";
	$username="root";
	$password="";
	$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
	if(!$conn)
	{
	die ("Connection failed:".mysqli_connect_error());
	}
	$sql="select * from s_cart where user_id='$id'";
	$result=mysqli_query($conn,$sql);
	$count=0;
	$rowcount=mysqli_num_rows($result);
	echo "<div style='background-color:#5B5EA6;margin-top:260px;color:white;font-size:2.2em;font-family:arial;width:100%;text-align:center;height:40px;'><B>YOUR CART</B></div>";
	echo "<div id='cartcent'>";
	if($rowcount>0)
	{
		for($count=0;$count<$rowcount;$count++)
		{
			$row=mysqli_fetch_array($result);
			$n='UPLOADING/'.$row['p_name'].'.jpg';
			echo '<div style="margin-top:50px;width:700px;height:120px;border:2px solid grey;">
			<img src="'.$n.'" style="width:70px;height:100px;float:left;margin-left:10px;margin-top:5px;"></img>
			<table style="margin-left:5px;color:white;font-size:20px;"><tr><td><b>NAME:</b></td><td>'
			.$row['p_name'].
			'</td></tr>
			<tr><td><b>COST:</b></td><td>'
			.$row['price'].
			'</td></tr><tr><td><b>QUANTITY:</b></td><td>'
			.$row['quantity'].
			'</td></tr></table>
			<a id="remove" href="Mremove.php?sid='.$row['s_id'].'">Remove from cart</a></div>';
			$row++;
		}
		echo "<br><br><br><B>TOTAL BILL</B><br><br>";
		include_once('Mbill.php');
		echo "<form method='post' action='Mpayment.php'>
		<input id='payment' type='submit' value='Proceed To Payment' >
		</form>";
	}
	else if($rowcount==0)
	{
		echo "<h4 style='color:white;'>Cart is empty</h4>";
		echo "<br><button id='catalogue' onclick='link1()'>Catalogue</button>";
	}
}
else
{
	echo "<br><br><a id='login' href='Mlogin.php'>Please click here to login</a>";
}
echo "</div>";
?>
<div style="clear:both;width:100%;height:200px;"></div>
<?php include_once('Mfooter.php'); ?>
</body>
