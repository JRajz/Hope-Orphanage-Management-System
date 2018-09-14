<html>
<head>
<style>
.s3
{
	width:auto;
	float:left;
	margin-top:-200px;
	margin-left:350px;
}
</style>
</head>
<body>
<div>
<div>
<?php
include "sidebar2.php";
?>
</div>
<div class="s3">
<?php
$con=mysqli_connect('localhost','root','','orphan');
$sql1="SELECT * FROM `don_table`";
$result=mysqli_query($con,$sql1);
echo "<div><br><br>";
echo "<table align='center' cellpadding='5px' frame='hsides' border='5px'><tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Donation Type</th>";
echo "<th>PAN No</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result))
{
	$did=$row['D.ID'];
	$don=$row['DonationType'];
	$pan=$row['Pan'];
	$nam=$row['Uname'];
	$pan=$row['Pan'];
	echo '<tr><td>'.$did.'</td>';
	echo '<td>'.$nam.'</td>';
	echo '<td>'.$don.'</td>';
	echo '<td>'.$pan.'</td></tr>';
	
	echo "<br><br>";
}
echo"</table>";
echo "<br><br></div>";

?>
</div>
</div>
</body>
</html>