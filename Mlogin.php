<html>
<head>
<style>
#login
{
	font-family:Arial;
	margin-left:440px;
	margin-top:100px;
	width:350px;
	height:350px;
	box-shadow:3px 3px 3px grey;
	border:1 px solid black;
}
#submit
{
	color:white;
	border:none;
	display:inline-block;
	padding:8px 8px;
	text-decoration:none;
	background-color:#DD4132;
}
#register
{
	color:black;
	border:none;
	text-decoration:none;
	font-family:Arial;
}
#register:active,#register:hover
{
	color:#DD4132;
	border:none;
	text-decoration:none;
	font-family:Arial;
}
</style>
<title>Login Page</title>
<?php include_once("Head.php"); ?>
</head>
<body>
<div  id="login" style="">
<table style="width:200px;height:200px;">
<form method='post' action='Mlog.php'>
<tr><td colspan="2" align="center">LOGIN 
</td></tr>
<tr>
<td>LOGIN ID:</td></tr>
<tr><td colspan="2">
<input type="text" name="email" id="email" size="20" style="border:#FFFFFF;border-bottom: 2px solid #3F729B;" placeholder="ENTER E-MAIL ID"/></td>
</tr>
<tr>
<td>PASSWORD:</td></tr>
<tr><td colspan="2">
<input type="password" name="pswrd" id="pswrd" size="20" style="border:#FFFFFF;border-bottom: 2px solid #3F729B;" placeholder="ENTER PASSWORD"/></td>
</tr>
<tr><td colspan="2"><input id="submit" type="submit"/></td></tr>
</table>
</form>
<a id="register" href="Mregistration.php">NEW USER?PLEASE CLICK HERE TO REGISTER</a>
</div>
</body>
</body>
</html>