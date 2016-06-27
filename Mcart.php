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
	text-decoration:none;
}
#remove
{
    background-color:#1E90FF;
	color:white;
    border:none;
    display:inline-block;
	text-align:center;
    font-family:Arial;
	font-size:0.8em;
	padding: 5px 5px;
	text-decoration:none;
}
#payment
{
    background-color:#F4A460;
	color:black;
    border:none;
    display:inline-block;
	text-align:center;
    font-family:Arial;
	font-size:1em;
	padding: 5px 5px;
	text-decoration:none;
}
</style>
<script>
function link1()
{
    window.location='Moviecatalogue.php';
}
</script>
<?php
session_start();
include_once("Head.php");
echo "<br><br><br>";
if(isset ($_SESSION['user_id']))
{$id=$_SESSION['user_id'];	
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
if($rowcount>0)
{for($count=0;$count<$rowcount;$count++)
{
	$row=mysqli_fetch_array($result);
	echo '<div style="margin-top:50px;width:1000;height:100px">
	<table><tr><td>NAME:</td><td>'
	.$row['p_name'].
	'</td></tr>
	<tr><td>COST:</td><td>'
	.$row['price'].
	'</td></tr><tr><td>QUANTITY:</td><td>'
	.$row['quantity'].
	'</td></tr></div></table>';
	echo '<a id="remove" href="Mremove.php?sid='.$row['s_id'].'">Remove from cart</a>';
	$row++;
}
echo "<br><B>TOTAL BILL</B><br>";
include_once('Mbill.php');
echo "<form method='post' action='Mpayment.php'>
<input id='payment' type='submit' value='Proceed To Payment' >
</form>";
}
else
{
if($rowcount==0)
{
	echo "<br><button id='payment' onclick='link1()'>Catalogue</button>";
}
}
}
else
{
	echo "<br><br><a id='login' href='Mlogin.php'>Please click here to login</a>";
}
?>
