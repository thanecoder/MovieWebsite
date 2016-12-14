<style>
#descp
{
	color:white;
	border:none;
	margin-left:5px;
	display:inline-block;
	padding:8px 8px;
	text-decoration:none;
	background-color:#DD4132;
}
#descp:hover,#descp:active
{
	color:black;
	margin-left:5px;
	border:none;
	display:inline-block;
	padding:8px 8px;
	text-decoration:none;
	background-color:#034F84;
}
</style>
<script>
function visible(id)
{
	if(id=='showimg1')
	{document.getElementById('showdiv1').style.display='block';}
if(id=='showimg2')
	{document.getElementById('showdiv2').style.display='block';}
if(id=='showimg3')
	{document.getElementById('showdiv3').style.display='block';}
}
function invisible(id)
{
	if(id=='showimg1')
	{document.getElementById('showdiv1').style.display='none';}
if(id=='showimg2')
	{document.getElementById('showdiv2').style.display='none';}
if(id=='showimg3')
	{document.getElementById('showdiv3').style.display='none';}
}
</script>
<body>
<div>
<?php
$id=$_GET['id'];
$servername="localhost";
$username="root";
$password="";
$conn=@mysql_connect($servername,$username,$password);
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
mysql_select_db('moviewebsite',$conn);
$sql="select * from movie where p_id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysql_fetch_array($result);
$genre=$row['genre'];
$sql="select * from movie where genre='$genre'";
$result=mysqli_query($conn,$sql);
$rowcount=mysql_num_rows($result);
for($i=1;$i<4;$i++)
{
	$row=mysqli_fetch_array($result);
	$n=$row['p_name'].'.jpg';
    echo '<img id="showimg"'.$i.'" src="'.$n.'" onmousemove="visible(this.id)" onmouseout="invisible(this.id)" style="width:300px;height:300px;float:left;"/>
    <div id="showdiv"'.$i.' style="display:none;float:left;">NAME:'.$row['p_name'].'<br>Description:'.$row['description'].'<br>Genre:'.$row['genre'].'</div>
    <a id="descp" href="Moviedescp.php?id='.$row['p_id'].'"><img src="monitor.png" align="middle" style="width:25px;height:25px;" />&nbspSee description and reviews</a><br><br>';
}
?>
</div>
</body>