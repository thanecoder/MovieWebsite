<style>
#cata
{
	color:white;
	border:none;
	display:inline-block;
	padding:8px 8px;
	text-decoration:none;
	background-color:#DD4132;
}
</style>
<?php
 include_once("Head.php"); 
 @session_start();
 unset ($_SESSION['user_status']);
 unset ($_SESSION['user_name']);
 session_destroy();
 echo "<br />";
 echo 'Thank u visit again';
 echo "<br />";
 echo '<a id="cata" href=Moviecatalogue.php />Click here to go to catalogue again</a>';
 ?>
 