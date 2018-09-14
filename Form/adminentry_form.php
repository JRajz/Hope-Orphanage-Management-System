<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="align.css" rel="stylesheet" type="text/css" />
<script>
function val()
{
	var f=0;
	if(document.forms['adm']['Name'].value=="")
	{
		document.getElementById("nerr").innerHTML="Please enter name";
	f=1;
	}
	else
	{
		document.getElementById("nerr").innerHTML="";	
	}

	if(document.forms['adm']['Descr'].value=="")
	{
		document.getElementById("derr").innerHTML="Please enter description";
	f=1;
	}
	else
	{
		document.getElementById("derr").innerHTML="";	
	}
	
	var imgpath = document.getElementById('pic').value;
if(imgpath == "")
{
document.getElementById("perr").innerHTML="Insert Photo";
f=1;
}
else
{
document.getElementById("perr").innerHTML="";
}
if(f==1)
	{
		return false;
	}

}
function val1()
{
	if(document.forms['adm1']['Des'].value=="")
	{
		document.getElementById("deerr").innerHTML="Please enter description";
	f=1;
	}
	else
	{
		document.getElementById("deerr").innerHTML="";	
	}
	
	var imgpath = document.getElementById('img').value;
if(imgpath == "")
{
document.getElementById("imerr").innerHTML="Insert Photo";
f=1;
}
else
{
document.getElementById("imerr").innerHTML="";
}
if(f==1)
	{
		return false;
	}
	
}

</script>

</head>

<body>

<?php
if(isset($_POST['Des']))
{
$des=$_POST['Des'];
$pic=$_FILES['img']['name'];
$con=mysqli_connect('localhost','root','','orphan');
$sql="INSERT INTO `galtab`(`imgname`,`imgdes`) VALUES ('$pic','$des')";
$result=mysqli_query($con,$sql);
move_uploaded_file($_FILES['img']['tmp_name'],"../action/gal/$pic");
echo "successful";
}

if(isset($_POST['Name']))
{
$nam=$_POST['Name'];
$des=$_POST['Descr'];
$pic=$_FILES['pic']['name'];
$con=mysqli_connect('localhost','root','','orphan');
$sql="INSERT INTO `student_table`(`Name`,`Description`,`pic`) VALUES ('$nam','$des','$pic')";
$result=mysqli_query($con,$sql);
move_uploaded_file($_FILES['pic']['tmp_name'],"../action/img/$pic");
echo "successful";
}

?>

<div class="frm">
<div class="frm1">
<br><br /><br />
<table cellpadding="5" cellspacing="5" align="center" class="table1" frame="above">
<center><label><h2>STUDENT DETAIL</h2></label></center>
<form method="post" action="adminentry_form.php" name="adm" onsubmit="return val()" enctype="multipart/form-data">
<tr>
<td>Photo :</td>
<td><input type="file" name='pic' id="pic" class="btn" /><br /><font color="#FF0000"><i><span id="perr"></span></i></font></td>
</tr>
<tr><td>Name :</td>
<td><input type="text" name="Name" class="textbox" /><br /><font color="#FF0000"><i><span id="nerr"></span></i></font></td></tr>
<tr><td>Description :</td>
<td><textarea name="Descr" class="textbox" rows="10" cols="30"></textarea><br /><font color="#FF0000"><i><span id="derr"></span></i></font></td></tr>
<tr><td colspan="2" align="center" class="btn"><input type="submit" name="Ok" value="Submit"  /></td></tr>
</form>
</table><br />

<table cellpadding="5" cellspacing="5" align="center" class="table1" frame="below">
<form method="post" action="adminentry_form.php" name="adm1" enctype="multipart/form-data" onsubmit="return val1()">
<tr>
<td>Photo :</td>
<td><input type="file" name='img' id="img" class="btn" /><br /><font color="#FF0000"><i><span id="imerr"></span></i></font></td>
</tr><br /><br />
<tr><td>Description :</td>
<td><textarea name="Des" class="textbox" rows="10" cols="30"></textarea><br /><font color="#FF0000"><i><span id="deerr"></span></i></font></td></tr><br /><br />
<tr><td colspan="2" align="center" class="btn"><input type="submit" name="Ok1" value="Submit"  /></td></tr>

</form>

</table></div></div>
</body>
</html>