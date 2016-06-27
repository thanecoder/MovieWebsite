<?php
session_start();
$cname=$_REQUEST['cname'];
$ctype=$_REQUEST['ctype'];
$cnum=$_REQUEST['cnum'];
$cvv=$_REQUEST['cvv'];
$edate1=$_REQUEST['edate1'];
$edate2=$_REQUEST['edate2'];
$cost=$_REQUEST['cost'];
$id=$_SESSION['user_id'];
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$sql="select * from bank where cnum='$cnum'";
$result=mysqli_query($conn,$sql);
if($result)
{
	$sql="select * from s_cart where user_id='$id'";
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
					echo "Error inserting:".mysqli_error($conn);
				}
				else
				{
					$sql="delete from s_cart where p_id='$pid'";
					$result=mysqli_query($conn,$sql);
					if(!$result)
					{
						echo "Error deleting:".mysqli_error($conn);
					}
				}
				$count++;
		}
		include_once("Mplaylist.php");
}
else
{
	echo "Invalid credentials";
}
?>