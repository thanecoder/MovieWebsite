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
#cart
{
	color:white;
    background-color:#1E90FF;
    border:none;
    display:inline-block;
	text-align:center;
    font-family:Arial;
	text-decoration:none;
	padding: 15px 32px;
}
</style>
<?php
session_start();
$pid=$_GET["id"];
$name=$_GET["name"];
$cost=$_GET["cost"];
$quant=$_GET["quantity"];
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
if(isset($_SESSION['user_id']))
{
	$id=$_SESSION['user_id'];
	$name=addslashes($name);
    $sql="insert into s_cart(p_id,p_name,price,quantity,user_id) values($pid,'$name',$cost,$quant,$id)";
	if(mysqli_query($conn,$sql))
    {
	echo "Item inserted successfully <br> <a id='cart' href='Mcart.php'>Please click here to view cart</a>";
    }
    else
    {
	echo "Error inserting:".mysqli_error($conn);
    }
}
else
{
	echo "<a id='login' href='Mlogin.php'>Please click here to login</a>";
}
?>