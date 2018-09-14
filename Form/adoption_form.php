<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adoption Form</title>
<link href="align.css" rel="stylesheet" type="text/css" />
<script>
function val()
{
	var f=0;
	if(document.forms['adop']['hsname'].value=="")
	{
		document.getElementById("herr").innerHTML="Please enter husband name";
	f=1;
	}
	else
	{
		document.getElementById("herr").innerHTML="";	
	}
	if(document.forms['adop']['wfname'].value=="")
	{
		document.getElementById("wferr").innerHTML="Please enter wife name";
	f=1;
	}
	else
	{
		document.getElementById("wferr").innerHTML="";	
	}
	if(document.forms['adop']['Occup'].value=="")
	{
		document.getElementById("ocerr").innerHTML="Please enter your occupation";
	f=1;
	}
	else
	{
		document.getElementById("ocerr").innerHTML="";	
	}
	if(document.forms['adop']['Sal'].value=="")
	{
		document.getElementById("saerr").innerHTML="Please enter your salary";
	f=1;
	}
	else
	{
		document.getElementById("saerr").innerHTML="";	
	}
	if(document.forms['adop']['Adhar'].value=="")
	{
		document.getElementById("aderr").innerHTML="Please enter your Adhar No";
	f=1;
	}
	else
	{
		document.getElementById("aderr").innerHTML="";	
	}
	if(document.forms['adop']['Vote'].value=="")
	{
		document.getElementById("voerr").innerHTML="Please enter your voter's ID";
	f=1;
	}
	else
	{
		document.getElementById("voerr").innerHTML="";	
	}
var imgpath = document.getElementById('medi').value;
if(imgpath == "")
{
document.getElementById("meerr").innerHTML="Insert Medical Certificate";
f=1;
}
else
{
document.getElementById("meerr").innerHTML="";
}
var imgpath1 = document.getElementById('income').value;
if(imgpath1 == "")
{
document.getElementById("inerr").innerHTML="Insert Income Certificate";
f=1;
}
else
{
document.getElementById("inerr").innerHTML="";
}
var imgpath2 = document.getElementById('community').value;
if(imgpath2 == "")
{
document.getElementById("comerr").innerHTML="Insert Community Certificate";
f=1;
}
else
{
document.getElementById("comerr").innerHTML="";
}
var imgpath3 = document.getElementById('nativity').value;
if(imgpath3 == "")
{
document.getElementById("naterr").innerHTML="Insert Nativity Certificate";
f=1;
}
else
{
document.getElementById("naterr").innerHTML="";
}
var imgpath4 = document.getElementById('marriage').value;
if(imgpath4 == "")
{
document.getElementById("marerr").innerHTML="Insert Marriage Certificate";
f=1;
}
else
{
document.getElementById("marerr").innerHTML="";
}
var imgpath3 = document.getElementById('photo').value;
if(imgpath3 == "")
{
document.getElementById("phoerr").innerHTML="Insert your family photo";
f=1;
}
else
{
document.getElementById("phoerr").innerHTML="";
}

	if(f==1)
	{
		return false;
	}
}

</script>
</head>

<body>
<div class="frm">
<div class="frm1">

<h2 align="Center"><u>ADOPTION FORM</u></h2><br /><br />
<table align="center" cellspacing="3" cellpadding="6" class="table1 text">
<?php
 $sid=$_GET['sid'];
echo "<form method='post' action='../action/adoption_action.php?sid=$sid' name='adop' onsubmit='return val()' onsubmit='return file_upload()' enctype='multipart/form-data'>";
?>
<tr>
<td>Husband Name :</td><td> <input type="text" name="hsname" class="textbox"  /><br /> <font size="+1" color="#FF0000"><i><span id="herr"></span></i></font></td>
</tr>
<tr>
<td>Wife Name  :</td><td  ><input type="text" name="wfname" class="textbox"  /><br /> <font color="#FF0000" size="+1"><i><span id="wferr"></span></i></font> </td>
</tr>
<tr>
<td>Occupation :</td>
<td><input type="text" name="Occup" class="button" /><font size="+1" color="#FF0000"><i><span id="ocerr"></span></i></font> </td></tr>
<tr>
<td>Salary :</td>
<td><input type="number" name="Sal" class="button" /><font size="+1" color="#FF0000"><i><span id="saerr"></span></i></font></td></tr>
<tr>
<td>Adhar No.:</td>
<td><input type="text" name='Adhar' class="button" /><font size="+1" color="#FF0000"><i><span id="aderr"></span></i></font>  </td></tr>
<tr>
<td>Voter's ID :</td>
<td><input type="text" name='Vote' class="button" /><font size="+1" color="#FF0000"><i><span id="voerr"></span></i></font>  </td>
</tr>
<tr>
<td>Medical Cert. :</td>
<td><input type="file" name="medi" id="medi" class="button" /><font color="#FF0000" size="+1"><i><span id="meerr"></span></i></font></td></tr>
<tr>
<td>Income Cert. :</td>
<td><input type="file" name="income" id="income" class="button" /><font color="#FF0000" size="+1"><i><span id="inerr"></span></i></font></td>
</tr>
<tr>
<td>Community :</td>
<td><input type="file" name='community' id="community" class="button" /><font color="#FF0000" size="+1"><i><span id="comerr"></span></i></font></td></tr>
<tr>
<td>Nativity :</td>
<td><input type="file" name='nativity' id="nativity" class="button" /><font color="#FF0000" size="+1"><i><span id="naterr"></span></i></font></td>
</tr>
<tr>
<td>Marriage Cert. :</td>
<td><input type="file" name='Marriage' id="marriage" class="button" /><font color="#FF0000" size="+1"><i><span id="marerr"></span></i></font></td></tr>
<tr>
<td>Photo :</td>
<td><input type="file" name='Photo' id="photo" class="btn" /><font color="#FF0000" size="+1"><i><span id="phoerr"></td>
</tr>
<tr>
<td colspan="4">
<input type="checkbox" name="terms" required="required" /> Accept terms & Condition
</td>
</tr>
<tr><td colspan="2" align="center">
<input type="Submit" name="OK" value="Register" class="btn" />
<input type="Reset" value="Reset" class="btn" />
</td></tr>
</form>
</table>
</div></div>
</body>
</html>