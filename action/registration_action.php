<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
</head>

<body>
<?php
$em=$_POST['email'];
$nam=$_POST['name'];
$un=$_POST['username'];
$dob=$_POST['date'];
$age=$_POST['age'];
$gen=$_POST['Gender'];
$add=$_POST['Address'];
$pas=$_POST['pswd'];
$mob=$_POST['mob'];
$con=mysqli_connect('localhost','root','','orphan');
$sql="INSERT INTO `users_table`(`Name`, `Username`, `Email`, `DOB`, `Age`, `Gender`, `Address`, `Password`, `MobNo`) VALUES ('$nam','$un','$em','$dob','$age','$gen','$add','$pas','$mob')";
if(mysqli_query($con,$sql))
{
	echo "<center";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo "<br>";
	echo "<div align='center'><font size='+4'>You are now part of Hope Children's Home.</font></div>";
	echo "<br>";
	echo "<div align='center'><font size='+3'><a href='../Form/memberlogin_form.php'>Click here</a> to Login</font></div>";
	echo "</center>";
	
}
else
{
echo"<center>";
echo "<div align='center'><font size='+4'>Something goes wrong Please try again<font></div>";
echo"</center>";
}

?>
</body>
</html>