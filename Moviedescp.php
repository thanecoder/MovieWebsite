<html>
<head>
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
#poster
{
	width:350px;
	height:350px;
	float:left;
	border:none;
	margin-left:10px;
	float:left;
}
#movie
{
	width:1250px;
	height:400px;
	border:none;
	float:left;
	margin-top:50px;
	font-family:Georgia;
}
#add
{
    background-color:#1E90FF;
    border:none;
    display:inline-block;
	text-align:center;
    font-family:Arial;
	padding: 15px 32px;
	margin-left:30px;
	margin-top:50px;
}

</style>
<script>
http1=new XMLHttpRequest();
http2=new XMLHttpRequest();
function add()
{
	var id=document.getElementById('id').value;
	var name=document.getElementById('name').value;
	var cost=document.getElementById('cost').value;
	var quantity=document.getElementById('quantity').value;
    
	http1.open("GET", "Maddtocart.php?id=" + id +"&name=" +  name  +"&cost="+cost+"&quantity="+quantity, true);
  http1.send();
  http1.onreadystatechange=function() {
    if(http1.readyState == 4) {
      document.getElementById('text2').innerHTML = http1.responseText;
    }
  }
}
function add1()
{
	var pid=document.getElementById('id').value;
	var uname=document.getElementById('uname').value;
	var pname=document.getElementById('pname').value;
	var review=document.getElementById('review').value;
    
	http2.open("GET", "Mreview.php?pid=" + pid +"&uname=" +  uname  +"&pname="+pname+"&review="+review, true);
  http2.send();
  http2.onreadystatechange=function() {
    if(http2.readyState == 4) {
      document.getElementById('text3').innerHTML = http2.responseText;
    }
  }
}
function visible(id)
{
	if(id=='poster')
	{document.getElementById('trailer').style.display='block';}
	if(id=='showimg2')
	{document.getElementById('showdiv2').style.display='block';}
if(id=='showimg3')
	{document.getElementById('showdiv3').style.display='block';}
if(id=='showimg4')
	{document.getElementById('showdiv4').style.display='block';}
if(id=='showdiv2')
	{document.getElementById('showdiv2').style.display='block';}
if(id=='showdiv3')
	{document.getElementById('showdiv3').style.display='block';}
if(id=='showdiv4')
	{document.getElementById('showdiv4').style.display='block';}
}
function invisible(id)
{
	if(id=='showdiv2')
	{document.getElementById('showdiv2').style.display='none';}
    if(id=='showdiv3')
	{document.getElementById('showdiv3').style.display='none';}
    if(id=='showdiv4')
	{document.getElementById('showdiv4').style.display='none';}
	if(id=='showimg2')
	{document.getElementById('showdiv2').style.display='none';}
    if(id=='showimg3')
	{document.getElementById('showdiv3').style.display='none';}
    if(id=='showimg4')
	{document.getElementById('showdiv4').style.display='none';}
}
</script>
</head>
<body>
<?php
include_once("Head.php");
include_once("Mautocomp.php");
echo "<div style='width:1000px;height:50px;'></div>";
$id=@$_GET["id"];
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$sql="select * from movie where p_id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
<div id="movie">
<img id="poster" src="UPLOADING/<?php echo $row['p_name'] ; ?>.jpg" onclick="visible(this.id)" />
<div style="width:50px;height:350px;float:left;"></div>
<div style="margin-right:50px;">
<input type="hidden" id="id" style="border:none;" value="<?php echo $row['p_id'] ; ?>" readonly />
<br>
NAME:<input type="text" id="name" size="30" style="border:none;" value="<?php echo $row['p_name'] ; ?>" readonly />
<br>
DESCRIPTION:<input type="text" size="30" id="descrp" style="border:none;" value="<?php echo $row['description'] ;?>" readonly />
<br>
GENRE:<input type="text" id="genre" size="30" style="border:none;" value="<?php echo $row['genre'] ; ?>" readonly />
<br>
COST:<input type="text" id="cost" size="30" style="border:none;" value="<?php echo $row['price'];?>" readonly />
<br>
QUANTITY:<input type="number" id="quantity" size="30" value="1" style="border:none;" />
<br>
<input id="add" type="button" value="Add to Cart" onclick="add()" />
<br><br><br>
<span id="text2" style="width:100;height:100"></span>
</div>
</div>
<div id="trailer" style="display:none;width:1300px;height:500px;float:left;">
<video  style="width:1300px;height:500px;" controls autobuffer>
<source src="UPLOADING/<?php echo $row['p_name'] ; ?> trailer.webm" type="video/webm" />
<source src="UPLOADING/<?php echo $row['p_name'] ; ?> trailer.ogg" type="video/ogg" />
<source src="UPLOADING/<?php echo $row['p_name'] ; ?> trailer.mp4" type="video/mp4" />
</video>
</div>
<br>
<div style="clear:both;width:1000px;height:40px;float:left"></div>
<div style="float:left;">
<B>REVIEWS:</B>
<?php
	echo "<input type='hidden' id='pid' value='".$row['p_id']."'/>
    <table><tr><td>NAME:</td><td><input type='text' id='uname' /></td></tr>
	<tr><td>PRODUCT:</td><td><input type='text' id='pname' value='".$row['p_name']."' readonly /></td></tr>
	<tr><td>REVIEW:</td><td><textarea rows='2' cols='50' id='review'></textarea></td></tr>
	</table>
    <input type='button' value='Submit review' onclick=add1()>";
?>
<span id="text3" style="width:100;height:100;"></span>
<?php include_once("Mreviewed.php"); ?>
</div>
<div style="clear:both;width:1000px;height:40px;float:left">SIMILAR</div>
<div style="float:left;">
<?php
$id=@$_GET['id'];
$servername="localhost";
$username="root";
$password="";
$conn=@mysqli_connect($servername,$username,$password,'moviewebsite');
if(!$conn)
{
die ("Connection failed:".mysqli_connect_error());
}
$sql="select * from movie where p_id='$id'";
$result=mysqli_query($conn,$sql);
$row=@mysqli_fetch_array($result);
$genre=$row['genre'];
$sql="select * from movie where genre='$genre'";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
for($i=2;$i<=4;$i++)
{
	$row=mysqli_fetch_array($result);
	$n='UPLOADING/'.$row['p_name'].'.jpg';
	$s='showimg'.$i;
	$d='showdiv'.$i;
    echo '<img id="'.$s.'" src="'.$n.'" onmousemove="visible(this.id)" onmouseout="invisible(this.id)" style="width:300px;height:300px;float:left;"/>
    <span id="'.$d.'" onmouseover="visible(this.id)" onmouseout="invisible(this.id)" style="width:300px;height:300px;display:none;float:left;">NAME:'.$row['p_name'].'<br>Description:'.$row['description'].'<br>Genre:'.$row['genre'].'<br>
    <a id="descp" href="Moviedescp.php?id='.$row['p_id'].'"><img src="monitor.png" align="middle" style="width:25px;height:25px;" />&nbspSee description and reviews</a><br><br></span>';
}
?>
</div>
</body>