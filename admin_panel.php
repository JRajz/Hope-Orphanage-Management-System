
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin_Panel</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<style>

.button {
  display: inline-block;
  border-radius: 4px;
  background-color:#00F;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  padding-bottom:25px;
  margin-left:60px;

  border-radius:8px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: ' »';
  position:static;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span:after {
  opacity: 6;
  right: 0;
}
.button a
{
	text-decoration:none;
	color:#FFF;
	font-size:24px;
}
.show1
{
	padding-top:20px;
}

</style>
</head>

<body>
<?php
session_start();
if(isset($_SESSION['admin']))
{
echo "<h1 class='green'><center>Admin Panel</center></h1>";
echo "<button class='button'  name='view' style='vertical-align:middle' onClick='fun1()'>Manage<span></span></button>";
echo "<button class='button'  name='view' style='vertical-align:middle'><a href='index.php'>View Site</a><span></span></button>";

echo "<button class='button'  name='pass' style='vertical-align:middle'><a href='uppass.php'><font size='+2'>Change Password</font><span></span></a></button>";
echo "<button class='button'  name='view' style='vertical-align:middle'><a href='action/logoutad.php'>Logout</a><span></span></button>";
echo "<div id='show' class='show1'></div>";
}
else
	echo "<br><br><h1><center><font color='#FF0000'>You are no permit to acces this page</font></center></h1>";

?>
<script>

function fun1()
{
	$c=document.getElementById("show").value;
	x=new XMLHttpRequest();
	x.onreadystatechange=function()
	{
	  if(x.readyState==4 && x.status==200)
	  {
		  document.getElementById("show").innerHTML=x.responseText;
		  
	  }	
	}
	x.open('GET','sidebar.php',true);
	x.send();
}

</script>
</body>
</html>