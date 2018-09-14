<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.font
{
	color:#03F;
	font-size:24px;
	width:600px;
	height:250px;

}	
.tt
{
	border:double;
	margin-bottom:2000px;
	text-align:center;
}
.bb
{
	font-family:Verdana, Geneva, sans-serif;
	background-color:#03F;
	color:#FFF;
	font-size:15px;
	border-radius:5pc;
}
.bb a
{
	color:#FFF;
}
.bb a:hover
{
	font-family:Verdana, Geneva, sans-serif;
	background-color:#FFF;
	color:#00F;

}
</style>
</head>

<body>
<?php
$sid=$_GET['sid'];
$con=mysqli_connect("localhost","root","","orphan");
$sql="SELECT * FROM `student_table` where sid=$sid";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
	$img=$row['pic'];
	echo "<div class='bor'>";
	echo "<table class='tt' align='center'>";
	echo "<tr>.<td>";
	echo "<h2 align='center' class='green'>".$row['Name']."</h2>";
	echo "<center>"."<img src='img/$img' alt='$img' height='175px' width='175px'>"."</center>";
	echo "<br>";
	echo "<div class='font' align='center'>";
	echo "<center>"."<p>".$row['Description']."</p>"."</center>";
	echo "<td>"."</tr>";
	echo "<tr>"."<td>";
	echo "<form>";
	echo "<button class='bb' name='Adopt'><a href='../form/adoption_form.php?sid=$sid'>Adopt</a>";
	echo "</form>";
	echo "</tr>"."</td>";
	echo "</table>";

echo "</div>";
echo "</div>";
}
?>
</div>
</body>
</html>