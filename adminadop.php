<html>
<head>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css"/>    
    

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="js/jquery.lightbox-0.5.js" media="screen" />

<script type="text/javascript">
$(function() {
    $('.lightbox').lightBox();
});
</script>
<style>
.s3
{
	width:auto;
}
</style>
</head>
<body>
<div>
<?php
include "sidebar2.php";
?>
</div>
<div class="s3">
<?php

$con=mysqli_connect('localhost','root','','orphan');
$sql="SELECT * FROM `adop_table`";
$result=mysqli_query($con,$sql);
echo "<div><br><br>";
echo "<table align='center' cellpadding='5px' frame='hsides' border='5px'><tr>";
echo "<th>ID</th>";
echo "<th>Husband Name</th>";
echo "<th>Wife Name</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<th>Occupation</th>";
echo "<th>Salary</th>";
echo "<th>Adhar no.</th>";
echo "<th>Voter's ID</th>";
echo "<th>Medical</th>";
echo "<th>Income</th>";
echo "<th>Nativity</th>";
echo "<th>Community</th>";
echo "<th>Marriage</th>";
echo "<th>Photo</th>";
echo "<th>MobNo</th>";
echo "<th>Student</th></tr>";

	
	
while($row=mysqli_fetch_assoc($result))
{
	$uid=$row['Uid'];
	$em=$row['Email'];
	$adno=$row['Adopno'];
	$hs=$row['Husname'];
	$wf=$row['Wifename'];
	$ocp=$row['Occupation'];
	$sal=$row['Salary'];
	$Adno=$row['AdharNo'];
	$Vot=$row['VotersID'];
	$med=$row['Medical'];
	$in=$row['Income'];
	$nat=$row['Nativity'];
	$com=$row['Community'];
	$mar=$row['Marriage'];
	$pic=$row['Photo'];
	$s=$row['sid'];
	$sql1="SELECT * FROM `users_table` WHERE Uid=$uid";
	$sql2="SELECT * FROM `student_table` WHERE SID=$s";
	$result1=mysqli_query($con,$sql1);
	$result2=mysqli_query($con,$sql2);
	while($row1=mysqli_fetch_assoc($result1))
	{
	$add=$row1['Address'];
	$mob=$row1['MobNo'];
	}
	while($row2=mysqli_fetch_assoc($result2))
	{
	$img=$row2['pic'];
	$name=$row2['Name'];
	}

	echo "<tr><td>".$adno."</td>";
echo "<td>".$hs."</td>";
	echo "<td>".$wf.'</td>';
		echo "<td>".$em."</td>";
		echo "<td>".$add."</td>";
	echo "<td>".$ocp.'</td>';
	echo "<td>".$sal.'</td>';
	echo "<td>".$Adno.'</td>';
	echo "<td>".$Vot.'</td>';
	echo "<td> <a class='lightbox' href='action/donation/medical/$med' title='Medical'>";
      echo "Click here</a></td>";
	  echo "<td> <a class='lightbox' href='action/donation/income/$in' title='Income'>";
      echo "Click here</a></td>";
	  echo "<td> <a class='lightbox' href='action/donation/nativity/$nat' title='Nativity'>";
      echo "Click here</a></td>";
	  echo "<td> <a class='lightbox' href='action/donation/community/$com' title='Community'>";
      echo "Click here</a></td>";
	  echo "<td> <a class='lightbox' href='action/donation/marriage/$mar' title='Marriage'>";
      echo "Click here</a></td>";
	  echo "<td> <a class='lightbox' href='action/donation/photo/$pic' title='Photo'>";
      echo "Click here</a></td>";
	echo "<td>".$mob.'</td>';
	echo "<td><a class='lightbox' href='action/img/$img' title='$name'>".$s."</a></td>";
}
echo"<table>";
echo "<br><br></div>";

?>
</div>
</body>
</html>