<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback</title>


</head>

<body>
<?php
include "sidebar2.php";
?>
<?php
$con=mysqli_connect('localhost','root','','orphan');
$sql="SELECT * FROM `feed_table`";
$result=mysqli_query($con,$sql);
echo "<div><br><br>";
echo"<table cellspacing='10px' frame='box' align='center'";
echo"<tr>";
	echo"<th>Name</th><th>Email</th><th>Message</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
	$name=$row['Name'];
	$email=$row['Email'];
	$message=$row['Message'];
	
	echo"<tr>";
	echo "<td><b>".$name."</b></td>";
	echo "<td>".$email."</td>";
	echo "<td colspan='2px'>".$message."</td>";
	echo "<td><a href='action/delfeed.php?Name=$name'>DELETE</</td>";
	echo "</tr>";
}
echo"<table>";
echo "<br><br></div>";

?>
<script>
function del($name)
{
var a="action/delfeed.php?Name="+$name;
	location.href=a;
}

</script>
</body>
</html>