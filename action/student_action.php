<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Members</title>

<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="../css/memstyle.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


<link rel="stylesheet" type="text/css" href="../css/jquery.lightbox-0.5.css"/>    
    
<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="../js/jquery.lightbox-0.5.js" media="screen" />
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
move_uploaded_file($_FILES['pic']['tmp_name'],"img/$pic");
echo "successful";
}
?>
</body>
</html>