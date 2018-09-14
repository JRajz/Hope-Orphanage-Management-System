<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$em=$_POST['email'];
$nam=$_POST['name'];
$mes=$_POST['message'];
$con=mysqli_connect('localhost','root','','orphan');
$sql="INSERT INTO `feed_table`( `Name`, `Email`, `Message`) VALUES ('$nam','$em','$mes')";
$result=mysqli_query($con,$sql);

?>

</body>
</html>