<style>
ul
{
	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
	background-color:#333;
}
li
{
	float:right;
}
li a
{
	font-family:Arial;
	display:inline-block;
	color:white;
	text-align:center;
	padding:20px 20px;
	text-decoration:none;
}
li a:hover
{
	background-color:#111;
}
#head
{
width:100%;
height:220px;
background-color:#333;
}
#search
{
	color:white;
	font-family:Arial;
	width:100%;
    height:25px;
    background-color:#333;
}
</style>
<body>
<div id="head">
<div style="width:100%;height:100px">
<br><br><br><br>
<br>
<div style="float:right;width:100px:height:10px;color:white;">
<?php 
@session_start();
if(isset ($_SESSION['user_status']))
{
	echo 'Welcome '.$_SESSION['user_name'].'<br />';
}
?>
</div>
</div>
<br>
<div style="width:100% height:50px">
<ul>
<?php 
@session_start();
if(isset ($_SESSION['user_id']))
{
	echo '<li><a href="Mlogout.php">Log out</a></li>';
}
else
{
	echo '<li><a href="Mlogin.php">Log In</a></li>';
}
?>
<li><a href="Mregistration.php">Sign in</a></li>
<li><a href="Mcart.php"><img src="shopping-cart.png" align="middle" style="width:25px;height:25px;" /> &nbspCart </a></li>
<li><a href="Moviecatalogue.php"><img src="shop.png" align="middle" style="width:25px;height:25px;" /> &nbspHome</a></li>
</ul>
</div>
<?php include_once("Mautocomp.php"); ?>
</div>