<html>
<head>
<?php include_once("Head.php"); ?>
<script>
function confirm()
{
	var str1=document.getElementById('cpass1').value;
	var str2=document.getElementById('cpass2').value;
	if((str1 == str2) && (str1 != "" && str2 != ""))
	{
		var ans="confirmed";
		document.getElementById('span').innerHTML=ans;
		document.getElementById('submit').style.display='block';
	}
	else
	{
		document.getElementById('cpass2').value="";
		var ans="passwords do not match";
		document.getElementById('span').innerHTML=ans;
	}
}
function validate1()
{
	var str1=document.getElementById('name').value;
	var str2=document.getElementById('email').value;
	var str3=document.getElementById('cpass1').value;
	var str4=document.getElementById('cpass2').value;
	if((str1 == "" && str2 == "" ) && (str3 == "" && str4 == ""))
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
#login
{
	margin-left:440px;
	margin-top:100px;
	width:350px;
	height:350px;
	box-shadow:3px 3px 3px;
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
</style>
</head>
<body>
<div  id="login" style="width:350px;height:350px;box-shadow:3px 3px 3px;border:1 px solid black;">
<form method="post" action="Mregister.php">
<table >
<tr>REGISTRATION</tr>
<tr><td>NAME:</td></tr>
<tr><td colspan="2"><input size="20" id="name" name="name" type="text"></tr></td>
<tr><td>E-MAIL ID:</td></tr>
<tr><td colspan="2"><input size="20" id="email" name="email" type="email"></tr></td>
<tr><td>PASSWORD:</td></tr>
<tr><td colspan="2"><input size="20" id="cpass1" name="cpass1" type="password"></tr></td>
<tr><td>CONFIRM PASSWORD:</td></tr>
<tr><td><input size="20" id="cpass2" type="password" onblur="confirm()"><td><span id="span"></span></tr></td>
<tr><td><input id="submit" type="submit" style="display:none;"></tr></td>
</table>
</form>
</div>
</body>
