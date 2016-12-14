<body style="background-color:#1f1f1f;color:white;">
<?php
@session_start();
include_once("Head.php");
$cname=$_REQUEST['cname'];
$ctype=$_REQUEST['ctype'];
$cnum=$_REQUEST['cnum'];
$cvv=$_REQUEST['cvv'];
$edate1=$_REQUEST['edate1'];
$edate2=$_REQUEST['edate2'];
$cost=$_REQUEST['cost'];
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$id=$_SESSION['user_id'];
$sql="select * from bank where cnum=$cnum";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount>0)
{
	$sql="select * from s_cart where user_id=$id";
	$result=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($result);
	$count=0;
	while($count<$rowcount)
	{
			$row=mysqli_fetch_array($result);
			$pid=$row['p_id'];
			$pname=$row['p_name'];
			$price=$row['price'];
			$quantity=$row['quantity'];
			$sql="insert into paid_cart(p_id,p_name,price,quantity,user_id) values($pid,'$pname',$price,$quantity,$id)";
			$result=mysqli_query($conn,$sql);
			if(!$result)
			{
				mysqli_error($conn);
			}
			$sql="delete from s_cart where p_id=$pid";
			$result=mysqli_query($conn,$sql);
			if(!$result)
			{
				mysqli_error($conn);
			}
			$count++;
			$sql="select * from s_cart where user_id=$id";
			$result=mysqli_query($conn,$sql);
	}
}
else
{
	echo "Invalid credentials";
}
include_once("Mplaylist.php");
?>
