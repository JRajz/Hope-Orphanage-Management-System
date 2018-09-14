<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<?php
include_once 'session.php';
$flag=0;
$pan=$_POST['pan'];
$don1=$_POST['don'];
$don2=$_POST['don1'];
if($don1=="on")
{
$don=$don2;
}
else
$don=$don1;

$user=$_SESSION['user'];
$con=mysqli_connect('localhost','root','','orphan');
$sql="INSERT INTO `don_table`(`DonationType`, `Pan`, `Uname`) VALUES ('$don','$pan','$user','')";
	



$bank=$_POST['bank'];
$accno=$_POST['accno'];
$un=$_POST['un'];
$pass=$_POST['pass'];

$con=mysqli_connect('localhost','root','','orphan');
	$sql2="select * from bank_account";
	$result2=mysqli_query($con,$sql2);
	while($row2=mysqli_fetch_assoc($result2))
	{
	
	if(strcmp($bank,$row2['bank'])==0&&strcmp($accno,$row2['acc_number'])==0&&strcmp($un,$row2['username'])==0&&strcmp($pass,$row2['password'])==0)
		{
		$f=1;
		$balance=$row2['balance'];
		$baccno=$row2['acc_number'];
		if(mysqli_query($con,$sql2))
		echo "successfull";
	$flag=1;
		
	
	if($flag==1)
	{
	if($don<$balance)
			{
			$result=mysqli_query($con,$sql);
			$balance=$balance-$don;
			$sql3="update bank_account set balance='$balance' where acc_number='$baccno'";
			if(mysqli_query($con,$sql))
				{
				echo "<font size=5px>";
				echo '<center>';
				echo "<img src='../babes/donation/images.jpg' height='200px' width='600px'>";
				echo "<br>";
				echo "Delivered Successfully";
				echo '</center>';
				echo "</font>";
				}
			}
	else
	{
		echo '<font size=8px>';
		echo '<center>';
		
		echo "<div align='center'><font size='+4'>Insufficient balance please try again</font></div>";
		echo '</center>';
		echo '</font>';
		
	}
		}
		}
	}
	if($flag==0) 
	echo "<br><br><div align='center'><font size='+4'>Not a Valid User</font></div>";
?>

</body>
</html>