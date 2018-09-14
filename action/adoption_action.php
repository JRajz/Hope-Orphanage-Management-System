<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adoption Request</title>
</head>

<body>
<?php
include_once 'session.php';
$sid=$_GET['sid'];

if(isset($_POST['OK']))
{
$uid=$_SESSION['uid'];
$con=mysqli_connect('localhost','root','','orphan');
$sql2="SELECT * FROM `users_table`";
$result2=mysqli_query($con,$sql2);
$flag=0;
while($row3=mysqli_fetch_assoc($result2))
{
if(strcmp($uid,$row3['Uid'])!=0)
{
$flag=1;
$hus=$_POST['hsname'];
$wif=$_POST['wfname'];
$user=$_SESSION['user'];
$ocp=$_POST['Occup'];
$sal=$_POST['Sal'];
$adr=$_POST['Adhar'];
$vot=$_POST['Vote'];
$med=$_FILES['medi']['name'];
$in=$_FILES['income']['name'];
$com=$_FILES['community']['name'];
$nat=$_FILES['nativity']['name'];
$mar=$_FILES['Marriage']['name'];
$pho=$_FILES['Photo']['name'];
$con=mysqli_connect('localhost','root','','orphan');
$sql1="SELECT * FROM `users_table` WHERE Uid=$uid";
$result1=mysqli_query($con,$sql1);
while($row1=mysqli_fetch_assoc($result1))
	{
	
	$em=$row1['Email'];
	}

$sql="INSERT INTO `adop_table`(`Uid`, `Husname`, `Wifename`, `Email`, `Occupation`, `Salary`, `AdharNo`, `VotersID`, `Medical`, `Income`, `Community`, `Nativity`, `Marriage`, `Photo`, `sid`) VALUES ('$uid','$hus','$wif','$em','$ocp','$sal','$adr','$vot','$med','$in','$com','$nat','$mar','$pho','$sid')";
$result=mysqli_query($con,$sql);
move_uploaded_file($_FILES['medi']['tmp_name'],"donation/medical/$med");
move_uploaded_file($_FILES['income']['tmp_name'],"donation/income/$in");
move_uploaded_file($_FILES['community']['tmp_name'],"donation/community/$com");
move_uploaded_file($_FILES['nativity']['tmp_name'],"donation/nativity/$nat");
move_uploaded_file($_FILES['Marriage']['tmp_name'],"donation/marriage/$mar");
move_uploaded_file($_FILES['Photo']['tmp_name'],"donation/photo/$pho");
}
}
if($flag==1)
{
		echo "<center><font color='#FF0000' size='+3'>You have already registered</font><br>Contact with office for further reference</center>";
}
else
{
	echo "<center><font color='#FF0000' size='+3'>Request Successfull</font><br><font color='#FF0000'>We will contact you through your email</font></center>";
}
}
?>
</body>
</html>