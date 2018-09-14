<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Adoption</title>
<style>

body {
	
color: #666;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 13px;
	line-height: 1.7em; 
	background-color: #fff;
	background-repeat: repeat-x;
	background-position: top	;

}
.two
{
	width:800px;
	height:600px;
	float:left;
	padding-left:20px;
	padding-top:30px;
	background-color:#FFF;
}
.thrd
{
	padding-top:30px;
	width:450px;
	height:900px;
	float:right;
	padding-right:20px;
	margin-bottom:80px;
}
.dvtn
{
	background-color:#FFF;
	margin-top:20px;
}

</style>
</head>

<body bgcolor="#FFFFFF">
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
<div align="center" class="dvtn">
<div>
<?php
include "adophead.php";
?>
</div>

<div class="two"><font color="#0033FF"><h1><b><u>Adoption</u></b></h1></font><br />
<h3>Adoption is an alternative way to have a family.it is a lifetime decision that should be made very cautiously. Adoption is a process where parents are supplied for children whose biological parents are deceased, or for those children whose biological parents are unable or unwilling to provide for their care. Adoption creates a parent-child relationship recognized for all purposes including: child support obligations, inheritance rights and custody . The children are provided for childless couples or individuals interested in becoming parents. </h3>
<img src="photos/membr/Make_a_wish.jpg" width="562" height="342" />
</div>

<?php
include "ftr1.php";
?>
</div>
</div>
</body>
</html>