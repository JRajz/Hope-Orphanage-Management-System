<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Members</title>

<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="css/memstyle.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css"/>    
    
<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="js/jquery.lightbox-0.5.js" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
    $('.lightbox').lightBox();
});
</script>
<style>
.body
{
	margin:5px;
}
</style>
</head>
<body class="body">
<div>
<div>
<?php
session_start();
if(isset($_SESSION['user'])||isset($_SESSION['admin']))
{
	include "header2.php";
}
else
{
	include "header1.php";
}
?>
</div>
<h1>MEMBERS</h1>
<?php
if(isset($_POST['Name']))
{
$nam=$_POST['Name'];
$des=$_POST['Descr'];
$pic=$_FILES['pic']['name'];
$con=mysqli_connect('localhost','root','','orphan');
$sql="INSERT INTO `student_table`(`Name`,`Description`,`pic`) VALUES ('$nam','$des','$pic')";
$result=mysqli_query($con,$sql);
move_uploaded_file($_FILES['pic']['tmp_name'],"action/img/$pic");
$sql1="SELECT * FROM `student_table`";
$result1=mysqli_query($con,$sql1);
while($row=mysqli_fetch_assoc($result1))
{
        $pic=$row['pic'];
        $sid=$row['sid'];
		echo "<div class='img'>";
echo "<a target='_blank' href='studetail.php?sid=$sid'>";
echo "<img src='img/$pic' width='200px' height='160px'>"."</a>"."<br />";
echo "<div class='name'>".$row['Name']."</div>"."</div>";
}
}
else
{
$con=mysqli_connect('localhost','root','','orphan');	
$sql1="SELECT * FROM `student_table`";
$result=mysqli_query($con,$sql1);
echo " <div id='tooplate_main' align='center'>";
while($row=mysqli_fetch_assoc($result))
{
        $pic=$row['pic'];
        $id=$row['sid'];

    echo "    <div class='col_w960' align='center'>";
 echo "<div id='gallery'>";
echo "<div class='gallery_box img'>";		
         echo"  <h3>".$row['Name']." </h3>";
         echo " <a class='lightbox' href='action/img/$pic' title=''>";
           echo "<tr>";
		   echo "<td>";
		   echo "   <img src='action/img/$pic' width='200px' height='180px' alt='Image' />";
			echo "</a>";
				if(isset($_SESSION['admin']))
	{
	echo '<input type="button"  onclick="del('.$id.')" value="DELETE">';
	}
	else if(isset($_SESSION['user']))
	echo"";
            echo "        <a href='action/studetail.php?sid=$id' class='more float_r'>Detail</a>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
}
			echo "</div>";
}
?>  
<script>
function del($id)
{
var a="action/delfile1.php?sid="+$id;
	location.href=a;
}

</script>  
</div>
</body>
</html>