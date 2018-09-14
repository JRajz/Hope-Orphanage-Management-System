
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Donation Form</title>
<link href="form/align.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.0.min.js"></script>
<script>
	$(function(){
			$('#hideb').hide();
		});
function showbank()
	{
		$(function(){
			$('#hideb').show(1000);
		});
	}
function val()
{
	var f=0;
	if(document.forms['donation']['don'].value=="")
	{
		document.getElementById("amerr").innerHTML="Please select any option";
		f=1;
	}
	else
	{
		document.getElementById("amerr").innerHTML="";	
	}
	
		if(document.forms['donation']['pan'].value=="")
	{
		document.getElementById("pnerr").innerHTML="Please enter your pan number";
	f=1;
	}
	else
	{
		document.getElementById("pnerr").innerHTML="";	
	}
	if(f==1)
	{
		return false;
	}
	else
	{
		showbank();
	}
}
function val1()
{
	var f=0;
	
	if(document.forms['donation']['bank'].value=="")
	{
		f=1;
		document.getElementById('bnerr').innerHTML="Please select the bank";
    }
	else
	{
		document.getElementById('bnerr').innerHTML="";
	}
	

	
	if(document.forms['donation']['accno'].value=="")
	{
		f=1;
		document.getElementById('acerr').innerHTML="Please enter the account number";
    }
	else
	{
		document.getElementById('acerr').innerHTML="";
	}
	

	if(document.forms['donation']['un'].value=="")
	{
		f=1;
		document.getElementById('unerr').innerHTML="Please enter the username";
    }
	else
	{
		document.getElementById('unerr').innerHTML="";
	}
	

	if(document.forms['donation']['pass'].value=="")
	{
		f=1;
		document.getElementById('pserr').innerHTML="Please enter the password";
    }
	else
	{
		document.getElementById('pserr').innerHTML="";
	}
	if(f==1)
	{
		return false;
	}
}

</script>
<script type="text/javascript">
    function ShowText() {
        var chkYes = document.getElementById("chkYes");
        var dvText = document.getElementById("dvText");
        dvText.style.display = chkYes.checked ? "block" : "none";
    }
</script>

</head>
<body bgcolor="#FFFFFF">
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
<div class="frm">
<div class="frm1">
<br>
<table  align="center" cellspacing="4" cellpadding="10" class="table1 text">
<br>
<center><label><h2>DONATION FORM</h2></label></center>

<form method="post" action="action/donation_action.php" name="donation" onSubmit="return val1()">
<label for="chkNo">
<tr><td>
<input type="radio" id="chkNo" name="don" value="1000" onClick="ShowText()" /></td><td>Food expenses for a child for 1 month(1000/-)</td></tr>
<tr><td><input type="radio" id="chkNo" name="don"  value="2000" onClick="ShowText()" /></td><td>Book & educational expenses for a child for 1 month(2000/-)</td></tr>
<tr><td><input type="radio" id="chkNo" name="don"  value="3000" onClick="ShowText()" /></td><td>Basic need expenses for a child for 1 month(3000/-)</td></tr>
<tr><td><input type="radio" id="chkNo" name="don" onClick="ShowText()"  value="5000" /></td><td>Health expenses for a child for 1 month(3500/-)</td></tr>
<tr><td><input type="radio" id="chkNo" name="don" onClick="ShowText()"  value="15000" /></td><td>Yearly expenses for a child(15000/-)</td></tr></label>
<tr><td><label for="chkYes">
    <input type="radio" id="chkYes" name="don" onClick="ShowText()" /></label>
</td><td>Others<div id="dvText" style="display: none">
    <input type="text" id="txt" name="don1";/>
</div><font color="#FF0000" size="+1"><i><span id="amerr"></span></i></font></td></tr>
<tr>
<td>
Pan :</td><td> <input type="text" name="pan" class="textbox" /><font color="#FF0000" size="+1"><i><span id="pnerr"></span></i></font>
</td>
</tr>
<tr></tr>
<tr><td colspan="2" align="center">
<input type="button" name="OK" value="Proceed to Checkout" class="btn" onClick="val()" />

<input type="reset" name="OK" value="Reset" class="btn"  />
</td>
</tr>
<br><br>
<div style="margin-left:auto margin-right:auto width:400px" class="table1 text">
<table id="hideb" align="center">
<tr><td>Bank</td>
<td><select name="bank">
<option></option>
<option value="SBI">SBI</option>
<option value="SBT">SBT</option>
<option value="ICICI">ICICI</option>
<option value="FEDERAL">FEDERAL</option>
</select>
<font color="#FF0000"><span id="bnerr"></span></font>
</td></tr>
<tr><td>Account number</td><td><input type="text" name="accno"/></td></tr>
<tr><td></td><td><font color="#FF0000"><span id="acerr"></span></font></td></tr>
<tr><td>User name</td><td><input type="text" name="un"/></td></tr>
<tr><td></td><td><font color="#FF0000"><span id="unerr"></span></font></td></tr>
<tr><td>Password</td><td><input type="password" name="pass"/></td></tr>
<tr><td></td><td><font color="#FF0000"><span id="pserr"></span></font></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" class="btn"/>
<input type='reset' name="Reset" class="btn"/>
</td></tr>
</table>
</div>
</form>
</table>
</div></div>


</body>
</html>