<?php
@session_start();
$pid=$_GET['pid'];
$servername="localhost";
$username="root";
$password="";
$id=$_SESSION['user_id'];
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$sql="select * from paid_cart where p_id='$pid' and user_id='$id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
echo "<video style='border:1px solid black;width:100%;height:100%;' controls autobuffer>
<source src='UPLOADING/".$row['p_name'].".webm' type='video/webm' />
<source src='UPLOADING/".$row['p_name'].".ogg' type='video/ogg' />
<source src='UPLOADING/".$row['p_name'].".mp4' type='video/mp4' />
</video>";
}