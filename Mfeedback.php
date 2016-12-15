<!--Code for taking feedback from user-->
<html>
	<head>
		<style>
		@keyframes bounceIn {
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
		.feed
		{
			width:600px;
			height:70%;
			border:none;
			color:white;
			font-family:Arial;
			margin-left:34%;
			margin-bottom:50px;
			margin-top:30px;
			float:left;
/*			box-shadow:3px 3px 3px 3px white;
			border:3px solid;
			border-color:white;
			border-radius:30px;*/
			background-color:transparent;
			padding: 20px 20px;
		}
		.feed input,textarea
		{
			background-color:transparent;
			border-color:transparent;
			box-shadow:3px 3px 3px white;
			color:white;
		}
		#sfeed
		{
			color:white;
			background-color:red;
			text-align:center;
			border-color:none;
			font-family:Arial;
			font-size:20px;
			border-radius:5px;
		}
		</style>
	</head>
	<body style="overflow-x:hidden;background-color:#1f1f1f ">
		<?php
		include_once('Head.php');
		?>
		<div id="top1">
			GIVE US YOUR FEEDBACK
		</div>
		<div class="feed">
			<form method="post" action="Mfeed.php">
				Name:
				<br>
				<input type="text" name="name"/>
				<br>
				<br>
				Email Address:
				<br>
				<input type="email" name="email"/>
				<br>
				<br>
				Comments:
				<br>
				<textarea rows="6" cols="50" name="comment"></textarea>
				<br>
				<br>
				<input type="submit" id="sfeed" name="sfeed" value="Submit Feedback" />
			</form>
		</div>
		<div style="clear:both;width:100%;height:200px;"></div>
		<?php include_once('Mfooter.php'); ?>
	</body>
</html>
