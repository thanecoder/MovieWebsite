<style>
@keyframes bounceIn {
	  0% 
	  {
 	  	   transform: scale(0);
	 	   opacity: 0;
  	  }
  100% 
  	  {
    	transform: scale(1);
  	  }
	}	
ul
{
	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
	background-color:transparent;
}
li
{
	float:right;
}
li a
{
	font-family:Arial;
	display:inline-block;
	border-radius:3px;
	color:white;
	text-align:center;
	padding:15px 15px;
	text-decoration:none;
}
li a:hover
{
	background-color:#355055;
}
#head
{
	width:100%;
	height:250px;
	background-color:black;
	border-radius:0px;
	top:0px;
	left:0px;
	position:absolute;
}
#logo
{
	transform: scale(1.1);
	animation:bounceIn 0.5s;
}
</style>
<div id="head">
<div style="width:100%;height:100px">
<br><br><br><br>
<br>




<!--Logo-->
<img id="logo" src="UPLOADING/logo1_white.png" height=150px width=500px style="margin-top:-45px;margin-left:20px;" alt="MovieShop"></img>
<div style="float:right;width:100px:height:10px;color:white;">
<?php 
@session_start();
if(isset ($_SESSION['user_status']))
{
	echo '<img src="userlogged.png" align="middle" style="width:35px;height:35px;" />&nbsp<b>Welcome</b> '.$_SESSION['user_name'].'&nbsp&nbsp<br />';
}
?>
</div>
</div>
<br>
<div style="width:100%;height:50px;margin-top:12px; animation:bounceIn 0.5s;">
<ul>
<?php 
@session_start();
if(isset ($_SESSION['user_id']))
{
	echo '<li><a href="Mplaylist.php"><img src="playlist.png" align="middle" style="width:35px;height:35px;" />&nbspYour Playlist</a></li>';
	echo '<li><a href="Mlogout.php"><img src="logout.png" align="middle" style="width:35px;height:35px;" />&nbspLog out</a></li>';
}
else
{
	echo '<li><a href="Mlogin.php"><img src="login.png" align="middle" style="width:35px;height:35px;" />&nbspLog In</a></li>';
	echo '<li><a href="Mregistration.php"><img src="user.png" align="middle" style="width:35px;height:35px;"/>&nbsp&nbspSign up</a></li>';
}
?>

<li><a href="Mcart.php"><img src="shopping-cart.png" align="middle" style="width:35px;height:35px;" /> &nbspCart </a></li>
<li><a href="Moviecatalogue.php"><img src="shop.png" align="middle" style="width:35px;height:35px;" /> &nbspHome</a></li>
</ul>

<?php include_once("Mautocomp.php"); ?>
</div>
</div>	
