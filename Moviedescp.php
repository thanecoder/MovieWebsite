<!-- This file is for the description of each movie -->

<html>
<head>
<title>
MovieShop-
<?php
$id=@$_GET["id"];
//Database connection code.	
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
echo $row['p_name'];
?>
</title>
<style>
#rsubmit
{
	color:white;
	border:none;
	margin-left:10px;
	display:inline-block;
	padding:5px 5px;
	text-decoration:none;
	background-color:#DD4132;
}
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
	height:400px;
	float:left;
	border:none;
	margin-left:10px;
	float:left;
}
#movie
{
	width:1250px;
	height:500px;
	border:none;
	float:left;
	margin-top:300px;
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
	color:white;
}

</style>
<script>
//Ajax code starts here.	
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
	var ratings=document.getElementById('ratings').value;
    if(uname != "" && review != "")
	{	http2.open("GET", "Mreview.php?pid=" + pid +"&uname=" +  uname  +"&pname="+ pname +"&rating="+     ratings+"&review="+review, true);
		http2.send();
		http2.onreadystatechange=function()
		{
			if(http2.readyState == 4) 
			{
				document.getElementById('text3').innerHTML = http2.responseText;
			}
		}
	}
	else
	{
	alert("Cannot submit review without your name or review.");
	}
}
//Code for hiding and revealing details for similar movies.	
function visible(id)
{
	if(id=='poster')
	{document.getElementById('trailer').style.display='block';}
	if(id=='showimg0')
	{document.getElementById('showdiv0').style.display='block';}
	if(id=='showimg1')
	{document.getElementById('showdiv1').style.display='block';}
    if(id=='showimg2')
	{document.getElementById('showdiv2').style.display='block';}
	if(id=='showimg3')
	{document.getElementById('showdiv3').style.display='block';}
	if(id=='showdiv0')
	{document.getElementById('showdiv0').style.display='block';}
	if(id=='showdiv1')
	{document.getElementById('showdiv1').style.display='block';}
	if(id=='showdiv2')
	{document.getElementById('showdiv2').style.display='block';}
	if(id=='showdiv3')
	{document.getElementById('showdiv3').style.display='block';}
}
function invisible(id)
{
	if(id=='showdiv0')
	{document.getElementById('showdiv0').style.display='none';}
	if(id=='showdiv1')
	{document.getElementById('showdiv1').style.display='none';}
    if(id=='showdiv2')
	{document.getElementById('showdiv2').style.display='none';}
    if(id=='showdiv3')
	{document.getElementById('showdiv3').style.display='none';}
	if(id=='showimg0')
	{document.getElementById('showdiv0').style.display='none';}
	if(id=='showimg1')
	{document.getElementById('showdiv1').style.display='none';}
    if(id=='showimg2')
	{document.getElementById('showdiv2').style.display='none';}
    if(id=='showimg3')
	{document.getElementById('showdiv3').style.display='none';}
}
</script>
</head>
<body style="background-color:#1f1f1f;">
<?php
include_once("Head.php");
include_once("Mautocomp.php");
echo "<div style='width:1000px;height:50px;'></div>";
$id=@$_GET["id"];
//Database connection code.	
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
<img id="poster" src="UPLOADING/<?php echo $row['p_name'] ; ?>.jpg" title="Click here to see trailer" onclick="visible(this.id)" />
<div style="width:50px;height:350px;float:left;"></div>
<div style="height:500px;margin-right:50px;color:white;">
<input type="hidden" id="id" style="border:none;" value="<?php echo $row['p_id'] ; ?>" readonly />
<br>
NAME:<input type="text" id="name" size="38" style="border:none;color:white;background-color:#1f1f1f;font-size: 18px;" value="<?php echo $row['p_name'] ; ?>" readonly />
<br>
SYNOPSIS:<div style="font-family:Arial;width:1000px;height:50px;border:none;font-size:1.1em;background-color:#1f1f1f;"><?php echo $row['description'] ;?></div>
<br>
GENRE:<input type="text" id="genre" size="30" style="background-color:#1f1f1f;font-size: 18px;border:none;color:white;" value="<?php echo $row['genre'] ; ?>" readonly />
<br>
COST:Rs.<input type="text" id="cost" size="30" style="background-color:#1f1f1f;font-size: 18px;border:none;color:white;" value="<?php echo $row['price'];?>" readonly />
<br>
RATINGS:<?php include_once("Mratings.php"); ?>
QUANTITY:<input type="number" id="quantity" size="10" value="1" style="background-color:#1f1f1f;font-size:18px;border:none;color:white;" />
<br>
<input id="add" type="button" value="Add to Cart" onclick="add()" />
<br><br><br>
<span style="width:50px;height:100;float:left;"></span>
<span id="text2" style="width:100;height:100;"></span>
</div>
</div>
<?php
$sql="select * from movie where p_id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
<div id="trailer" style="display:none;width:1300px;height:500px;float:left;">
<video  style="width:1300px;height:500px;" controls autobuffer>
<source src="<?php echo $row['p_name'] ; ?>.webm" type="video/webm" />
<source src="<?php echo $row['p_name'] ; ?>.ogg" type="video/ogg" />
<source src="<?php echo $row['p_name'] ; ?>.mp4" type="video/mp4" />
</video>
</div>


