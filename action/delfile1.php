<?php
$path=$_GET['sid'];
$con=mysqli_connect('localhost','root','','orphan');
$sql="DELETE FROM `student_table` WHERE sid=$path";
if(mysqli_query($con,$sql))
{
	header("Location:../student.php",true);
}


?>