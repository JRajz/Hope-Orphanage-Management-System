<html>
<style>
.memside
{
	padding:20px;
	margin:10px;
	width:auto;
	height:auto;
}
</style>
<body>
<div>
<?php
include "sidebar2.php";
?>
</div>
<div class="memside">
<?php
$con=mysqli_connect('localhost','root','','orphan');
$sql="SELECT * FROM `users_table`";
$result=mysqli_query($con,$sql);
echo "<div><br><br>";
echo "<table align='center' cellpadding='5px' frame='hsides' border='5px'<tr>";
echo "<th>ID</th>";
echo "<th>Username</th>";
echo "<th>Name</th>";
echo "<th>Date of Birth</th>";
echo "<th>Age</th>";
echo "<th>Gender</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<th>Password</th>";
echo "<th>MobNo</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
	$uid=$row['Uid'];
	$user=$row['Username'];
	$name=$row['Name'];
	$dob=$row['DOB'];
	$age=$row['Age'];
	$gen=$row['Gender'];
	$email=$row['Email'];
	$add=$row['Address'];
	$pass=$row['Password'];
	$mob=$row['MobNo'];
	echo"<tr>";
	echo "<td>".$uid."</td>";
	echo "<td>".$user."</td>";
	echo "<td>".$name."</td>";
	echo "<td>".$dob."</td>";
	echo "<td>".$age."</td>";
	echo "<td>".$gen."</td>";
	echo "<td>".$email."</td>";
	echo "<td>".$add."</td>";
	echo "<td>"."*****"."</td>";
	echo "<td>".$mob."</td></tr>";
}
echo "</table></div>";
?>
</div>
</body>
</html>