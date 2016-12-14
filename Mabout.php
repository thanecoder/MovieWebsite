<html>
	<head>
	<style>
	@keyframes zoom 
		{
		  0% 
		  {
	 	  	   transform: scale(1);
		 	   opacity: 0;
	  	  }
	  100% 
	  	  {
	    	transform: scale(1.3);
	  	  }
		}
		#top1
		{
			width:50%
			height:20%;
			float:left;
			color:white;
			font-size:70px;
			font-family:Arial;
			margin-left:35%;
			
		}
		#peop
		{
			color:white;
			font-size:20px;
			font-family:arial;
			width:21%;
			height:450px;
			margin-top:20px;
			float:left;
			box-shadow:3px 3px 3px 3px white;
			margin-left:2%;
			border-radius:15px;
			padding:10px
		}
	
		.circ
		{
			color:white;
			width: 200px;
			height: 200px;
			border:5px solid;
			border-color:transparent;
			border-radius: 100px;
			-webkit-border-radius: 100px;
			-moz-border-radius: 100px;
			margin-left:10%;
			overflow:hidden;
		}
		.circ img
		{
			display:block;
			max-width:100%;
			max-height:100%;
			min-width:100%;
			min-height:100%;
			
		}
		.circ:hover
		{
			animation: zoom 1s;
		}
	</style>
	</head>
	<body style="overflow-x:hidden;background-color:#1f1f1f ">
		<?php
		include_once('Head.php');
		?>
		<div style="clear:both;width:100%;height:250px;"></div> 
		<div id="top1">
			OUR TEAM
		</div>
		<br><br><br><br><br>
		<div id="peop" style="background-color:red">
			<div class="circ" ">
				<img src="ash.jpeg"/>
			
			</div>
				ASHISH D'SA
				<br>
			An amazing guy with out of the box thoughts.
			<br>
			Roll no:101408
			
		</div>
		<div id="peop" style="background-color:blue">
			<div class="circ" ">
				<img src="jcm.jpg"/>
			</div>
				JENSON MANDY
				<br>
					The PJ man.
					<br>
					Roll no:101406
			
		</div>
		<div id="peop" style="background-color:green">
			<div class="circ" ">
				<img src="paritosh.jpg" />			 
			</div>
				<br>
				 
					PARITOSH NICHAT
					<br>
				The no-nonsense studious guy.
				<br>
				Roll no:101436
		</div>
		<div id="peop" style="background-color:indigo">
			<div  class="circ">
				<img src="sajeetn1.png"/>
			</div>
			<br>
				SAJEET FRANCIS
				<br>
			A guy with a unique taste and creative mind.
			<br>
			Roll no:101447
			<div style="clear:both;width:100%;height:200px;"></div>
	</body>
	<?php include_once('Mfooter.php'); ?>
</html>