<div style="clear:both;width:100%;height:40px;float:left"></div>
<div style="float:left;width:100%;">
<div style="color:black;font-family:Arial;font-size:1.3em;width:100%;height:40px;
float:left;text-align:left;color:white;">Got Reviews! Write Them Below</div>
<?php
	//Show the user reviews.
	echo "
    <table style='color:white;'>
	<tr><td><input type='hidden' id='pid' value='".$row['p_id']."'></td></tr>
	<tr><td>NAME:</td><td><input type='text' id='uname'></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td>MOVIE:</td><td><input type='text' style='font-size:1em;border:none;background-color:#1f1f1f;color:white;' size='38' id='pname' value='".$row['p_name']."' readonly ></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td>RATINGS:</td><td><input type='text' size='3' id='ratings'><b>/5</b></td</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td>REVIEW:</td><td><textarea rows='2' cols='50' id='review'></textarea></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	</table>";
    echo "<input type='button' id='rsubmit' value='Submit review' onclick=add1()>";
?>
<span id="text3" style="width:100;height:100;color:green;"></span>
<br><br>

<?php include_once("Mreviewed.php"); ?>

</div>

<div style="clear:both;width:1000px;height:20px;float:left"></div>
<div style="color:white;font-family:Arial;font-size:2.2em;width:100%;height:40px;
float:left;background-color:#034F84;text-align:center;">SIMILAR MOVIES</div>
<div style="clear:both;width:1000px;height:20px;float:left"></div>
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
//Show the links for similar genres movies.	
$sql="select * from movie where p_id='$id'";
$result=mysqli_query($conn,$sql);
$row=@mysqli_fetch_array($result);
$genre=$row['genre'];
$sql="select * from movie where genre='$genre'";
$result=mysqli_query($conn,$sql);
for($i=3;$i>=0;$i--)
{
	mysqli_data_seek($result,$i);
	$row=mysqli_fetch_array($result);
	if($id != $row['p_id'])
	{
		$n='UPLOADING/'.$row['p_name'].'.jpg';
		$s='showimg'.$i;
		$d='showdiv'.$i;
		echo '<img id="'.$s.'" src="'.$n.'" onmousemove="visible(this.id)" onmouseout="invisible(this.id)" style="width:300px;height:350px;float:left;"/>
		<span id="'.$d.'" onmouseover="visible(this.id)" onmouseout="invisible(this.id)" style="width:300px;height:350px;color:white;display:none;float:left;font-size:18px;font-family:Arial;"><u>Name</u>:'.$row['p_name'].'<br><br><br><u>Synopsis</u>:'.$row['description'].'<br><br><br><u>Genre</u>:'.$row['genre'].'<br><u>Ratings</u>:'.$row['ratings'].'/5<br>
		<a id="descp" href="Moviedescp.php?id='.$row['p_id'].'"><img src="monitor.png" align="middle" style="width:25px;height:25px;" />&nbspSee description and reviews</a><br><br></span>';
		echo '<div style="width:30px;height:350px;float:left;"></div>';
	}
}
?>
<div style="clear:both;width:100%;height:50px;"></div>
<?php include_once('Mfooter.php'); ?>
</div>
</body>
