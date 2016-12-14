<html>
	<head>
		<style>
			@keyframes bounceIn 
			{
			  0% 
			  {
			  	    transform: scale(0.1);
				    opacity: 0;
  			  }
  			100% 
  			  {
    		   		transform: scale(1);
  			  }
			}
			#top1
			{
				width:70%
				height:20%;
				float:left;
				color:white;
				margin-top:250px;
				font-size:60px;
				font-family:Arial;
				margin-left:15%;
				animation:bounceIn 1s;
			}
		</style>
	</head>
	<body style="overflow-x:hidden;background-color:#1f1f1f ">
		<?php
			include_once('Head.php');
		?>
		<div id="top1">
			THANKS FOR GIVING US YOUR FEEDBACK
		</div>
		<div style="clear:both;width:100%;height:200px;"></div>
		<?php include_once('Mfooter.php'); ?>
	</body>
</html>
