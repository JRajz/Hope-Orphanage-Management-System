<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<?php
include_once 'session.php';
if(isset($_POST['Login']))
{
	$con=mysqli_connect('localhost','root','12345','orphan');
	$nam=$_POST['user'];
	$pass=$_POST['password'];
	$sql="SELECT * FROM `users_table`";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
		if(strcmp($nam,$row['Username'])==0&&strcmp($pass,$row['Password'])==0)
		{
			$_SESSION['user']=$row['Username'];
			$_SESSION['uid']=$row['Uid'];
			header('Location:..\index.php',true);

		}
		else
		{
			
			echo "<b>Username or password error</b>";
			
			
		}

	}
}
else
{
}

?>
</body>
</html>