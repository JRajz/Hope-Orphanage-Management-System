<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link href="Form/align.css" rel="stylesheet" type="text/css" />
<script>
function val()
{
	var f=0;
	if(document.forms['adof']['name'].value=="")
	{

		document.getElementById("naerr").innerHTML="Please enter name";
		f=1;
	}
	else
	{
		document.getElementById("naerr").innerHTML="";	
	}
	if(document.forms['adof']['username'].value=="")
	{

		document.getElementById("unerr").innerHTML="Please enter name";
		f=1;
	}
	else
	{
		document.getElementById("unerr").innerHTML="";	
	}
	if(document.forms['adof']['age'].value=="")
	{
		document.getElementById("aerr").innerHTML="Please enter age";
		f=1;
	}
	else
	{
		document.getElementById("aerr").innerHTML="";	
	}
	if(document.forms['adof']['Gender'].value=="")
	{
		document.getElementById("gerr").innerHTML="Select an option";
		f=1;
	}
	else
	{
		document.getElementById("gerr").innerHTML="";	
	}
	if(document.forms['adof']['date'].value=="")
	{
		document.getElementById("derr").innerHTML="Select your date of birth";
		f=1;
	}
	else
	{
		document.getElementById("derr").innerHTML="";	
	}
	if(document.forms['adof']['email'].value=="")
	{
		document.getElementById("emerr").innerHTML="Enter your Email ID";
		f=1;
	}
	else
	{
		document.getElementById("emerr").innerHTML="";	
	}
	 if(document.forms['adof']['Address'].value=="")
	{
		document.getElementById("aderr").innerHTML="Enter your address";
		f=1;
	}
	else
	{
		document.getElementById("aderr").innerHTML="";
	}
	
	if(document.forms['adof']['mob'].value=="")
	{
		document.getElementById("merr").innerHTML="Enter your mobile number";
		f=1;
	}
	else
	{
		document.getElementById("merr").innerHTML="";	
	}
	if(document.forms['adof']['pswd'].value=="")
	{
		document.getElementById("perr").innerHTML="Enter your password";
		f=1;
	}
	else
	{
		document.getElementById("perr").innerHTML="";	
	}
	
	if(document.forms['adof']['rpswd'].value=="")
	{
		document.getElementById("rperr").innerHTML="Please re-enter your password";
		f=1;
	}
	else
	{
		document.getElementById("rperr").innerHTML="";	
	}
	
	if(f==1)
	{
	return false;
	}

}
function pass()
{
	if(document.forms['adof']['pswd'].value!=document.forms['adof']['rpswd'].value)
	{
		document.forms['adof']['pswd'].value="";
		document.forms['adof']['rpswd'].value="";
		document.getElementById("perr").innerHTML="";
		document.getElementById("rperr").innerHTML="Password do not match";
	}
	else
	{
		document.getElementById("rperr").innerHTML="";
	}

}
function phonenumber( )
			{  
  			var phoneno = /^\d{10}$/;  
  			if(document.forms["adof"]["mob"].value.match(phoneno))  
  			{  
    	 	document.getElementById('merr').innerHTML="";	
  			}  
  			else  
  			{  
     		document.getElementById('merr').innerHTML="Please provide a valid contact number";
     	return f=1;  
  			} 
	} 
	
function addressval()
  {
   	var f=0;
	if(document.getElementById('address').value.length > 150) 	{
   document.getElementById("aderr").innerHTML="Address cannot be more than 150 characters";
    return false;
	}
	else
	{
		document.getElementById("aderr").innerHTML="";
	}
 }
 function nameval()
 {
	 var nam=/[^a-zA-Z]/;
	if(document.forms["adof"]["name"].value.match(nam))  
  			{  
    	 	document.getElementById('naerr').innerHTML="Enter only alphabets";	
  			}  
	else
	{
		document.getElementById("naerr").innerHTML="";

	}
 }
 function userval()
 {
	 var us1=/[^a-z0-9]/;
	if(document.forms["adof"]["username"].value.match(us1))  
  			{  
    	 	document.getElementById('unerr').innerHTML="Enter lower alphabets and numbers";	
  			}  
	else
	{
		document.getElementById("unerr").innerHTML="";

	}
 }
</script>

</head>

<body bgcolor="#FFFFFF">
<?php
session_start();
if(isset($_SESSION['user']))
{
	include "header2.php";
}
else
{
	include "header1.php";
}
?>

<div class="frm">
<div class="frm1">
<table bgcolor="#FFFFFF" align="center" cellspacing="5"cellpadding="10" class="table1 text">
<center><label><h2>REGISTRATION FORM</h2></label></center>
<form method="post" name="adof" action="action/registration_action.php" onsubmit="return val()">
<tr>
<td>
Name  :</td><td> <input type="text" name="name" id="name" class="textbox" onchange="nameval()"  /><br />
<font color="#FF0000" size="+1"><i><span id="naerr"></span></i></font></td></tr>
<tr>
<td>
Username  :</td><td> <input type="text" name="username" class="textbox" onchange="userval()"/><br /><font color="#FF0000" size="+1"><i><span id="unerr"></span></i></font></td></tr>
<tr><td>Age</td><td><input type="number" name="age" maxlength="3" /><br /><font color="#FF0000" size="+1"><i><span id="aerr"></span></i></font></td></tr>
<tr>
<td>Gender :</td>
<td><input type="radio" name="Gender" value="Male" checked="checked"  />Male<input type="radio" name="Gender" value="Female" />Female<br /><font color="#FF0000" size="+1"><i><span id="gerr"></span></i></font></td></tr>
<tr>
<td>Date of Birth :</td>
<td><input type="date" name="date" /><br /><font color="#FF0000" size="+1"><i><span id="derr" ></span></i></font></td>
</tr>
<tr>
<td>E-Mail :</td>
<td><input type="email" name="email" class="textbox"  /><br /><font color="#FF0000" size="+1"><i><span id="emerr"></span></i></font>
</td>

</tr>
<tr>
 <td valign="top">
Address:<td><textarea cols="20" rows="5" name="Address" id="address" class="textbox" onchange="addressval()"></textarea><br />
<font color="#FF0000" size="+1"><i><span id="aderr"></span></i></font>
</td></tr>
<tr><td>Mob No:</td>
<td><input type="number" name="mob" id="contact" class="textbox" onchange="phonenumber()"  /><br /><font color="#FF0000" size="+1"><i><span id="merr"></span></i></font></td></tr>
<tr><td>
Password :</td><td><input type="password" name="pswd" class="textbox" /><br /><font color="#FF0000" size="+1"><i><span id="perr"></span></i></font>
</td></tr>
<tr>
<td>Re-Enter Password :</td>
<td><input type="password" name="rpswd" class="textbox" onchange="pass()" /><br /><font color="#FF0000" size="+1"><i><span id="rperr"></span></i></font>
</td></tr>
<tr>
<td colspan="2">
<input type="checkbox" name="terms" required="required"/> I accept the <u><a href="">Terms & Condition</a></u>
</td>
</tr>
<tr><td colspan="2" align="center">
<input type="submit" name="OK" value="Signup" class="button" onclick="return checkForm(this);" />
</td></tr>
</form>

</table>
</
</div>
</body>
</html>