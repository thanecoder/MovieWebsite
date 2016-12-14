<title>MovieShop-Logging Out</title>
<style>
#cata
{
	color:white;
	border:none;
	display:inline-block;
	padding:8px 8px;
	font-size:22px;
	text-decoration:none;
	background-color:#DD4132;
}
</style>
<body  style="background-color:#1f1f1f;color:white;">
<?php
 include_once("Head.php"); 
 @session_start();
 unset ($_SESSION['user_status']);
 unset ($_SESSION['user_name']);
 session_destroy();
 echo "<br />";
 echo '<h2 style="margin-top:250px;">Thank u visit again</h2><br>';
 echo "<br />";
 echo '<a id="cata" href=Moviecatalogue.php />Click here to go to catalogue again</a>';
 ?>
<div style="clear:both;width:100%;height:200px;"></div>
<?php include_once('Mfooter.php'); ?>
 