<?php
$path=$_GET['imgcd'];
$con=mysqli_connect('localhost','root','','orphan');
$sql="DELETE FROM `galtab` WHERE imgcd=$path";
if(mysqli_query($con,$sql))
{
	header("Location:../gallery.php",true);
}


?>