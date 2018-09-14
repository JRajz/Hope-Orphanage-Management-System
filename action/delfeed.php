<?php
$name=$_GET['Name'];
$con=mysqli_connect('localhost','root','','orphan');
$sql="DELETE FROM `feed_table` WHERE Name='$name'";
if(mysqli_query($con,$sql))
{
	header("Location:../adminfeed.php",true);
}


?>