<!--This code is for registration form of user-->
<html>
<head>
<title>MovieShop-Register</title>
<?php include_once("Head.php"); ?>
<!--JavaScript validation code starts here-->	
<script>
function confirm()
{
	var str1=document.getElementById('cpass1').value;
	var str2=document.getElementById('cpass2').value;
	if((str1 == str2) && (str1 != "" && str2 != ""))
	{
		var ans="confirmed";
		document.getElementById('span1').innerHTML=ans;
		document.getElementById('submit').style.display='block';
	}
	else
	{
		document.getElementById('cpass2').value="";
		var ans="passwords do not match";
		document.getElementById('span1').innerHTML=ans;
	}
}
function validate1()
{
	var str1=document.getElementById('name').value;
	var str2=document.getElementById('email').value;
	var str3=document.getElementById('cpass1').value;
	var str4=document.getElementById('cpass2').value;
	if(str1 =="" && str2 =="")
	{
		alert("Please fill all the fields.");
		return false;
	}
	else if(str3 == "" && str4 == "")
	{
		alert("Please fill all the fields.");
		return false;
	}
	else
	{
		return true;
	}
}
</script>
<style>
#registration
{
	box-shadow:3px 3px 3px grey;
	margin-left:440px;
	margin-top:350px;
	width:350px;
	height:350px;
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
	color:white;
	border:none;
	text-decoration:none;
	font-family:Arial;
}
#name,#email,#cpass1,#cpass2{
	background-color:#1f1f1f;
	border:none;
	border-bottom:1px solid grey;
	color:white;
	font-size:18px;
}
</style>
</head>
<body style="overflow-x:hidden;color:white;background-color:#1f1f1f;">
<div  id="registration">
<form method="post" action="Mregister.php" onsubmit="return validate1()">
<table>
<tr>REGISTRATION</tr>
<tr><td>NAME:</td></tr>
<tr><td colspan="2"><input size="20" id="name" name="name" type="text"></td></tr>
<tr><td>E-MAIL ID:</td></tr>
<tr><td colspan="2"><input size="20" id="email" name="email" type="email"></td></tr>
<tr><td>PASSWORD:</td></tr>
<tr><td colspan="2"><input size="20" id="cpass1" name="cpass1" type="password"></td></tr>
<tr><td>CONFIRM PASSWORD:</td></tr>
<tr><td><input size="20" id="cpass2" type="password" onblur="confirm()"><td><span id="span1"></span></td></tr>
<tr><td><input id="submit" type="submit" style="display:none;"></td></tr>
</table>
</form>
<div style="clear:both;width:100%;height:200px;"></div>
<?php include_once('Mfooter.php'); ?>
</div>
</body>
