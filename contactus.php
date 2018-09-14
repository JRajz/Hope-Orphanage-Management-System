<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ContactUS</title>
<script>
function val()
{
	var f=0;
	if(document.forms['fdf']['name'].value=="")
	{
		document.getElementById("nerr").innerHTML="Please enter your name";
	f=1;
	}
	else
	{
		document.getElementById("nerr").innerHTML="";	
	}
	if(document.forms['fdf']['subject'].value=="")
	{
		document.getElementById("serr").innerHTML="Please enter your subject";
	f=1;
	}
	else
	{
		document.getElementById("serr").innerHTML="";	
	}
	if(document.forms['fdf']['message'].value=="")
	{
		document.getElementById("merr").innerHTML="Please enter your message";
	f=1;
	}
	else
	{
		document.getElementById("merr").innerHTML="";	
	}
	if(f==1)
	{
	return false;
	}
}

</script>

<style>
body {
	
color: #666;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 13px;
	line-height: 1.7em; 
	background-color: #fff;
	background-repeat: repeat-x;
	background-position: top	;

}
.fstdiv1
{
	width:490px;
	height:auto;
	float:left;
	margin-left:50px;
	padding-left:20px;
	padding-top:20px;
}
.scndiv1
{
	width:700px;
	height:800px;
	float:right;
	padding-top:20px;
	padding-left:20px;
	
}
.brdr
{
	border:double;
	color:#630;

}
.bg
{
	height:1200px;
	width:auto;
	background-color:#FFF;
}
.fbg
{
	width:auto;
	height:auto;
	background-color:#06F;
}


</style>
</head>
<body>

<?php
session_start();
if(isset($_SESSION['user'])||isset($_SESSION['admin']))
{
	include "header2.php";
}
else
{
	include "header1.php";
}
?>

<div class="bg">

<div class="fstdiv1" ><br />
 <h2 style="color:#F60"> HOPE CHILDREN'S HOME </h2>
<h3>K.P Nagar,2nd Street,<br />
Peringome (P.O),<br />
Near Police Station,<br />
Kannur Dist,Kerala<br />
Pin:670307<br /><br /></h2>
<font color="#0066CC" size="+2">Mobile No:<br /></font><h3>9745532768,9400440274,9945651207</h3><br /><br /><br />
<font color="#0066CC" size="+2">E-Mail:</font><h2>hopechildrenshome@boss.com</h3><br /><br />
<font color="#0066FF" size="+3">ContactUs</font><br /><br />
<div class="fbg">
<table style="color:#FFF" cellpadding="8px">
<form method="post" action="action/feed_action.php" name="fdf" onsubmit="return val()">
<tr><td>
Name:</td><td><input type="text" name="name" /> <font color="#FF0000"><i><span id="nerr"></span></i></font></td></tr>
<tr><td>Email :</td><td><input type="email" name="email" /></td></tr>
<tr><td>Your Message :</td><td><textarea name="message" cols="26" rows="13"></textarea> <font color="#FF0000"><i><span id="merr"></span></i></font></td></tr>
<tr><td colspan="2" align="center">
<input type="submit" value="Submit" />
<input type="reset" value="Reset" /></td></tr>
</form></table>
</div>
</div><br />
<div class="scndiv1"><br />
<font color="#0066FF" size="+3">Registered Office</font><h2>K.P Nagar,2nd Street,<br />
Peringome (P.O),<br />
Near Police Station,<br />
Kannur Dist,Kerala<br />
Pin:670307</h2> <br /><br />
<font color="#0066FF" size="+2">Website:</font><h2>www.hopechildrenshome.in</h2><br /><br /><br />
<br /><br />
<h2><font color="#0066FF" size="+3">Where you can find us?</font></h2><br />
<div class="brdr"><img src="map.jpg" width="694"height="399" />
</div></div>
</div>

<?php
include "ftr1.php";
?>
</body>
</html>