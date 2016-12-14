<html>
<title>Payment Portal</title>
<style>
#pay,#reset
{
    background-color:#3B5998;
    color:#FFFFFF;
	border:none;
    display:inline-block;
	text-align:center;
    font-family:Arial;
	padding:10px 10px;
}
</style>
<script>
	function allcaps()
	{
		var str=document.getElementById('cname').value;
		document.getElementById('cname').value=str.toUpperCase();
	}
		function checklen()
	{
		var num=/^[0-9]+$/;
		var str=document.getElementById('cnum').value;
		if(str.length!=16 || !str.match(num))
		{
			document.getElementById('cnum').value=" ";
			alert("Card number only 16 digits.Please enter valid card number.");
		}
	}
	function validate()
	{
		var str1=document.getElementById('cname').value;
		var str2=document.getElementById('ctype').value;
		var str3=document.getElementById('cnum').value;
		var str4=document.getElementById('cvv').value;
		var str5=document.getElementById('edate1').value;
		var str6=document.getElementById('edate2').value;
		var str7=document.getElementById('cost').value;
		if(str1 =="" || str2 =="")
		{
			alert("Please fill all the fields.");
			return false;
		}
		else if(str3 == ""|| str4 == "") 
		{
			alert("Please fill all the fields.");
			return false;
		}
		else if(str5 == ""|| str6 == "") 
		{
			alert("Please fill all the fields.");
			return false;
		}
		else if(str7 =="")
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
<body style="font-family:Arial;">
<div id="admin" style="width:400px;height:400px;border:1px solid black;margin-top:125px;border-radius:10px;margin-left:420px;padding:30px;">
<h2>Payment Portal</h2>
<table>
<form action="Mpay.php" method='post' onsubmit="return validate()">
<tr><td>Card Holder Name:</td></tr>
<tr><td><input type="text" name="cname" style="border:#FFFFFF;border-bottom: 2px solid #3F729B;" id="cname" onblur="allcaps()"></td></tr>
<tr><td>Card Type :</td></tr>
<tr><td><select name="ctype" id="ctype"><option value="">Select Card Type</option><option value="Visa">Visa</option><option value="Mastercard" />Mastercard</option></select></td></tr>
<tr><td>Card number:</td></tr>
<tr><td><input type="text" style="border:#FFFFFF;border-bottom: 2px solid #3F729B;" name="cnum" id="cnum" onblur="checklen()"></td></tr>
<tr><td>CVV:</td></tr>
<tr><td><input type='number' name='cvv' id='cvv' style="border:#FFFFFF;border-bottom: 2px solid #3F729B;" min="100" max="999" /></td></tr>
<tr><td>Expiry Date:</td></tr>
<tr><td><input type="number" name="edate1" id="edate1" style="border:#FFFFFF;border-bottom: 2px solid #3F729B;"></td><td><input type="number" name="edate2" id="edate2" style="border:#FFFFFF;border-bottom: 2px solid #3F729B;"></td></tr>
<tr><td>Cost:</td></tr>
<tr><td><input type="text" style="border:#FFFFFF;border-bottom:2px solid #3F729B;" name="cost" id="cost" value="<?php include_once('Mbill.php');?>" readonly></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><br></td></tr>
<tr><td rowspan="3"><input type="submit" id="pay" value="Make Payment"></td><td rowspan="3"><input type="Reset" id="reset"></td></tr>
</form>
</table>
</div>
</body>