<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Password</title>
<link href="Form/align.css" rel="stylesheet" type="text/css" />
</head>

  <script>
function val()
{
	var f=0;
	if(document.forms['update']['pass'].value=="")
	{
		document.getElementById('perr').innerHTML="Please enter current password";
		f=1;
	}
	else
	{
		document.getElementById('perr').innerHTML="";
	}
	if(document.forms['update']['npass'].value=="")
	{
		document.getElementById('nperr').innerHTML="Please enter new passsword";
		f=1;
	}
	else
	{
		document.getElementById('nperr').innerHTML="";
	}
	if(document.forms['update']['rpass'].value=="")
	{
		document.getElementById('rperr').innerHTML="Re-enter your passsword";
		f=1;
	}
	else
	{
		document.getElementById('rperr').innerHTML="";
	}
	if(f==1)
	{
		return false;
	}

}
function val1()
{

	if(document.forms['update']['npass'].value!=document.forms['update']['rpass'].value)
	{
		document.forms['update']['npass'].value="";
		document.forms['update']['rpass'].value="";
		document.getElementById("nperr").innerHTML="";
		document.getElementById("rperr").innerHTML="password do not match";
	
	}
	else
	{
		document.getElementById("rperr").innerHTML="";
	}


}
</script>  
  <style>
  .new
  {
	  color:#C06;
  }
  .new:hover
  {
	  color:#000;
  }
  </style>     
  </head>

  <body>
  <div>
  <table bgcolor="#FFFFFF" align="center" cellspacing="5"cellpadding="10" class="table1 text" frame="box">
  <form method="post" name="update" action="uppass.php" onsubmit="return val()">
  <tr><th  colspan="2" align="center"><div class="new"><font size="+3">Update Password</font></div></th></tr>

<tr><td>
New Password:</td>
<td><input type="password" name="npass"  class="textbox"/><br /><font color="#FF0000" size="+1"><i><span id="nperr"></span></i></font></td></tr>
<tr><td>
Re-enter Password:</td>
<td><input type="password" name="rpass"  class="textbox" onchange="val1()" /><br /><font color="#FF0000" size="+1"><i><span id="rperr"></span></i></font><br></td></tr>
<tr><td align="center" colspan="2">
<input type="submit" value="Submit" name="upass" class="btn" />
</td></tr>		
 </form>
</table>
</div>
  <?php
if(isset($_POST['upass']))
{
$pass=$_POST['npass'];
$con=mysqli_connect("localhost","root","","orphan");
$sql="UPDATE `admin_table` SET `Password`='$pass' ";
if(mysqli_query($con,$sql))
{
	echo "successfull";
}
else
{
	echo "error";
}
}
?>
</body>
</html>